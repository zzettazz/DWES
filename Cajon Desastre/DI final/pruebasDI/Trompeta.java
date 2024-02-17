package pruebasDI;

public class Trompeta implements Instrumento {

	public void calentar() {
		System.out.println("(CALENTANDO TROMPETA)");
		
	}

	public void soplar() {
		System.out.println("TURURÚ");
	}

	@Override
	public void tocar() {
		this.calentar();
		this.soplar();
	}
}
