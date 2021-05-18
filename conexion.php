<?php
// Modulo que permite conectarse a MYSQL
// variables de conexion
$host = 'localhost';
$puerto = 3306;
$usuario = 'root';
$contraseña = '';
$basedatos = 'bdejemplo';

// funcion que permite conectarse a la base de datos
function Conectarse()
{
    global $host, $puerto, $usuario, $contraseña, $basedatos;
    if(!($link = mysqli_connect($host,$usuario,$contraseña)))
    {
        echo 'Error: No hay conexion con el servidor MySQL . <br/>';
        exit();

    }
    else
    {
        echo 'OK: se ha establecido conexion con el servidor . <br/>';

    }
    // Conectarse a la base de datos
    if (!mysqli_select_db($link,$basedatos))
    {
        echo 'Error: No se puede conectar a la base datos bdejemplo . <br/>';
        exit();
    }
    else
    {
        echo 'Conexion establecida correctamente . <br/>';

    }
return $link;
}
?>