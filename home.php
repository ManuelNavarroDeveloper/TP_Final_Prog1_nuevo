<?php
require 'bookController.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Libreria</title>
</head>
<form action="bookController.php" method="post">
    <h2> Elige el libro que quieres alquilar </h2><br>
    <label> Libros disponibles: </label><br>

    <br><select name="bookOption">
        <option value=""> Seleccione un libro</option>
        <?php
            $bookController = new BookController;
            $bookController->getDisplayableBooks();
        ?>
    </select><br>
    <br><input type="submit" value="Alquilar" class="boton">
</form>
<br>

<form action="bookController.php" method="post">
    <label> Devuelva todos sus libros alquilados </label><br>
    <br><input type="submit" name="return" value="Devolver" class="boton">
</form>
</body>

<br>

<a>Libros alquilados por la gente: 
    <?php 
        echo $bookController->rentedBooks();    
?></a>
<br>

<br>

<a>Cantidad de libros que tenemos disponibles:
    <?php 
        echo $bookController->totalAvaliableBooks();    
?></a>
<br>

</br>
<a href="/TP_Final_Prog1_nuevo/logout.php"> Desloguearse </a>
</br>
</html>