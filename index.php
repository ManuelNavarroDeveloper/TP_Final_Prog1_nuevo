<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Bienvenido al sistema de alquiler de libros</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="form-register">
      <div class="jumbotron text-center">
      <h1>Libreria</h1><br>
      </div>    
      <div class="text-center">
        <h3>Ingrese su cuenta socio</h3><br>
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>

        <form action="login.php" method="post">
            <input name="user" class="control" placeholder="Usuario"><br>
            <br><input name="password" type="text" class="control" placeholder="Contraseña"><br>
            <br><input type="submit" value="Ingresar" class="boton">
        </form><br>
        <p><a href="signup.php">Crear nuevo usuario</a></p>
      </div> 
    </body>
</html>