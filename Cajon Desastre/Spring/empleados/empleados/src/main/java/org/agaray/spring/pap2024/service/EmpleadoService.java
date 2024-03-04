package org.agaray.spring.pap2024.service;

import java.util.List;

import org.agaray.spring.pap2024.domain.Departamento;
import org.agaray.spring.pap2024.domain.Empleado;
import org.agaray.spring.pap2024.repository.DepartamentoRepository;
import org.agaray.spring.pap2024.repository.EmpleadoRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class EmpleadoService {
    
    @Autowired
    private EmpleadoRepository empleadoRepository;

    @Autowired
    private DepartamentoRepository departamentoRepository;

    public List<Empleado> findAll() {
        return empleadoRepository.findAll();
    }

    public List<Empleado> findByDni(String dni) {
        return empleadoRepository.findByDni(dni);
    }

    public Empleado save(String dni, String nombre, String apellido) {
        return empleadoRepository.save(new Empleado(dni,nombre,apellido));
    }

    public Empleado findById(Long idEmpleado) {
        return empleadoRepository.findById(idEmpleado).get();
    }

    public void update(Long idEmpleado, String nombre) {
        Empleado empleado = empleadoRepository.findById(idEmpleado).get();
        empleado.setNombre(nombre);
        empleadoRepository.save(empleado);
    }

    public void delete(Long idEmpleado) {
        empleadoRepository.delete(empleadoRepository.getReferenceById(idEmpleado));
    }

    public void asignarDpto(Long idEmpleado, Long idDepartamento) {
        Empleado empleado = empleadoRepository.getReferenceById(idEmpleado);
        Departamento departamento = departamentoRepository.getReferenceById(idDepartamento);
        empleado.setDepartamento(departamento);
        empleadoRepository.save(empleado);
    }
}
