package org.agaray.spring.pap2024;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.security.servlet.SecurityAutoConfiguration;

@SpringBootApplication(exclude=SecurityAutoConfiguration.class)
public class EmpleadosApp {

	public static void main(String[] args) {
		SpringApplication.run(EmpleadosApp.class, args);
	}
}
