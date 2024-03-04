package org.agaray.spring.pap2024.controller.web;

import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.service.DepartamentoService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import jakarta.servlet.http.HttpSession;

@RequestMapping("/departamento")
@Controller
public class DepartamentoController {

    @Autowired
    private DepartamentoService departamentoService;

    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("departamentoes", departamentoService.findAll());
        m.put("view", "departamento/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m,
            HttpSession s) {

        m.put("view", "departamento/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
            @RequestParam("nombre") String nombre, HttpSession s) throws Exception {
 
        try {
            departamentoService.save(nombre);
        } catch (Exception e) {
            PRG.error("El departamento " + nombre + " ya existe", "/departamento/c");
        }
        return "redirect:/departamento/r";
    }

    @GetMapping("u")
    public String update(
            @RequestParam("id") Long idDepartamento,
            ModelMap m) {
        m.put("departamento", departamentoService.findById(idDepartamento));
        m.put("view", "departamento/u");
        return "_t/frame";
    }

    @PostMapping("u")
    public String updatePost(
            @RequestParam("id") Long idDepartamento,
            @RequestParam("nombre") String nombre) throws DangerException {
        try {
            departamentoService.update(idDepartamento, nombre);
        } catch (Exception e) {
            PRG.error("El departamento no pudo ser actualizado", "/departamento/r");
        }
        return "redirect:/departamento/r";
    }

    @PostMapping("d")
    public String delete(
            @RequestParam("id") Long idDepartamento) throws DangerException {
        try {
            departamentoService.delete(idDepartamento);
        } catch (Exception e) {
            PRG.error("No se puede borrar el departamento", "/departamento/r");
        }
        return "redirect:/departamento/r";
    }
}
