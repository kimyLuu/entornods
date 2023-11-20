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
      <h1 class="mt-5">Listado General de la App</h1>
      <h1>Lista de Usuarios</h1>
      <table>
        <tr>
            <th>Name</th>
            <th> Surname </th>
            <th>Email</th>
            <th>Birthdate</th>
        </tr>
        <?php foreach($users as $user){?>
            <tr>
                <td><?php echo $user ->name ?></td>
                <td><?php echo $user ->surname ?></td>
                <td><?php echo $user ->email ?></td>
                <td><?php echo $user ->birthdate ?></td>
                
                <td><a href="/user/show/<?php echo $user->id?>">Ver Usuario</a></td>
            </tr>

            <?php } ?>
    </table>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
     
    </main>

   
<?php require "../Views/common/footer.php"?>
<?php require "../Views/common/scripts.php"?>

  </body>
</html>
