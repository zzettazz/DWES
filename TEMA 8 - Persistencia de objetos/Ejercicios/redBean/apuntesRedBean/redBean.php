<?php
include_once("../../../../lib/rb.php");

R::setup('mysql:host=localhost;port=3333;dbname=pruebas', 'root', '');

// Creamos el obeto (nombre de la tabla de mysql)
$libro = R::dispense('libro');

// Le ponemos los atributos al objeto (columnas de mysql)
$libro -> titulo = "Aprender a programar";

// Los atributos se pueden poner también como array asociativo
$libro["precio"] = 29.99;

// Lo insertamos en la base de datos, obteniendo el ID que recibe al ser insertado
$id = R::store($libro);

echo "Libro insertado<br/>";

// Recuperamos un libro a partir de su ID
$libro2 = R::load("libro", $id);

echo "Libro recuperado<br/>";

// Le cambiamos los atributos
$libro2["titulo"] = "Otro título";
// E incluso podemos crear un nuevo atributo "TEÓRICAMENTE"
$libro2["genero"] = "Aventuras";

// Lo guardamos
R::store($libro);

// Recuperamos un libro por ID y luego lo borramos, POR EJEMPLO EL ID 5
$id = 5;
$libroParaBorrar = R::load("libro",$id);
R::trash($libroParaBorrar);
echo("Libro con id=$id borrado<br/>");

// Extraemos todos los objetos. EJEMPLO TIPO = LIBRO
$libros = R::findAll("libro");
echo "Total Libros encontrados: ".count($libros)."<br/>";

// Extraemos los libros que cumplen una condición
// Es decir, podemos ejecutar un find pasándole un criterio
$libros = R::find("libro","precio > 10");
echo "Libros con precio MAYOR a 10: ".count($libros)."<br/>";



// ----------------------------
// | COMPOSICIÓN: MANY TO ONE |
// ----------------------------

// Creamos el objeto (tabla) (en este caso colegio)
$colegio = R::dispense("colegio");

// Le ponemos atributos
$colegio["nombre"] = "Rey Fernando VI";

// Creamos otro objeto de tipo alumno
$alumno = R::dispense("alumno");

// Le ponemos atributos
$alumno["nombre"] = "Pepe";
$alumno["colegio"] = $colegio;

// Guardamos el objeto
R::store($alumno);
echo "Alumno: ".$alumno["nombre"]." || Colegio: ".$colegio["nombre"]."<br/>";
// En este caso hemos provocado una asociación entre colegio y alumno
// en el que alumno pertenece a un colegio y a un colegio le pertenecen uno o más alumnos



// ----------------------------
// | COMPOSICIÓN: ONE TO MANY |
// ----------------------------

// ES BÁSICAMENTE UNA RELACIÓN 1-N
// POR EJEMPLO: UN ALUMNO SOLO PUEDE PERTENECER A UN COLEGIO
// PERO UN COLEGIO PUEDE TENER VARIOS ALUMNOS

// Creamos el objeto colegio
$colegio = R::dispense('colegio');

// Le añadimos atributos
$colegio -> nombre = 'Rey Fernando VI';

// Creamos el objeto alumno
$alumno = R::dispense('alumno');

// Le añadimos atributos
$alumno -> nombre = 'Pepe';

// Creamos la relación entre colegio y alumno
// Estructura: ownOBJETOList[]
// Si queremos borrado en cascada: xownObjetoList[]
$colegio -> ownAlumnoList[]= $alumno;
R::store( $colegio );



// -----------------------------
// | COMPOSICIÓN: MANY TO MANY |
// -----------------------------

// ES BÁSICAMENTE UNA RELACIÓN N-N
// POR EJEMPLO: UNA PERSONA PUEDE TENER VARIAS AFICIONES
// Y UNA AFICIÓN PUEDE SER COMPARTIDA POR VARIAS PERSONAS

// Creamos el objeto persona
$pepe = R::dispense("persona");

// Le añadimos sus atributos
$pepe["nombre"] = "Pepe";

// Creamos el objeto aficion
$futbol = R::dispense("aficion");

// Le añadimos sus atributos
$futbol ["nombre"] = "futbol";

// Relacionamos una AFICIÓN con una PERSONA
// Estructura: sharedObjetoList[]
$futbol -> sharedPersonaList[] = $pepe;

// Lo guardamos
R::store($futbol);

R::close();
?>