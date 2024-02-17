package david.prog.demo.domain;

import java.util.Date;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;

@Entity
public class Carga {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @OneToOne
    @JoinColumn(name = "camion_id")
    private Camion camionAsociado;

    @OneToOne
    @JoinColumn(name = "camionero_id")
    private Camionero camioneroAsociado;

    private Date fechaEntrada;
    private Date fechaSalida;

    public Carga() {}

    public Carga(Date fechaEntrada, Date fechaSalida, Camionero camioneroAsignado , Camion camionAsignado) {
        this.fechaEntrada = fechaEntrada;
        this.fechaSalida = fechaSalida;
        this.camioneroAsociado = camioneroAsignado;
        this.camionAsociado = camionAsignado;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Date getFechaEntrada() {
        return fechaEntrada;
    }

    public void setFechaEntrada(Date fechaEntrada) {
        this.fechaEntrada = fechaEntrada;
    }

    public Date getFechaSalida() {
        return fechaSalida;
    }

    public void setFechaSalida(Date fechaSalida) {
        this.fechaSalida = fechaSalida;
    }

    public Camionero getCamioneroAsignado() {
        return camioneroAsociado;
    }

    public void setCamioneroAsignado(Camionero camioneroAsignado) {
        this.camioneroAsociado = camioneroAsignado;
    }

    public Camion getCamionAsignado() {
        return camionAsociado;
    }

    public void setCamionAsignado(Camion camionAsignado) {
        this.camionAsociado = camionAsignado;
    }
    
    
}
