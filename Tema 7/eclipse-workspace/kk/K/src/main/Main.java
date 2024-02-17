package main;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import pojo.Pais;

public class Main {

	public static void main(String[] args) {
		Pais pais = new Pais("España");
		try {
			
			Configuration config = new Configuration().configure();
			System.out.println("<h1>Configuración creada</h1>");
			
			SessionFactory sf = config.buildSessionFactory();
			System.out.println("<h1>Driver cargado</h1>");
			
			Session session=sf.openSession();
			System.out.println("<h1>Sesión creada</h1>");
			
			Transaction t = session.beginTransaction();
			   session.save(pais);
			   System.out.println("<h1>País guardado</h1>");
			t.commit();
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}

}
