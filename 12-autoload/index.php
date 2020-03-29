<?php
require_once 'autoload.php';
/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "</br>";
echo $usuario->email;

$categoria = new Categoria();
echo "</br>".$categoria->nombre;
echo "</br>".$categoria->descripcion;
*/

//ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();

    }

    function getUsuario(){
        return $this->Usuario;
    }
    function getCategoria(){
        return $this->categoria;
    }
    function getEntrada(){
        return $this->Entrada;
    }
    function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    function setEntrada($entrada){
        $this->entrada = $entrada;
    }


}
//OBJETO PRINCIPAL
$principal = new Principal();
//$principal->informacion();
//var_dump($principal->usuario);
$methodos = get_class_methods($principal);

$busqueda = array_search('setEntrada', $methodos);
var_dump($busqueda);

//OBJETO OTRO PAQUETE

$usuario = new UsuarioAdmin();
$usuario->informacion();
//var_dump($usuario);

// Comprobar si existe una clase 

$clase = @class_exists('PanelAdministrador\Usuario22');

if($clase){
    echo "<h1>La clase si existe</h1>";
}else{
    echo "<h1>La clase no existe</h1>";
}