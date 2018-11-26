<?php

/**
 * Class Err
 */
class Err
{
    private static $errors = array();

    /**
     * Devuelve si un tipo de error mediante su clave existe o no.
     * @param $key
     * @return bool
     */
    public static function isSet($key)
    {
        return isset(self::$errors[$key]);
    }

    /**
     * Devuelve segun una clave el array de errores.
     * @return mixed
     */
    public static function read($key)
    {
        if (self::isSet($key))
            return self::$errors[$key];
        return false;
    }

    /**
     * Alias para read
     * @param $key
     * @return mixed
     */
    public static function r($key)
    {
        return self::read($key);
    }

    /**
     * Añade valores a un array de errores.
     * @param $key
     * @param $value
     * @return bool
     */
    public static function write($key, $value)
    {
        if (!is_string($key)) return false;
        self::$errors[$key][] = $value;
        return $value;
    }

    /**
     * Alias para write
     * @param $key
     * @param $value
     * @return bool
     */
    public static function w($key, $value)
    {
        return self::write($key, $value);
    }

    /**
     * Elimina un tipo de error segun una clave.
     * @param $key
     */
    public static function delete($key)
    {
        if (is_string($key))
            unset(self::$errors[$key]);
    }

    /**
     * @param $key
     */
    public static function d($key)
    {
        self::delete($key);
    }

    /**
     * Borra TODOS los errores.
     */
    public static function reset()
    {
        self::$errors = array();
    }
}

/**
 * Esta clase gestiona errores por tipos sin posibilidad de equivocarte.
 *
 * EJ:
 * Fallo ocurre en el login:
 * Err::write("login","Email Incorrecto");
 * Err::write("login", "Usuario Incorrecto");
 * El usuario no piensa a guardar los cambios en su perfil
 * Err::write("perfil-warning", "No has guardado los cambios");
 * Si recuperamos los errores de login nos devolvera un array con todos los fallos ocurridos en el login.
 * Err::read("login");
 * Nos devuelve:
 * [0] -> "Email Incorrecto"
 * [1] -> "Usuario Incorrecto"
 * y lo mismo pasaria si hacemos Err::r("perfil-warning"); => [0] -> "No has guardado los cambios"
 */