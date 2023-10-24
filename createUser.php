<?php
require_once 'sessionController.php';

if (isset($_POST['user']) && isset($_POST['password'])) {
    $cs = new SessionController();
    $result = $cs->create($_POST['user'], $_POST['name'],
                          $_POST['surname'], $_POST['password']);
    if( $result[0] === true ) {
        $redirect = 'home.php?mensaje='.$result[1];
    } else {
        $redirect = 'create.php?mensaje='.$result[1];
    }
} else {
    $redirect = 'create.php?mensaje=Hay que elegir usuario y clave';
}
header('Location: ' . $redirect);