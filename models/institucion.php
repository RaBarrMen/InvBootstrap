<?php
class Sistema{
    var $_DSN = "mysql:host=mariadb;dbname=database";
    var $_user = "user";
    var $_password = "password";
    var $_DB = null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN, $this -> _user, $this -> _password);
        
    }
}

class Institucion extends Sistema{
    function create($data){
        return $rowsAffected;
    }

    function read(){
        $this->connect();
        $sth = $this -> _DB ->prepare("SELECT * FROM institucion");
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