package bbdd;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/Pais")
public class Pais extends HttpServlet {
	private static final long serialVersionUID = 1L;

	private ResultSet getPaisesExistentes()
	{
		ResultSet rs = null;
		
		try
		{
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/test", "root", "");
			String sql = "select * from paises";
			PreparedStatement sqlquery = con.prepareStatement(sql);
			rs = sqlquery.executeQuery();
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
		
		return rs;
	}
	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException
	{
		String codigoHTML = "<h2>Paises</h2>"
				+ "<form action=\"Pais\" method=\"POST\" />"
				+ "	<label for=\"nombrePais\">País:</label>"
				+ "	<input type=\"text\" id=\"nombrePais\" name=\"nombrePais\"/>"
				+ "	<br/>"
				+ "	<input type=\"submit\" value=\"Crear País\"/>"
				+ "</form>"
				+ "<br/><br/>"
				+ "<table border>"
				+ "	<tr>"
				+ "		<th>Nombre</th>"
				+ "	</tr>";
		
		ResultSet paisesExistentes = getPaisesExistentes();
		
		try
		{
			while (paisesExistentes.next())
			{
				String nombrePais = paisesExistentes.getString("nombre");
				codigoHTML += ("<tr><td>"+nombrePais+"</td></tr>");
			}
			
			paisesExistentes.getStatement().close();
			
			codigoHTML += ("</table>");
		}
		catch(Exception e)
		{
			codigoHTML = ("Ha ocurrido un error: "+e);
		}
		
		response.setContentType("text/html");
		response.getWriter().println(codigoHTML);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException
	{
		String nombrePais = request.getParameter("nombrePais");
		
		try
		{
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/test", "root", "");
			String sql = "insert into paises(nombre) values('"+nombrePais+"')";
			PreparedStatement sentencia = con.prepareStatement(sql);
			sentencia.execute();
			con.close();
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
		
		response.sendRedirect(request.getRequestURI());
	}

}
