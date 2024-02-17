package david.prog.demo.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import david.prog.demo.domain.Camionero;

@Repository
public interface CamioneroRepository extends JpaRepository<Camionero,Long> {
    
}
