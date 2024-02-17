package pais;

import java.util.Collection;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import persona.Persona;

@Entity
@Table(name = "Pais")
public class Pais {
	
	@OneToMany(mappedBy = "pais")
	private Collection<Persona> personas;
	
	public Collection<Persona> getPersonas()
	{
		return personas;
	}
	
	public void setPersonas(Collection<Persona> nuevasPersonas)
	{
		personas = nuevasPersonas;
	}

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	private String nombre;
	
	public Pais(Long id, String nombre) {
		this.id = id;
		this.nombre = nombre;
	}
	
	public Pais(String nombre) {
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
