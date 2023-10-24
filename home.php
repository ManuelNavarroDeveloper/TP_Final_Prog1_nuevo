<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Libreria</title>
</head>
<form action=".php" method="post">
    <h2> Elige el libro que quieres alquilar </h2><br>
    <label> Libros disponibles: </label><br>

    <br><select name="" class="seleccionar">
        <option value=""> Seleccione un libro</option>
        <?php
        ?>
    </select><br>
    <br><input type="submit" value="alquilar" class="boton">
</form>

<br>

<form action=".php" method="post">
    <label> Devuelva todos sus libros alquilados </label><br>
    <br><input type="submit" value="devolver" class="boton">
</form>
</body>

<br>

<a>Libros alquilados por la gente: 
    <?php 

?></a>
<br>

<br>

<a>Cantidad de libros que tenemos disponibles:
    <?php 

?></a>
<br>

</br>
<a href="/TP_Final_Prog1_nuevo/logout.php"> Desloguearse </a>
</br>
</html>