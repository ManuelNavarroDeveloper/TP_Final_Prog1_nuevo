<?php

require_once 'user.php';
require_once '.env.php';

class bookRepository
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