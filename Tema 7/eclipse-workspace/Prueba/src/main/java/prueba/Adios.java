package prueba;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet({"/Adios","/mundocruel"})
public class Adios extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		/*
		response.setContentType("text/html");
		
		response.getWriter().append("Served at: ").append(request.getContextPath());
		response.getWriter().println("<br/>ADIOS =)");
		
		PrintWriter out = response.getWriter();
		out.println("<h1>Adios mundo cruel</h1>");
		*/
		
	}

}
