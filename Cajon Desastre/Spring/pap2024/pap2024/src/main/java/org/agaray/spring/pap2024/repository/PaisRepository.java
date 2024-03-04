package org.agaray.spring.pap2024.repository;

import java.util.List;

import org.agaray.spring.pap2024.domain.Pais;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface PaisRepository extends JpaRepository<Pais,Long> {
    public List<Pais> findByNombre(String nombre);
}
