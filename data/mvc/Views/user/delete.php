<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Borrado de  un usuario</h1>
<!--Esto de aqui es una conexion con el usercontroller-->
<form method="post" action="/user/delete"> <!--Llammas al metodo-->

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" value="<?=$user->name?>" class="form-control">
</div>
<br>
<div class="form-group">
    <label>Apellidos</label>
    <input type="text" name="surname" value="<?=$user->surname?>" class="form-control">
</div>
<br>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" value="<?=$user->email?>" class="form-control">
</div>
<br>
<div class="form-group">
    <label>F. cumpleaños</label>
    <input type="date" name="birthdate" value="<?=$user->birthdate?>" class="form-control">
</div>
<input type="hidden" name="id" value="<?=$user->id?>"> <!--Se crea un cmpo oculto que es el id-->
<button type="submit" class="btn btn-default">Enviar</button>
</form>
</body>
</html>