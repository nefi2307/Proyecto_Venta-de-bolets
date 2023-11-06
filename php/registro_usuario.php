<?php

    require 'conexion.php';

        $id;
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $contraseña = $_POST['contrasena'];
        $rol = "usuario";

        $insertar = "INSERT INTO usuarios (user_Id, user_Correo, user_Contraseña, user_nombres, user_ApPaterno,
        user_ApMaterno, use_Edad, user_Rol) VALUES ('$id', '$email', '$contraseña', '$nombre' , '$apellidoPaterno', '$apellidoMaterno',
         '$edad', '$rol');";

        $query = mysqli_query($enlace, $insertar);

    if($query){        
        echo "<script> alert('Tu registro ha sido exitoso. ¡Gracias por unirse a la familia TecLagExpress!');
        location.href = '../inicio_sesion.html';
         </script>";
        
    }else{
        echo("Error en el server, intente de nuevo más tarde.");
    }

?>