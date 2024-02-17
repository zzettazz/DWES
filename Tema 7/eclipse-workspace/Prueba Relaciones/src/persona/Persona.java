package persona;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.annotations.ManyToAny;
import org.hibernate.cfg.Configuration;

import pais.Pais;

@Entity
@Table(name = "Personas")
public class Persona {
	
	@ManyToOne
	private Pais pais;
	
	public Pais getPais()
	{
		return pais;
	}
	
	public void setPais(Pais nuevoPais)
	{
		pais = nuevoPais;
	}
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	private String nombre;
	
	public Persona(Long id, String nombre) {
		this.id = id;
		this.nombre = nombre;
	}
	
	public Persona(String nombre) {
		this.nombre = nombre;
	}

	private static Persona getPersona(Long id)
	{
		return getSession().get(Persona.class,id);
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
