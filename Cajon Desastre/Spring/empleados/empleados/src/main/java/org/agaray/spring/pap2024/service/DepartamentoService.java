package org.agaray.spring.pap2024.service;

import java.util.List;

import org.agaray.spring.pap2024.domain.Departamento;
import org.agaray.spring.pap2024.repository.DepartamentoRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class DepartamentoService {
    
    @Autowired
    private DepartamentoRepository departamentoRepository;

    public List<Departamento> findAll() {
        return departamentoRepository.findAll();
    }

    public List<Departamento> findByNombre(String nombre) {
        return departamentoRepository.findByNombre(nombre);
    }

    public Departamento save(String nombre) {
        return departamentoRepository.save(new Departamento(nombre));
    }

    public Departamento findById(Long idDepartamento) {
        return departamentoRepository.findById(idDepartamento).get();
    }
    public void update(Long idDepartamento, String nombre) {
        Departamento departamento = departamentoRepository.findById(idDepartamento).get();
        departamento.setNombre(nombre);
        departamentoRepository.save(departamento);
    }

    public void delete(Long idDepartamento) {
        departamentoRepository.delete(departamentoRepository.getReferenceById(idDepartamento));
    }
}
