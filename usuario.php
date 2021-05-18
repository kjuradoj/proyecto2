<html>
    <head>
        <title>Mantenimiento CRUD de la tabla tusuario</title>
    </head>
    <body>
    <?php
        //conectarse con la base de datos
        include 'conexion.php';
        $link = Conectarse();
    ?>
         <form action="#" method="post">
            <p>Codigo: <input type="text" name="txtCodigo"/> </p>
            <p>Apellidos: <input type="text" name="txtApellidos"/> </p>
            <p>Nombres: <input type="text" name="txtNombres"/> </p>
            <p>Correo: <input type="text" name="txtCorreo"/> </p>
            <p>
                <input type="submit" name="btnAgregar" value="Agregar"/>
                <input type="submit" name="btnEliminar" value="Eliminar"/>
                <input type="submit" name="btnActualizar" value="Actualizar"/>
            </p>
        </form>
    </body>
</html>
            