package david.gomez.pap.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

import david.gomez.pap.domain.Aficion;
import david.gomez.pap.repository.AficionRepository;

import org.springframework.web.bind.annotation.PostMapping;



@Controller
public class AficionController {

    @Autowired
    private AficionRepository aficionRepository;

    @GetMapping("/aficion/r")
    public String r(
        ModelMap m
    )
    {
        m.put("aficiones",aficionRepository.findAll());
        m.put("view","aficion/r");
        return "_t/frame";
    }

    @GetMapping("/aficion/c")
    public String c(
        ModelMap m
    )
    {
        m.put("view", "aficion/c");
        return "_t/frame";
    }

    @PostMapping("/aficion/c")
    public String cPost(
        @RequestParam("nombre") String nombre
    )
    {
        aficionRepository.save(new Aficion(nombre));
        return "redirect:/aficion/r";
    }
    

    
}
