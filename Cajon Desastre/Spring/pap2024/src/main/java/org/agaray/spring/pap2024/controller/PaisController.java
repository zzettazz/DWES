package org.agaray.spring.pap2024.controller;

import java.util.List;

import org.agaray.spring.pap2024.domain.Pais;
import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.exception.InfoException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.repository.PaisRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RequestMapping("/pais")
@Controller
public class PaisController {

    @Autowired
    private PaisRepository paisRepository;

    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("paises", paisRepository.findAll());
        m.put("view", "pais/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m) {
        m.put("view", "pais/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
            @RequestParam("nombre") String nombre) throws DangerException, InfoException {
        try {
            paisRepository.save(new Pais(nombre));

        } catch (Exception e) {
            PRG.error("El país "+nombre+" ya existe","/pais/c");
        }
        return "redirect:/pais/r";
    }

}
