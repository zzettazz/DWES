package org.agaray.spring.pap2024.controller.web;

import org.agaray.spring.pap2024.domain.Persona;
import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.service.PersonaService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import jakarta.servlet.http.HttpSession;

@Controller
public class HomeController {

	@Autowired
	private PersonaService personaService;

    @GetMapping("/")
    public String home(
        ModelMap m
    ) {
        m.put("view","home/home");
        return "_t/frame";
    }

    @GetMapping("/info")
	public String info(HttpSession s, ModelMap m) {

		String mensaje = s.getAttribute("_mensaje") != null ? (String) s.getAttribute("_mensaje")
				: "Pulsa para volver a home";
		String severity = s.getAttribute("_severity") != null ? (String) s.getAttribute("_severity") : "info";
		String link = s.getAttribute("_link") != null ? (String) s.getAttribute("_link") : "/";

		s.removeAttribute("_mensaje");
		s.removeAttribute("_severity");
		s.removeAttribute("_link");

		m.put("mensaje", mensaje);
		m.put("severity", severity);
		m.put("link", link);

		m.put("view", "/_t/info");
		return "/_t/frame";
	}

	@GetMapping("/init")
    public String crearAdmin() {
		personaService.save("-1", "admin", "admin", null, null, null, null);
		personaService.setAdmin("-1");
		return "redirect:/";
    }

    @GetMapping("/login")
	public String login(
		ModelMap m
	) {
		m.put("view","home/login");
		return "_t/frame";
	}
	@PostMapping("/login")
	public String loginPost(
		@RequestParam("dni") String dni,
		@RequestParam("password") String password,
		HttpSession s,
		ModelMap m
	) throws DangerException {
		try {
			Persona persona = personaService.login(dni,password);
			s.setAttribute("usuario", persona);
		}
		catch (Exception e) {
			PRG.error("Usuario o contraseña incorrectos");
		}
		return "redirect:/";
	}

	@GetMapping("/logout")
	public String logout(
		HttpSession s
	) {
		//s.setAttribute("usuario", null);
		s.invalidate();
		return "redirect:/";
	}
	
}
