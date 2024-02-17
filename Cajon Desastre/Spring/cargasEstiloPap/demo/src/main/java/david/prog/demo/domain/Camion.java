package david.prog.demo.domain;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;

@Entity
public class Camion {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @OneToOne(mappedBy = "camionAsociado")
    private Carga cargaAsociada;

    @OneToOne
    @JoinColumn(name = "camionero_id")
    private Camionero camioneroAsociado;

    @Column(unique = true)
    private String matricula;

    public Camion() {}

    public Camion(String matricula, Camionero nCamioneroAsociado, Carga nCargaAsociada) {
        this.matricula = matricula;
        this.camioneroAsociado = nCamioneroAsociado;
        this.cargaAsociada = nCargaAsociada;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Carga getCarga() {
        return cargaAsociada;
    }

    public void setCarga(Carga carga) {
        this.cargaAsociada = carga;
    }

    public String getMatricula() {
        return matricula;
    }

    public void setMatricula(String matricula) {
        this.matricula = matricula;
    }

}
