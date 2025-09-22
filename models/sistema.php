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
