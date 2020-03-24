<?php

class usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Ekaitz Jimenez";
        $this->email = "ekaitzj@gmail.com";

        echo "creando del objeto <br/>";
    }

    public function __toString(){
        return "Hola,{$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo " <br/> Destruyendo el objeto";
    }
}

$usuario = new usuario();
echo $usuario;

