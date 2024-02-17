package pruebasDI;

public class Musico {

	private Trompeta trompeta;
	
	public Musico() {
		this.trompeta = new Trompeta();
	}

	public void hacerMusica() {
		this.trompeta.calentar();
		this.trompeta.soplar();
	}
	
	
}
