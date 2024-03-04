package org.agaray.spring.pap2024.controller.web;

import org.agaray.spring.pap2024.exception.DangerException;
import org.agaray.spring.pap2024.helper.PRG;
import org.agaray.spring.pap2024.service.DepartamentoService;
import org.agaray.spring.pap2024.service.EmpleadoService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import jakarta.servlet.http.HttpSession;

@RequestMapping("/empleado")
@Controller
public class EmpleadoController {

    @Autowired
    private EmpleadoService empleadoService;

    @Autowired
    private DepartamentoService departamentoService;


    @GetMapping("r")
    public String r(
            ModelMap m) {
        m.put("empleadoes", empleadoService.findAll());
        m.put("view", "empleado/r");
        return "_t/frame";
    }

    @GetMapping("c")
    public String c(
            ModelMap m,
            HttpSession s) {

        m.put("view", "empleado/c");
        return "_t/frame";
    }

    @PostMapping("c")
    public String cPost(
        @RequestParam("dni") String dni, 
        @RequestParam("nombre") String nombre, 
        @RequestParam("apellido") String apellido, 
        HttpSession s
            ) throws Exception {
 
        try {
            empleadoService.save(dni,nombre,apellido);
        } catch (Exception e) {
            PRG.error("El empleado " + nombre + " ya existe", "/empleado/c");
        }
        return "redirect:/empleado/r";
    }

    @GetMapping("u")
    public String update(
            @RequestParam("id") Long idEmpleado,
            ModelMap m) {
        m.put("empleado", empleadoService.findById(idEmpleado));
        m.put("view", "empleado/u");
        return "_t/frame";
    }

    @PostMapping("u")
    public String updatePost(
            @RequestParam("id") Long idEmpleado,
            @RequestParam("nombre") String nombre) throws DangerException {
        try {
            empleadoService.update(idEmpleado, nombre);
        } catch (Exception e) {
            PRG.error("El empleado no pudo ser actualizado", "/empleado/r");
        }
        return "redirect:/empleado/r";
    }

    @PostMapping("d")
    public String delete(
            @RequestParam("id") Long idEmpleado) throws DangerException {
        try {
            empleadoService.delete(idEmpleado);
        } catch (Exception e) {
            PRG.error("No se puede borrar el empleado", "/empleado/r");
        }
        return "redirect:/empleado/r";
    }

    @GetMapping("asignarDpto")
    public String asignarDpto(
        @RequestParam("id") Long id,
        ModelMap m
    )
    {
        m.put("departamentos",departamentoService.findAll());
        m.put("empleado",empleadoService.findById(id));
        m.put("view","empleado/asignarDpto");
        return "_t/frame";
    }

    @PostMapping("asignarDpto")
    public String asignarDptoPost(
        @RequestParam("idEmpleado") Long idEmpleado,
        @RequestParam("idDepartamento")Long idDepartamento
    )
    {
        empleadoService.asignarDpto(idEmpleado,idDepartamento);
        return "redirect:/empleado/r";
    }
}
