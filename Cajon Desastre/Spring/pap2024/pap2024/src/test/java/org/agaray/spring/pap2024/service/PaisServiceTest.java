package org.agaray.spring.pap2024.service;

import static org.junit.jupiter.api.Assertions.assertThrows;
import static org.junit.jupiter.api.Assertions.assertTrue;

import java.util.List;

import org.agaray.spring.pap2024.domain.Pais;
import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;

@SpringBootTest
public class PaisServiceTest {

    @Autowired
    private PaisService paisService;

    @Test
    public void crearPaisInexistente() {
        Pais pais = paisService.save("_INEXISTENTE");
        List<Pais> paises = paisService.findByNombre("_INEXISTENTE");
        assertTrue(paises.size()==1,"");
        paisService.delete(pais.getId());
    }

    @Test
    public void crearPaisExistente() {
        Pais pais = paisService.save("_EXISTENTE");
        assertThrows(Exception.class, ()->paisService.save("_EXISTENTE"));
        paisService.delete(pais.getId());
    }

}
