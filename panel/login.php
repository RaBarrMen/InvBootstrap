<?php
include_once("models/sistema.php");
$app = new Sistema();
$action = (isset($_GET['action'])) ? $_GET['action'] : 'login';
switch($accion){
    case 'logout':
        $app->logout();
        break;
    
    case 'login':
        if(isset($_POST['enviar'])){
            $correo = $_POST['correo'];
            $contrasenia = $_POST['contrasenia'];
            $login = $app->login($correo, $contrasenia);
            if($login){
                header("Location: index.php");
            } else {
                $alerta = "Correo o contraseña incorrectos";
                include_once("views/login.php");
            }
        } else {
            include_once("views/login.php");
        }
    
}
?>
