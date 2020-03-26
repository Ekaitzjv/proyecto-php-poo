<?php
//El autoload sirve para hacer en un solo require once lo mismo que harías con mas de uno

function app_autoloader($class){
    require_once 'clases/' . $class . '.php';
}

spl_autoload_register('app_autoloader');