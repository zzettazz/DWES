package david.iniciosesion.ini.repository;

import org.springframework.stereotype.Repository;

import david.iniciosesion.ini.domain.Usuario;

import org.springframework.data.jpa.repository.JpaRepository;

@Repository
public interface UsuarioRepository extends JpaRepository<Usuario, Long> {
    Usuario findByNombreUsuario(String nombreUsuario);
}