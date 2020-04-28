<?php

require('conexion.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    if($conexion->connect_error) {
        echo "Conexion fallida";
    } else {   
        $sql = "INSERT INTO usuario (nombre_usuario, apellido_usuario, direccion_usuario,telefono_usuario,email_usuario) VALUES('$nombre', '$apellido', '$direccion', '$telefono', '$email')";
        
        if($conexion->query($sql) === TRUE) {
            header('location: registro.php');
        } else {
            echo "error". $conexion->error;
        }
    }
?>