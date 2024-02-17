package david.prog.demo.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import david.prog.demo.domain.Carga;

@Repository
public interface CargaRepository extends JpaRepository<Carga,Long> {
    
}
