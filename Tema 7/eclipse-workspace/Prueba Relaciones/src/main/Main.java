package main;

import java.util.Scanner;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import pais.Pais;
import persona.Persona;

public class Main {
	
	@SuppressWarnings("resource")
	public static void main(String[] args) {
		System.out.print("Introduce un nombre de país: ");
		String nombrePais = (new Scanner(System.in)).nextLine();
		
		Pais paisExistente = getPaisPorNombre(nombrePais);
		
		System.out.print("Introduce un nombre de persona: ");
		String nombrePersona = (new Scanner(System.in)).nextLine();
		
		// Pais pais = savePais(nombrePais);
		savePersona("Juanito",paisExistente);
	}
	
	public static Pais savePais(String nombre)
	{
		Pais pais = new Pais(nombre);
		Session session = getSession();
		Transaction t = session.beginTransaction();
		session.save(pais);
		t.commit();
		return pais;
	}
	
	public static void savePersona(String nombre, Pais pais)
	{
		Persona persona = new Persona(nombre);
		persona.setPais(pais);
		Session session = getSession();
		Transaction t = session.beginTransaction();
		session.save(persona);
		t.commit();
	}

	private static Session getSession()
	{
		SessionFactory sf = new Configuration().configure().buildSessionFactory();
		return sf.openSession();
	}
	
	private static Pais getPaisPorNombre(String nombre)
	{
	    Session session = getSession();
	    Transaction transaction = session.beginTransaction();

	    Pais pais = session.createQuery("FROM Pais WHERE nombre = :nombre", Pais.class)
	            .setParameter("nombre", nombre)
	            .uniqueResult();

	    transaction.commit();
	    session.close();

	    return pais;
	}
}
