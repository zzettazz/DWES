package domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

@Entity
public class Pais {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	private String nombre;
	
	public Pais(Long id, String nombre) {
		this.id = id;
		this.nombre = nombre;
	}
	
	public Pais(String nombre) {
		super();
		this.nombre = nombre;
	}

	private static Pais getPais(Long id)
	{
		return getSession().get(Pais.class,id);
	}


	private static Session getSession() {
		SessionFactory sf = new Configuration().configure().buildSessionFactory();
		return sf.openSession();
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	
	
	
}
