package org.agaray.spring.pap2024.domain;


import java.util.ArrayList;
import java.util.Collection;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import lombok.Data;

@Entity
@Data
public class Empleado {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(unique = true)
    private String dni;

    private String nombre;

    private String apellido;

    @ManyToOne
    private Departamento departamento;

    @ManyToOne
    private Empleado jefe;

    @OneToMany(mappedBy = "jefe")
    private Collection<Empleado> subordinados;

    // ==================

    public Empleado() {
        this.subordinados = new ArrayList<>();
    }

    public Empleado(String dni, String nombre, String apellido) {
        this.dni = dni;
        this.nombre = nombre;
        this.apellido = apellido;
        this.subordinados = new ArrayList<>();
    }


}
