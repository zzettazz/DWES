package prueba;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/Boton")
public class Boton extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		response.getWriter().println("<h1>Pulsa en el botón</h1>"
				+ "<form action=\"Boton\" method=\"post\">"
				+ "		<label for=\"idNombre\">Nombre</label>"
				+ "		<input type=\"text\" id=\"idNombre\" name=\"nombre\" placeholder=\"Escribe tu nombre\"/>"
				+ "		<br/>"
				+ "		<h2>Escoge tus colores favoritos</h2>"
				+ "		Rojo: <input type=\"checkbox\" style=\"color: red;\" name=\"color\" value=\"Rojo\">"
				+ "		<br/>"
				+ "		Azul: <input type=\"checkbox\" style=\"color: blue;\" name=\"color\" value=\"Azul\">"
				+ "		<br/>"
				+ "		Verde: <input type=\"checkbox\" style=\"color: green;\" name=\"color\" value=\"Verde\">"
				+ "		<br/>"
				+ "		Amarillo: <input type=\"checkbox\" style=\"color: yellow;\" name=\"color\" value=\"Amarillo\">"
				+ "		<br/>"
				+ "		<input type=\"submit\" value=\"Pulsa =)\" />"
				+ "</form>");
	}


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String nombre = request.getParameter("nombre");
		String colores[] = request.getParameterValues("color");
		response.getWriter().println("<h1>Enhorabuena, "+nombre+"</h1>");
		if (colores.length == 1) response.getWriter().println("<h1>A mí también me gusta el "+colores[0]);
		else
		{
			String frase = "<h2>A mí también me gusta el ";
			for (String color : colores) {
				System.out.println(color);
				if (colores[colores.length-2] == color) frase.concat(color + " y el ");
				else if (colores[colores.length-1] == color) frase.concat(color + ".");
				else frase.concat(color + ", ");
			}
			
			response.getWriter().println(frase.concat("</h2>"));
		}
	}

}
