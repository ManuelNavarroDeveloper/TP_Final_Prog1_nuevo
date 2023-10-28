<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Bienvenido al sistema</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body class="container">
      <div class="jumbotron text-center">
      <h1>Alquiler de libros</h1>
      </div>
      <div class="text-center">
        <h3>Crear nuevo usuario</h3>
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>

        <form action="createUser.php" method="post">
            <input name="user" class="form-control form-control-lg" placeholder="Usuario"><br>
            <input name="password" type="password" class="form-control form-control-lg" placeholder="Contraseña"><br>
            <input name="name" class="form-control form-control-lg" placeholder="Nombre"><br>
            <input name="surname" class="form-control form-control-lg" placeholder="Apellido"><br>
            <input type="submit" value="Registrarse" class="btn btn-primary">
        </form>
      </div>
    </body>
</html>