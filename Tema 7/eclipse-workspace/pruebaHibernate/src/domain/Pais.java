package domain;

public class Pais {
	
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
