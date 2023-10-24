<?php

require_once 'sessionsController.php';

if (empty($_POST['user']) || empty($_POST['password'])) {
    $redirigir = 'index.php?mensaje=Error, falta un campo obligatorio';
} else {
    $cs = new SessionController();
    $result = $cs->login($_POST['user'], $_POST['password']);
    if ($result[0] === true) {
        $redirect = 'home.php?mensaje=' . $result[1];
    } else {
        $redirect = 'index.php?mensaje=' . $result[1];
    }
}

header('Location: ' . $redirect);