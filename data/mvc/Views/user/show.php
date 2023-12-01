<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalle del usuario <?php echo $user->id ?></h1>
<ul>
    <li><strong>Nombre: </strong><?php echo $user->name ?></li>
    <li><strong>Apellidos: </strong><?php echo $user->surname ?></li>
    <li><strong>Email: </strong><?php echo $user->email ?></li>
    <li><strong>F. nacimiento: </strong><?php echo $user->birthdate->format('d/m/Y')?></li>
    <li><a href="?method=index">Volver</a></li>
    
</ul>
    <a href="/user/toPdf/<?php echo $user->id ?>">PDF</a>
</body>
</html>
<?php
