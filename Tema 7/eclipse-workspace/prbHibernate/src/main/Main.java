package main;

import java.util.Scanner;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import domain.Pais;

public class Main {
	
	@SuppressWarnings("resource")
	public static void main(String[] args) {
		System.out.print("Introduce un nombre de país: ");
		String nombre = (new Scanner(System.in)).nextLine();
		System.out.println(nombre);
		savePais(nombre);
	}
	
	public static void savePais(String nombre)
	{
		Pais pais = new Pais(nombre);
		Session session = getSession();
		Transaction t = session.beginTransaction();
		session.save(pais);
		t.commit();
	}

	private static Session getSession()
	{
		SessionFactory sf = new Configuration().configure().buildSessionFactory();
		return sf.openSession();
	}
}
