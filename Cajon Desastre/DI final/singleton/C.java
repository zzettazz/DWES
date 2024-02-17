package singleton;

public class C {
	private static C c;

	private C() {

	}

	public static C getC() {
		if (c == null) {
			c = new C();
		}
		return c;
	}
	
	public void cosasDeC() {
		System.out.println("PUES LAS COSAS de C");
	}

}
