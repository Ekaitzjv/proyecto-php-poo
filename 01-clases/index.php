<?php
// Programación orientada a objetos en PHP (POO)

// Definir una clase molde para crear mas objetos de tipo coche con caracteristicas 
//parecidas
class Coche{

    // Atributos o propiedades (variables)
    public $color =  "rojo";
    public $modelo = "Aventador";
    public $marca = "Lamborghini";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // Métpodos son acciones que hace el objeto(funciones)
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}// fin definición de la clase 

// crear un objeto / instanciar la clase
$coche = new Coche();

// Usar los metodos para mostrar 

//echo $coche->getVelocidad(); 

$coche->setColor("Amarillo");
echo "El color de el coche es: ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad de coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Panda");

var_dump($coche);
var_dump($coche2);