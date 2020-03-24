<?php
//INTERFACE : es la manera para definir una interfaz , el nombre de ella irá seguido.
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}
/* IMPLEMENTS : es la manera para definir una interfaz que vendría a ser un contrato. 
 Desde el momento en el que no mencionamos las diferentes funciones(no cumplimos el contrato)
 vacias entonces nos dará un error por no mencionarlas.Hay que mencionarlas eunque sea vacias*/

class iMac implements Ordenador{
    public $modelo;

    function getModelo(){
        return $this->modelo;
    }
    
    function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function encender(){
        return "LO QUE SEA";
    }

    public function apagar(){
        return "LO QUE SEA";
    }

    public function reiniciar(){
        return "LO QUE SEA";
    }

    public function desfragmentar(){
        return "LO QUE SEA";
    }
    public function detectarUSB(){
        return "LO QUE SEA";
    }
}

$macintosh = new iMac();
$macintosh->setModelo('MacBook PRO 2019');
echo $macintosh->getModelo();