package david.gomez.pap.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;

import jakarta.servlet.http.HttpSession;

@Controller
public class Visitas {
    
    @GetMapping("/visitas")
    public String accion(
        HttpSession s,
        ModelMap m
    )
    {
        if (s.getAttribute("numVisita") == null)
        {
            s.setAttribute("numVisita", 1);
        }
        else
        {
            int numVis = (int) s.getAttribute("numVisita");
            s.setAttribute("numVisita", (numVis+1));
        }

        m.put("numVisita",s.getAttribute("numVisita"));

        return "visitas";
    }
}
