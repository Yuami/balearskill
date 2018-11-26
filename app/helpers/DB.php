<?php

/**
 * Class DB
 * Hace una conexión a la base de datos utilizando PDO i solo deja tener una instancia.
 * Se deben haber configurado los paramentros en el archivo conf.php.
 */
class DB
{
    private static $conn;

    private function __construct() {
        $config = Config::singleton();
        $dsn = 'mysql:host=' . $config->get('dbhost') . ';dbname=' . $config->get('dbname');
        $user = $config->get('dbuser');
        $pass = $config->get('dbpass');
        self::$conn = new PDO($dsn, $user, $pass);
    }

    /**
     * @return PDO
     */
    public static function conn() : PDO {
        if (!isset($conn))
            new self;
        return self::$conn;
    }
}