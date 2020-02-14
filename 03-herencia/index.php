<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);

$informatico = new Informatico();
 

var_dump($informatico);

$tecnico = new TecnicoRedes();
$tecnico->setauditarRedes(2);
var_dump($tecnico);