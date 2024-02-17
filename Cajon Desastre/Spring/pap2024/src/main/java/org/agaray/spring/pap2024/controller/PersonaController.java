package org.agaray.spring.pap2024.controller;

import java.util.List;

import org.agaray.spring.pap2024.domain.Aficion;
import org.agaray.spring.pap2024.domain.Persona;
import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.repository.AficionRepository;
import org.agaray.spring.pap2024.repository.PaisRepository;
import org.agaray.spring.pap2024.repository.PersonaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RequestMapping("/persona")
@Controller
public class PersonaController {

    @Autowired
    private PersonaRepository personaRepository;

    @Autowired
    private PaisRepository paisRepository;

    @Autowired
    private AficionRepository aficionRepository;

    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("personas", personaRepository.findAll());
        m.put("view", "Persona/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m) {
        m.put("paises", paisRepository.findAll());
        m.put("aficiones", aficionRepository.findAll());
        m.put("view", "persona/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
            @RequestParam("dni") String dni,
            @RequestParam("nombre") String nombre,
            @RequestParam("id-nace") Long idNace,
            @RequestParam("id-vive") Long idVive,
            @RequestParam("idGusto[]") List<Long> idsGusto,
            @RequestParam("idOdio[]") List<Long> idsOdio
            ) throws DangerException {
        try {
            Persona persona = new Persona(dni, nombre);
            persona.setNace(paisRepository.findById(idNace).get());
            persona.setVive(paisRepository.findById(idVive).get());
            for ( Long idGusto : idsGusto) {
                Aficion gusto = aficionRepository.findById(idGusto).get();
                persona.getGustos().add(gusto);
            }
            for ( Long idOdio : idsOdio) {
                Aficion odio = aficionRepository.findById(idOdio).get();
                persona.getOdios().add(odio);
            }
            personaRepository.save(persona);
        } catch (Exception e) {
            PRG.error("La persona con DNI " + dni + " ya existe", "/persona/c");
        }
        return "redirect:/persona/r";
    }

}
