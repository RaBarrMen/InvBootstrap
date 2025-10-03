<?php
require_once("../models/tratamiento.php");
$app = new Tratamiento();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include("./views/header.php");
switch($action) {
    case 'create':
        if(isset($_POST['enviar'])){
            $data['tratamiento'] = $_POST['tratamiento'];            
            $filas = $app->create($data);
            if ($filas){
                $alerta['mensaje'] = "Tratamiento creada correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El tratamiento no fue dada de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
            $data = $app->read();
            include("./views/tratamiento/index.php");               
        }else{
            include("./views/tratamiento/_form.php");
        }
        break;
    
    case 'update':
            if(isset($_POST['enviar'])){
                $data['tratamiento'] = $_POST['tratamiento'];
                $id = $_GET['id'];
                $filas = $app->update($data, $id);
                if ($filas){
                $alerta['mensaje'] = "Tratamiento modificado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El tratamiento no fue dada de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
                $data = $app->read();      
                include("./views/tratamiento/index.php");          
            } else{
                $id = $_GET['id'];
                $data = $app->readOne($id);
                include("./views/tratamiento/_form_update.php");
                
            }
        break;

    case 'delete':        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $filas = $app->delete($id);
            if ($filas){
                $alerta['mensaje'] = "Tratamiento eliminada correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else{
                $alerta['mensaje'] = "El tratamiento no fue eliminada";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");                
            }
        }
        $data = $app->read();
        include("./views/tratamiento/index.php");
        break;

    case 'read':
    default:
        $data = $app->read();
        include("./views/tratamiento/index.php");
        break;
    
}
include("./views/footer.php");
?>