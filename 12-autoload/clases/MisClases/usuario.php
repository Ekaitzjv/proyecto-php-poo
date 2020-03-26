<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Ekaitz Jimenez";
        $this->email = "ekaitzj@gmail.com";
    }
}