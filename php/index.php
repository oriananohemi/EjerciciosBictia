<?php

require('conexion.php');

if($conexion->connect_error) {
    echo "Conexion fallida";
} else {
    $buscar = $_POST['buscar'];

    $sql = "SELECT * FROM  usuario WHERE nombre_usuario = '$buscar'"; 

    $resultado = mysqli_query($conexion, $sql); 

    $resultado_usuario = mysqli_fetch_all($resultado);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bictia/ej/style/style.css">
    <title>Buscar Usuario</title>
</head>
<body>
    <h1 class="title">Buscar</h1>
    <form method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Ingresa" name="buscar" class="input">
    <button class="button">Buscar</button>
    </form>    
    <a class="link" href="registro.php">Deseas registrarte?</a>
    <?php foreach($resultado_usuario as $datoUsuario): ?>
        <div class="info_usuario">
            <h2>Identificacion: <?php echo $datoUsuario[0]; ?> </h2>
            <h2>Nombre: <?php echo $datoUsuario[1]; ?> </h2>
            <h2>Apellido: <?php echo $datoUsuario[2]; ?></h2>
            <h2>Direccion: <?php echo $datoUsuario[3]; ?></h2>
            <h2>Telefono: <?php echo $datoUsuario[4]; ?></h2>
            <h2>Correo: <?php echo $datoUsuario[5]; ?></h2>
            <a class="button" href="eliminar_datos.php?id=<?php echo $datoUsuario[0]; ?>">Eliminar</a>
            <a class="button" href="editar_datos.php?id=<?php echo $datoUsuario[0]-> id; ?>">Editar</a>
        </div>
    <?php endforeach ?>
    </body>
</html>