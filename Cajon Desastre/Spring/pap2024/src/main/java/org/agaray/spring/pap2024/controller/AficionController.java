package org.agaray.spring.pap2024.controller;

import org.agaray.spring.pap2024.domain.Aficion;
import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.repository.AficionRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RequestMapping("/aficion")
@Controller
public class AficionController {

    @Autowired
    private AficionRepository aficionRepository;

    @GetMapping("r")
    public String r(
        ModelMap m
    ) {
        m.put("aficiones",aficionRepository.findAll());
        m.put("view","aficion/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
        ModelMap m
    ) {
        m.put("view","aficion/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
        @RequestParam("nombre") String nombre
    ) throws DangerException {
        try {
        aficionRepository.save(new Aficion(nombre));
        }
        catch (Exception e) {
            PRG.error("La afición "+nombre+" ya existe","/aficion/c");
        }
        return "redirect:/aficion/r";
    }

    
}
