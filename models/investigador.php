<?php
require_once("sistema.php");
class Investigador extends Sistema{
    function create($data){
        return $rowsAffected;
    }

    function read(){
        $this->connect();
        $sth = $this->_DB->prepare("
    SELECT 
        inv.id_investigador,
        inv.nombre,
        inv.primer_apellido,
        inv.segundo_apellido,
        inv.fotografia,
        inv.semblanza,
        i.id_institucion AS institucion_id,
        i.institucion,
        i.logotipo
    FROM investigador inv
    JOIN institucion i ON i.id_institucion = inv.id_institucion
");

        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function readOne($id){
        $this->connect();
        $sth = $this -> _DB ->prepare("SELECT * FROM institucion where id_institucion = :id_institucion");
        $sth->bindParam(":id_institucion", $id, PDO::PARAM_INT);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function update($data, $id){
        return $rowsAffected;
    }

    function delete($id){
        return $rowsAffected;
    }

}
?>