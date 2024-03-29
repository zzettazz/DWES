package david.gomez.pap.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

import david.gomez.pap.domain.Pais;
import david.gomez.pap.repository.PaisRepository;

import org.springframework.web.bind.annotation.PostMapping;



@Controller
public class PaisController {

    @Autowired
    private PaisRepository paisRepository;

    @GetMapping("/pais/r")
    public String r(
        ModelMap m
    )
    {
        m.put("paises",paisRepository.findAll());
        m.put("view","pais/r");
        return "_t/frame";
    }

    @GetMapping("/pais/c")
    public String c(
        ModelMap m
    )
    {
        m.put("view", "pais/c");
        return "_t/frame";
    }

    @PostMapping("/pais/c")
    public String cPost(
        @RequestParam("nombre") String nombre
    )
    {
        paisRepository.save(new Pais(nombre));
        return "redirect:/pais/r";
    }
    

    
}
