<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        <?php
        include 'conexionBD.php';
        
        session_start();
        
        $bd = conexionMysql();
        
        if (isset ($_POST['enviar']) === TRUE)
        {
            $comprobarUsuario = "SELECT user, pass FROM usuarios WHERE user = '".$_POST['usuario']."' AND pass = '".$_POST['password']."';";
            $resultado = $bd->query($comprobarUsuario);
            if ($resultado->num_rows == 1)
            {
                $_SESSION['usuario'] = $_POST['usuario'];
                header("Location:index.php");
            }
        }
        ?>
        <div id="login">
            <form id="login_form" method="post" action="">
                <table border="0">
                    <tr>
                        <td align="right">Usuario</td>
                        <td>
                            <label>
                                <input type="text" name="usuario" id="usuario" />
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Contraseña</td>
                        <td>
                            <label>
                                <input type="password" name="password" id="password" />
                            </label>
                        </td>
                    </tr>
                        <tr>
                        <td>&nbsp;</td>
                        <td align="right">Recordar
                            <label>
                                <input type="checkbox" name="recordar" id="recordar" />
                            </label>
                        </td>
                    </tr>
                        <tr>
                        <td>&nbsp;</td>
                        <td>
                            <label>
                                <input type="submit" name="enviar" id="enviar" value="Entrar" />
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>