<?php

require 'bookController.php';

$isbnBookOption = null;

if (!empty($_POST['isbnBookOption'])) {
    $isbnBookOption = $_POST['isbnBookOption'];
    $bookOption = new BookController;
    $bookOption->bookOption($isbnBookOption);
    $bookOption->rentBook($isbnBookOption);


} else {
    header ('Location: home.php?mensaje=Error, elija una opción');
}