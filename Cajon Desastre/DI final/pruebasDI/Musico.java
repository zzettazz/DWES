package pruebasDI;

public class Musico {

	private Instrumento instrumento;

	public Musico() {
		InstrumentoFactory ifac = InstrumentoFactory.getInstrumentoFactory();
		this.instrumento = ifac.getInstrumento();
	}

	public void hacerMusica() {
		this.instrumento.tocar();
	}

}
