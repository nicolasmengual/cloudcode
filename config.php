<?php
class configuracion {
    var $servidor;
    var $usuario;
    var $password;
    var $bd;
    
    function __construct() {
        $this->servidor = 'localhost';
        $this->usuario = '';
        $this->password = '';
        $this->bd = '';
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
