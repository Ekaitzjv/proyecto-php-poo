<?php
// CONSTANTES : es la manera para definir algo, dandole un valor pero a diferencia de las VARIABLES 
// en este caso siempre se mantiene con el mismo valor, es lo contrario a una variable.

class Usuario{
// darle valor a la constante
    const URL_COMPLETA = "http://localhost";

    public $email;
    public $password;

	public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }



}

$usuario = new Usuario();
//MOSTRAR la constante
echo $usuario::URL_COMPLETA;
var_dump($usuario);

echo Usuario::URL_COMPLETA;