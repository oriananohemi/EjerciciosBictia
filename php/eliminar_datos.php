<?php

require("conexion.php");

if($conexion->connect_error) {
    echo "Conexion fallida";
} else {

    $usuario = $_GET['nombre_usuario'];

    $sql = "DELETE FROM usuario WHERE nombre_usuario = '$usuario'";

    mysqli_query($conexion, $sql);

    header('location: index.php');

}