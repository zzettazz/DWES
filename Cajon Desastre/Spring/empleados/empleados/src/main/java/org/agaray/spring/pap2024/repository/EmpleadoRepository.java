package org.agaray.spring.pap2024.repository;

import java.util.List;

import org.agaray.spring.pap2024.domain.Empleado;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface EmpleadoRepository extends JpaRepository<Empleado,Long> {
    public List<Empleado> findByDni(String dni);
}
