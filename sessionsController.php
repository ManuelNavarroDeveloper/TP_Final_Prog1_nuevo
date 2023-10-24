<?php

require_once 'userRepository.php';
require_once 'user.php';

class SessionController
{
    public function login($user, $password)
    {
        $repo = new UserRepository();
        $user = $repo->login($user, $password);

        if ($user === false) {
            return [ false, "Error de credenciales" ];
        } else {
            session_start();
            $_SESSION['user'] = serialize($user);

            return [true, "Usuario correctamente autenticado"];
        }
    }

    function create($name_user, $name, $surname, $password)
    {
        $repo = new UserRepository();
        $user = new User($user, $name, $surname);
        $id = $repo->save($user, $password);
        if ($id === false) {
            return [ false, "Error al crear el user" ];
        } else {
            $user->setId($id);
            session_start();
            $_SESSION['user'] = serialize($user);
            return [ true, "Usuario creado correctamente" ];
        }
    }

    function delete(User $user)
    {
        $repo = new UserRepository();
        return $repo->delete($user);
    }

    function modify(string $user, string $name, string $surname, User $user)
    {
        $repo = new UserRepository();

        if ($repo->update($user, $name, $surname, $user)) {
            $user->setData($user, $name, $surname);
            $_SESSION['user'] = serialize($user);

            return true;
        } else {
            return false;
        }
    }

}
