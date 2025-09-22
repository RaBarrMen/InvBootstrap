<?php 
include_once("./views/header.php");
require_once("./models/institucion.php");
$app = new Institucion();
$instituciones = $app -> read();
require_once("./views/institucion/index.php");
include_once("./views/footer.php");
?>