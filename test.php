<?php
require_once("models/institucion.php");
$app = new Institucion();
//$filas = $app -> delete(4);
$data['institucion']="Intitucion de prueba update";
$data['logotipo']="logotipo_try.png";
$filas = $app->update($data,5);
print_r($filas);
?>