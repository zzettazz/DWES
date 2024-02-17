package pruebasDI;

public class TrompetaAdapter implements Instrumento{

	private Trompeta trompeta;

	public TrompetaAdapter() {
		this.trompeta = new Trompeta();
	}

	@Override
	public void tocar() {
		this.trompeta.calentar();
		this.trompeta.soplar();
	}

}
