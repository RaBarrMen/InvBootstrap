<?php 
include_once("./views/boostrap/header_miembros.php");
require_once("./models/investigador.php");
$app = new Investigador();
$investigadores = $app -> read();
require_once("./views/investigador/index.php");
include_once("./views/footer.php");
?> 