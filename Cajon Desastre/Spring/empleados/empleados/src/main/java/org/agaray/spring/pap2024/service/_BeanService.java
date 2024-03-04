package org.agaray.spring.pap2024.service;

import java.util.List;

import org.agaray.spring.pap2024.domain._Bean;
import org.agaray.spring.pap2024.repository._BeanRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class _BeanService {
    
    @Autowired
    private _BeanRepository _beanRepository;

    public List<_Bean> findAll() {
        return _beanRepository.findAll();
    }

    public List<_Bean> findByNombre(String nombre) {
        return _beanRepository.findByNombre(nombre);
    }

    public _Bean save(String nombre) {
        return _beanRepository.save(new _Bean(nombre));
    }

    public _Bean findById(Long id_Bean) {
        return _beanRepository.findById(id_Bean).get();
    }
    public void update(Long id_Bean, String nombre) {
        _Bean _bean = _beanRepository.findById(id_Bean).get();
        _bean.setNombre(nombre);
        _beanRepository.save(_bean);
    }

    public void delete(Long id_Bean) {
        _beanRepository.delete(_beanRepository.getReferenceById(id_Bean));
    }
}
