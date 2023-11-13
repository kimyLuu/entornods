<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <table>
        <tr>
            <th>Identificador</th>
            <th> Nombre de usuario </th>
        </tr>
        <?php foreach($arrausers as $user){?>
            <tr>
                <td><?php echo $user[0]?></td>
                <td><?php echo $user[1]?></td>
                <td><a href="?method=show&id=<?php echo $user[0]?>">Ver Usuario</a></td>
            </tr>

            <?php } ?>
    </table>
    
</body>
</html>
