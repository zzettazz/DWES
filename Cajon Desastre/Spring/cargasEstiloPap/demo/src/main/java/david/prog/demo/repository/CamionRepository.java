package david.prog.demo.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import david.prog.demo.domain.Camion;

@Repository
public interface CamionRepository extends JpaRepository<Camion,Long> {
    
}
