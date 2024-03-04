package org.agaray.spring.pap2024.controller.web;

import java.util.List;

import org.agaray.spring.pap2024.domain.dto.PersonaDTO;
import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.service.AficionService;
import org.agaray.spring.pap2024.service.PaisService;
import org.agaray.spring.pap2024.service.PersonaService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RequestMapping("/persona")
@Controller
public class PersonaController {

    @Autowired
    private PersonaService personaService;

    @Autowired
    private PaisService paisService;

    @Autowired
    private AficionService aficionService;



    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("personas", personaService.findAll());
        m.put("view", "Persona/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m) {
        m.put("paises", paisService.findAll());
        m.put("aficiones", aficionService.findAll());
        m.put("view", "persona/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
            @RequestParam("dni") String dni,
            @RequestParam("nombre") String nombre,
            @RequestParam("password") String password,
            @RequestParam("id-nace") Long idNace,
            @RequestParam("id-vive") Long idVive,
            @RequestParam(value = "idGusto[]", required = false) List<Long> idsGusto,
            @RequestParam(value = "idOdio[]", required = false) List<Long> idsOdio) throws DangerException {
        try {
            personaService.save(dni, nombre, password, idNace, idVive, idsGusto, idsOdio);
        } catch (Exception e) {
            PRG.error("La persona con DNI " + dni + " ya existe", "/persona/c");
        }
        return "redirect:/persona/r";
    }

    @GetMapping("u")
    public String update(
            @RequestParam("id") Long idPersona,
            ModelMap m) {
        m.put("persona", personaService.findById(idPersona));
        m.put("paises", paisService.findAll());
        m.put("aficiones", aficionService.findAll());
        m.put("view", "persona/u");
        return "_t/frame";
    }

    @PostMapping("u")
    public String updatePost(
            @RequestParam("idPersona") Long idPersona,
            @RequestParam("dni") String dni,
            @RequestParam("nombre") String nombre,
            @RequestParam("idNace") Long idNace,
            @RequestParam("idVive") Long idVive,
            @RequestParam(value = "idGusto[]", required = false) List<Long> idsGusto,
            @RequestParam(value = "idOdio[]", required = false) List<Long> idsOdio

    ) throws DangerException {
        try {
            personaService.update(idPersona, dni, nombre, idNace, idVive, idsGusto, idsOdio);
        } catch (Exception e) {
            PRG.error("El dni " + dni + " ya está registrado", "/persona/r");
        }
        return "redirect:/persona/r";
    }

    //@PostMapping("u")
    public String updatePost2(
        @RequestBody PersonaDTO p
    ) throws DangerException {
        try {
            personaService.update(p.getId(), p.getDni(), p.getNombre(), p.getIdNace(), p.getIdVive(), p.getIdsGusto(), p.getIdsOdio());
        } catch (Exception e) {
            PRG.error("El dni " + p.getDni() + " ya está registrado", "/persona/r");
        }
        return "redirect:/persona/r";
    }

    @PostMapping("d")
    public String delete(
        @RequestParam("id") Long idPersona
    ) throws DangerException {
        try {
            personaService.delete(idPersona);
        }
        catch (Exception e) {
            PRG.error(e.getMessage(),"/persona/r");
        }
        return "redirect:/persona/r";
    }

}
