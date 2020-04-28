<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bictia/ej/style/style.css">
    <title>Formulario</title>
</head>
<body>
<h1 class="title">Registro</h1>
    <form method="POST" enctype="multipart/form-data" action="enviar_datos.php">
    <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="input">
    <input type="text" name="apellido" placeholder="Ingresa tu apellido" class="input">
    <input type="text" name="direccion" placeholder="Ingresa tu direccion" class="input">
    <input type="text" name="telefono" placeholder="Ingresa tu telefono" class="input">
    <input type="email" name="email" placeholder="Ingresa tu email" class="input">
    <button name="submit" class="button">Agregar</button>
    </form>
    <a class="link" href="index.php">Ver registros</a>
</body>
</html>
