<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "<br>Mostrando Fecha" .$_POST["fecha"];//PAra mostrar el valor 
    echo "";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo fecha</h1>

    <form action="#" method="post">
    <input type="date" name="fecha" id="fecha">
    <input type="submit" name="submit" value="enviar">
    </form>
 
</body>
</html>