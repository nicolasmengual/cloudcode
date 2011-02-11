<?php
session_start();
?>

<div id="barranav">
    <div id="menu">
        Inicio Archivos Bugs Tareas Wiki Usuarios
    </div>
    <div id="usuario">
        <?php echo $_SESSION['usuario'].' | Salir'; ?> 
    </div>
</div>