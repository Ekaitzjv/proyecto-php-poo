<?php
//TRAIT: nos permite definir una serie de metodos para compartilos con diferentes clases.

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}


class Coche{
    public $nombre;
    public $marca; 
//Para utilizar las funciones predeterminadas de el trait se utiliza la palabra "use".
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;

}

class Videojuego{
    public $nombre;
    public $año;
    use Utilidades;

}

$coche = new Coche();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();


$persona = new Persona();
$persona->nombre = "Luís";
$persona->mostrarNombre();


$videojuego= new Videojuego();
$videojuego->nombre = "GTA V";
$videojuego->mostrarNombre();


//definirle un valor al NOMBRE del COCHE ejemplo:

