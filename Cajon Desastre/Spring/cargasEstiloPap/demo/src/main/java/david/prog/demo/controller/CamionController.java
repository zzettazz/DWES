package david.prog.demo.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import david.prog.demo.domain.Camionero;
import david.prog.demo.repository.CamionRepository;
import david.prog.demo.repository.CamioneroRepository;
import david.prog.demo.repository.CargaRepository;

import org.springframework.web.bind.annotation.PostMapping;



@RequestMapping("/camion")
@Controller
public class CamionController {

    @Autowired
    private CargaRepository cargaRepository;
    @Autowired
    private CamionRepository camionRepository;
    @Autowired
    private CamioneroRepository camioneroRepository;
    
    @GetMapping("r")
    public String r(
        ModelMap m
    )
    {
        m.put("view", "camion/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
        ModelMap m
    ) {
        m.put("view","camion/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
        @RequestParam("matricula") String matricula,
        @RequestParam("cargaAsignadaId") Long cargaAsignadaId,
        @RequestParam("camioneroAsignadoId") Long camioneroAsignadoId,
        ModelMap m
    ) {
        try
        {
            

            camioneroRepository.save(new Camionero());

            m.put("view","camion/r");
            return "_t/frame";
        }
        catch (Exception e)
        {
            return "home/home";
        }
    }
    
    
}
