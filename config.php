<?php
class configuracion {
    var $servidor;
    var $usuario;
    var $password;
    var $bd;
    
    function __construct() {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->password = 'mengual';
        $this->bd = 'mydb';
    }
    
    function __destruct() {
    }
    
    function getServidor()
    {
        return $this->servidor;
    }
    
    function getUsuario()
    {
        return $this->usuario;
    }
    
    function getPassword()
    {
        return $this->password;
    }
    
    function getBd()
    {
        return $this->bd;
    }
}
?>
