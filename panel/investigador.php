<?php
require_once("../models/investigador.php");
$app = new Investigador();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include("./views/header.php");
switch($action) {
    case 'create':
        if(isset($_POST['enviar'])){
            $data['investigador'] = $_POST['investigador'];            
            $filas = $app->create($data);
            if ($filas){
                $alerta['mensaje'] = "investigador creada correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El investigador no fue dada de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
            $data = $app->read();
            include("./views/investigador/index.php");               
        }else{
            include("./views/investigador/_form.php");
        }
        break;
    
    case 'update':
            if(isset($_POST['enviar'])){
                $data['investigador'] = $_POST['investigador'];
                $id = $_GET['id'];
                $filas = $app->update($data, $id);
                if ($filas){
                $alerta['mensaje'] = "Investigador modificado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El investigador no fue dada de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
                $data = $app->read();      
                include("./views/investigador/index.php");          
            } else{
                $id = $_GET['id'];
                $data = $app->readOne($id);
                include("./views/investigador/_form_update.php");
                
            }
        break;

    case 'delete':        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $filas = $app->delete($id);
            if ($filas){
                $alerta['mensaje'] = "Investigador eliminado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El investigador no fue eliminado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
        }
        $data = $app->read();
        include("./views/investigador/index.php");
        break;

    case 'read':
    default:
        $data = $app->read();
        include("./views/investigador/index.php");
        break;
    
}
include("./views/footer.php");
?>