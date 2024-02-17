package pruebasDI;

public class GuitarraAdapter implements Instrumento{

	private Guitarra guitarra;
	
	
	public GuitarraAdapter() {
		this.guitarra = new Guitarra();
	}
	
	@Override
	public void tocar() {
		this.guitarra.rasgar();
	}
	
}
