package org.agaray.spring.pap2024.repository;

import java.util.List;

import org.agaray.spring.pap2024.domain._Bean;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface _BeanRepository extends JpaRepository<_Bean,Long> {
    public List<_Bean> findByNombre(String nombre);
}
