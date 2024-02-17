package org.dgomez.spring.artef.controller;

import org.dgomez.spring.artef.domain.Persona;
import org.dgomez.spring.artef.repository.PersonaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;


@Controller
public class Saludo {

    @Autowired
    private PersonaRepository pr;
    
    @GetMapping("/saludar")
    public String getSaludo()
    {
        return "saludar/saludarGet";
    }

    @PostMapping("/saludarPost")
    public String postSaludo(
        @RequestParam("nombre") String nombre,
        ModelMap m
    )
    {
        pr.save( new Persona(nombre));
        m.put("nombre",nombre);
        return "saludar/saludarPost";
    }

}
