<?php
require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Opel", "Corsa", 350, 250, 3);
$coche2 = new Coche("Rojo", "Seat", "Ibiza", 250, 200, 5);
$coche3 = new Coche("Azul", "Nissa", "Qasqai", 150, 100, 5);

$coche->color = "Rosa";
// PARA CAMBIAR UNA FUNCION "PROTECTED" HAY QUE TENER UN "SET" DE LA CATEGORÍA CORRESPONDIENTE
$coche->setMarca("Audi");

echo $coche->mostrarInformacion("HOLA MUNDO DESDE UN METODO");



//PARA HACER UN "var_dump();" DE UNA CATEGORÍA HAY QUE TENER UN "GET" CREADO 
//var_dump($coche->getModelo());

//var_dump($coche, $coche1, $coche2, $coche3);