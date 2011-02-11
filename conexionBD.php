<?php
include 'config.php';

function conexionMysql() 
{
    $configuracion = new configuracion();
    
    @ $bd = new mysqli($configuracion->getServidor(), $configuracion->getUsuario(), $configuracion->getPassword(), $configuracion->getBd());
    if (mysqli_connect_errno() != 0)
    {
        throw new Exception('Error conectando: '.mysqli_connect_error(), mysqli_connect_errno());
    }
    return $bd;
}
?>