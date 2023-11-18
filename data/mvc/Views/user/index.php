<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <?php require "../Views/common/header.php"?>
    <!-- Begin page content -->
    <main role="main" class="container">

      <h1 class="mt-5">Lista de usuarios</h1>
    <table>
        <tr>
            <th> Nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>birthdate</th>
        </tr>
        <?php foreach($users as $user){?>
            <tr>
                <td><?php echo $user->name?></td>
                <td><?=$user->surname?></td>
                <td><?=$user->email?></td>
                <td><?=$user->birthdate?></td>
                <td><a href="/user/show/=<?php echo $user->id?>">Ver Usuario</a></td>
            </tr>

            <?php } ?>
    </table>
    </main>

   
<?php require "../Views/common/footer.php"?>
<?php require "../Views/common/scripts.php"?>

  </body>
</html>
