package org.agaray.spring.pap2024.controller.web;

import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.exception.InfoException;
import org.agaray.spring.pap2024.helper.H;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.service.PaisService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import jakarta.servlet.http.HttpSession;

@RequestMapping("/pais")
@Controller
public class PaisController {

    @Autowired
    private PaisService paisService;

    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("paises", paisService.findAll());
        m.put("view", "pais/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m,
            HttpSession s) throws Exception {
        if (!H.isRolOK("admin", s)) {
            throw new Exception();
        }
        m.put("view", "pais/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
            @RequestParam("nombre") String nombre, HttpSession s) throws Exception {
        if (!H.isRolOK("admin", s)) {
            throw new Exception();
        }
        try {
            paisService.save(nombre);
        } catch (Exception e) {
            PRG.error("El país " + nombre + " ya existe", "/pais/c");
        }
        return "redirect:/pais/r";
    }

    @GetMapping("u")
    public String update(
            @RequestParam("id") Long idPais,
            ModelMap m) {
        m.put("pais", paisService.findById(idPais));
        m.put("view", "pais/u");
        return "_t/frame";
    }

    @PostMapping("u")
    public String updatePost(
            @RequestParam("idPais") Long idPais,
            @RequestParam("nombre") String nombre) throws DangerException {
        try {
            paisService.update(idPais, nombre);
        } catch (Exception e) {
            PRG.error("El país no pudo ser actualizado", "/pais/r");
        }
        return "redirect:/pais/r";
    }

    @PostMapping("d")
    public String delete(
            @RequestParam("id") Long idPais) throws DangerException {
        try {
            paisService.delete(idPais);
        } catch (Exception e) {
            PRG.error("No se puede borrar un país que tenga algún nacido/residente", "/pais/r");
        }
        return "redirect:/pais/r";
    }
}
