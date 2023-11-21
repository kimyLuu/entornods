<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Alta de usuario</h1>

<form method="post" action="/user/store">

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Apellidos</label>
    <input type="text" name="surname" class="form-control">
</div>
<div class="form-group">
    <label>F. cumpleaños</label>
    <input type="text" name="birthdate" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<button type="submit" class="btn btn-default">Enviar</button>
</form>
</body>
</html>