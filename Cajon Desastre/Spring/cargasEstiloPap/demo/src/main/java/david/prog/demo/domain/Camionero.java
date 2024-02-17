package david.prog.demo.domain;


import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;

@Entity
public class Camionero {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @OneToOne
    @JoinColumn(name = "camion_id")
    private Camion camionAsociado;

    @OneToOne
    @JoinColumn(name = "carga_id")
    private Carga cargaAsociada;

    @Column(unique = true)
    private String dni;


    private String nombre;

    public Camionero() {}
    
    public Camionero(String dni, String nombre, Carga carga, Camion camion) {
        this.dni = dni;
        this.nombre = nombre;
        this.camionAsociado = camion;
        this.cargaAsociada = carga;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getDni() {
        return dni;
    }

    public void setDni(String dni) {
        this.dni = dni;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    
}
