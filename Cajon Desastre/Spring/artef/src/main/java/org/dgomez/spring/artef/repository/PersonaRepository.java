package org.dgomez.spring.artef.repository;

import org.dgomez.spring.artef.domain.Persona;
import org.springframework.data.jpa.repository.JpaRepository;

public interface PersonaRepository extends JpaRepository<Persona, Long>
{
    
}
