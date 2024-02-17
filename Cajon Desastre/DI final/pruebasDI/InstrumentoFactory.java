package pruebasDI;

import java.io.FileInputStream;
import java.io.IOException;
import java.util.Properties;

public class InstrumentoFactory {
	private static InstrumentoFactory insFact;
	private Instrumento instrumento;
	

	@SuppressWarnings("deprecation")
	private InstrumentoFactory() {
		Properties p = new Properties();

		try {
			p.load(new FileInputStream("conf.properties"));
		} catch (IOException e) {
			e.printStackTrace();
		}

		try {
			this.instrumento = ((Instrumento) (Class.forName(p.getProperty("adaptador")).newInstance()));
		} catch (InstantiationException | IllegalAccessException | ClassNotFoundException e) {
			e.printStackTrace();
		}
	}
	
	public Instrumento getInstrumento() {
		return this.instrumento;
	}
	
	public static InstrumentoFactory getInstrumentoFactory() {
		if (insFact == null) {
			insFact = new InstrumentoFactory();
		}
		return insFact;
	}
}
