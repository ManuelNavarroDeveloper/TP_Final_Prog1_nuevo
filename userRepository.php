<?php

require_once 'user.php';
require_once '.env.php';

class UserRepository
{
    private static $connection = null;

    public function __construct()
    {
        $credentials = credentials();
        if (is_null(self::$connection)) {
            self::$connection = new mysqli(
                $credentials['server'],
                $credentials['username'],
                $credentials['password'],
                $credentials['database'],
            );
        }
        if (self::$connection->connect_error) {
            $fail = 'Error de conexión: ' . self::$connection->connect_error;
            self::$connection = null;
            die($fail);
        }
        self::$connection->set_charset('utf8mb4');
    }

    public function login($user, $password)
    {
        $q = "SELECT id, password, name, surname FROM users WHERE user = ?;";
        $query = self::$connection->prepare($q);
        $query->bind_param("s", $user);

        if ($query->execute()) {
            $query->bind_result($id, $encrypted_password, $name, $surname);
            if ($query->fetch()) {
                if (password_verify($password, $encrypted_password)) {
                    return new User($user, $name, $surname, $id);
                }
            }
        }
        return false;
    }

    public function save(User $users, $password)
    {
        $q = "INSERT INTO users (user, password, name, surname) ";
        $q.= "VALUES (?, ? , ? , ?)";
        $query = self::$connection->prepare($q);

        $user = $users->user;
        $password = password_hash($password, PASSWORD_DEFAULT);
        $name = $users->name;
        $surname = $users->surname;

        $query->bind_param("ssss", $user, $password, $name, $surname);

        if ($query->execute())  {
            return self::$connection->insert_id;
        } else {
            return false;
        }
    }
//
//     public function eliminar(Usuario $usuario)
//     {
//         $q = "DELETE FROM usuarios WHERE id = ?";
//         $query = self::$connection->prepare($q);

//         $id = $user->getId();

//         $query->bind_param("d", $id);

//         return $query->execute();
//     }

//     public function actualizar(
//         string $user,
//         string $name,
//         string $surname,
//         User $user
//     ) {
//         $q = "UPDATE users SET user = ?, name = ?, surname = ? ";
//         $q.= " WHERE id = ?;";

//         $query = self::$connection->prepare($q);

//         $id = $user->getId();

//         $query->bind_param("sssd", $user, $name, $surname, $id);

//         return $query->execute();
//     }
// 
}
