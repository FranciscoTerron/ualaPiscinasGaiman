<?php
    $conectar = mysqli_connect('localhost','root','');

    //verificamos la conexion

    if(!$conectar)
    {
        echo "No se pudo conectar con el servidor";

    } else{
        $base= mysqli_select_db($conectar,'registro_wala');
        if(!$base)
        {
            echo "No se encontro la base de datos";
        }
    }

    // recuperar las variables

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO datos (nombre, email, mensaje) VALUES('$nombre', '$correo' , '$mensaje')";

    $ejecutar = mysqli_query($conectar,$sql);

    if(!$ejecutar)
    {
        echo "Hubo un error";
    } else {
        echo 'Datos guardados correctamente <br> <a href="index.html">Volver </a> ';
    }


?>