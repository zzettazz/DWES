package EjPalabras;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import EjPalabras.Palabra;

public class Palabras {
	
	private static Scanner sc = new Scanner(System.in);
	private static List<Palabra> miLista = new ArrayList<Palabra>();

	public static void main(String[] args)
	{
		miLista = getPalabrasExistentes();
		
		String palabraIntroducida = "";
		
		while (!palabraIntroducida.equals("0"))
		{
			System.out.print("Introduce una palabra: ");
			palabraIntroducida = sc.nextLine();
			palabraIntroducida = palabraIntroducida.toLowerCase();
					
			if (existePalabra(palabraIntroducida)) System.out.println("La palabra: '"+palabraIntroducida+"' ya existe");
			else
			{
				miLista.add(new Palabra(palabraIntroducida));
				guardarPalabra(palabraIntroducida);
			}
		}
		
		System.out.print("Introduce una palabra a buscar: ");
		palabraIntroducida = sc.nextLine();
		palabraIntroducida = palabraIntroducida.toLowerCase();
		
		if (existePalabra(palabraIntroducida)) System.out.println("La palabra '"+palabraIntroducida+"' ya existe");
		else System.out.println("La palabra '"+palabraIntroducida+"' no está en la lista");
	}
	
	private static boolean existePalabra(String palabra)
	{
		boolean existePalabra = false;
		
		for (Palabra pal : miLista)
		{
			if (palabra.equalsIgnoreCase(pal.getPalabra())) existePalabra = true;
		}
		
		return existePalabra;
	}
	
	private static void guardarPalabra(String palabras)
	{
		Palabra palabra = new Palabra(palabras);
		Session session = getSession();
		Transaction t = session.beginTransaction();
		session.save(palabra);
		t.commit();
	}
	
	private static Session getSession()
	{
		SessionFactory sf = new Configuration().configure().buildSessionFactory();
		return sf.openSession();
	}
	
	private static List<Palabra> getPalabrasExistentes()
	{
		return getSession().createQuery("from Palabra").list();
	}
	
}
