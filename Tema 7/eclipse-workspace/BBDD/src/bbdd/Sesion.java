package bbdd;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/Sesion")
public class Sesion extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException
	{
		/*
		boolean primeraVisita = sesion.getAttribute("numVisita") == null;
		int numVisita = 0;
		
		if (primeraVisita)
		{
			response.getWriter().println("<h1>Primera visita</h1>");
			sesion.setAttribute("numVisita", Integer.valueOf(1));
		}
		else
		{
			numVisita = (int) sesion.getAttribute("numVisita");
			numVisita++;
			response.getWriter().println("<h1>Visita número: "+numVisita+"</h1>");
			sesion.setAttribute("numVisita", numVisita);
		}
		*/
		try
		{
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost/test", "root", "");
			String sql = "insert into personas(nombre,edad) values('Juanito',15)";
			PreparedStatement sentencia = con.prepareStatement(sql);
			sentencia.execute();
			con.close();
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
	}

}
