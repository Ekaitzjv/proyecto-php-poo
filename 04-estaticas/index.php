<?php

require_once 'configuracion.php';

configuracion::setColor("blue");
configuracion::setEntorno("localhost");
configuracion::setNewsletter(true);
//AQUI MOSTRAMOS EL COLOR,el entorno....
echo configuracion::$color. '<br/>';
echo configuracion::$entorno. '<br/>';
echo configuracion::$newsletter. '<br/>';

$configuracion = new Configuracion();
$configuracion::$color = "Rojo";
echo $configuracion::$color;
var_dump($configuracion);