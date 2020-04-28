<?php

require('conexion.php');

    if($conexion->connect_error) {
        echo "Conexion fallida";
    } else {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['telefono'];
        $telefono = $_POST['direccion'];
        $email = $_POST['email'];

        $sql = "UPDATE usuario SET nombre_usuario = '$nombre', apellido_usuario = '$apellido', direccion_usuario = '$direccion', telefono_usuario = '$telefono', email_usuario = '$email' WHERE id =$id;";
        
        mysqli_query($conexion,$sql);
    
        // header('location: index.php');
    }
?>