<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulario de Registro</h1>

  <form method="POST" action="bdprepared2.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br><br>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required><br><br>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" id="telefono" required><br><br>
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required><br><br>
    <input type="submit" value="Enviar">

</body>
</html>