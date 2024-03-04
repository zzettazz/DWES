package org.agaray.spring.pap2024.repository;

import java.util.List;

import org.agaray.spring.pap2024.domain.Departamento;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface DepartamentoRepository extends JpaRepository<Departamento,Long> {
    public List<Departamento> findByNombre(String nombre);
}
