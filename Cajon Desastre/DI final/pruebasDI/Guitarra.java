package pruebasDI;

public class Guitarra implements Instrumento // OJO
{
	public void rasgar() {
		System.out.println("TRIANGGG");
	}

	@Override
	// OJO
	public void tocar() {
		this.rasgar();
	}

}
