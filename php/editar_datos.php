<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bictia/ej/style/style.css">
    <title>Editar Usuario</title>
        <div class="info_usuario">
        <form methodo="POST" enctype="multipart/form-data" action="logica_editar.php">
            <input class="input" type="text" value="<?php echo $datoVar[0] ?>" name="nombre">
            <input class="input" type="text" value="<?php echo $datoVar[1]?>" name="apellido">
            <input class="input" type="text" value="<?php echo $datoVar[2] ?>" name="direccion">
            <input class="input" type="text" value="<?php echo $datoVar[3] ?>" name="telefono">
            <input class="input" type="text" value="<?php echo $datoVar[4]?>" name="email">
            <button class="button" type="submit">Actualizar</button>
        </form>
        </div>
</head>
<body>
    
</body>
</html>
