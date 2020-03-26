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
}
//OBJETO PRINCIPAL
$principal = new Principal();
var_dump($principal->usuario);

//OBJETO OTRO PAQUETE
$usuario = new UsuarioAdmin();
var_dump($usuario);

