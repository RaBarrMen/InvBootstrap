<?php
require_once("models/institucion.php");
$app = new Institucion();
//$filas = $app -> delete(4);
$data['institucion']="Intitucion de prueba";
$data['logotipo']="logotipo_prueba.png";
$filas = $app->create($data);
print_r($filas);
?>