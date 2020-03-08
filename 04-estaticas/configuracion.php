<?php

class Configuracion{

    public static $color;
    public static $newsletter;
    public static $entorno;


	public static function getColor(){
        // SE  UTILIZA "self::"  por que la función es  estatica , es equivalente a "$this->".
        return self::$color;
    }

    public static function getNewsletter(){
        return self::$newsletter;
    }

    public static function getEntorno(){
        return self::$entorno;
    }

    public static function setColor($color){
         self::$color = $color;
    }

    public static function setNewsletter($newsletter){
         self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno){
         self::$entorno = $entorno;
    }
	
}