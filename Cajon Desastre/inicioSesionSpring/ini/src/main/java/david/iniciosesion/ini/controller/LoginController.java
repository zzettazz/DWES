package david.iniciosesion.ini.controller;

import java.sql.SQLException;
import java.sql.SQLIntegrityConstraintViolationException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.dao.DataIntegrityViolationException;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;

import david.iniciosesion.ini.domain.Usuario;
import david.iniciosesion.ini.repository.UsuarioRepository;

@Controller
public class LoginController {

    @Autowired
    private UsuarioRepository usuarioRepository;    
    
    @GetMapping("/")
    public String showLogin() {
        return "login/index";
    }

    @PostMapping("/")
    public String loginPost(
        @RequestParam("usuario") String nombreUsuario,
        @RequestParam("contrasenia") String contrasenya
    )
    {
        Usuario usuario = usuarioRepository.findByNombreUsuario(nombreUsuario);

        BCryptPasswordEncoder bCryptPasswordEncoder = new BCryptPasswordEncoder();

        if (usuario != null && bCryptPasswordEncoder.matches(contrasenya, usuario.getContrasenya()))
        {
            return "ejemplo/logincorrecto";
        }
        else
        {
            String bCryptedPassword = bCryptPasswordEncoder.encode(contrasenya);
            
            try
            {
                usuarioRepository.save(new Usuario(nombreUsuario,bCryptedPassword));
                return "ejemplo/loginINcorrecto";
            }
            catch (DataIntegrityViolationException e)
            {
                return "ejemplo/usuarioexistente";
            }
        }
    }
}
