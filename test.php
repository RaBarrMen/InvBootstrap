<?php
session_start();
require_once("models/sistema.php");
$sistema = new Sistema();
$login = $sistema->login("21031439@itcelaya.edu.mx", "123");
var_dump($login);
print_r($_SESSION);
?>