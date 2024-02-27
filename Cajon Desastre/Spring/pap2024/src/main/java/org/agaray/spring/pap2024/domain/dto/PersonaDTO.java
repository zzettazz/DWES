package org.agaray.spring.pap2024.domain.dto;

import java.util.List;

import lombok.Data;

@Data
public class PersonaDTO {

    private Long id;

    private String dni;

    private String nombre;

    private Long idNace;

    private Long idVive;

    private List<Long> idsGusto;

    private List<Long> idsOdio;

}
