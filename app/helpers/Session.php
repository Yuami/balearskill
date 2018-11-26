<?php

/**
 * Class Session
 */
class Session
{
    /**
     * @var bool
     */
    private static $session = false;

    /**
     * Inicia la session
     */
    public static function start() {
        if (!self::$session)
            self::$session = session_start();
    }

    /**
     * Asigna un valor a una variable de session
     * @param $key
     * @param $value
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Devuelve una variable de session
     * @param $key
     * @return null
     */
    public static function get($key) {
        if (self::isSet($key))
            return $_SESSION[$key];
        return null;
    }

    /**
     * Borra una variable de session si existe
     * @param $key
     * @return bool
     */
    public static function delete($key): bool {
        if (self::isSet($key)) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    /**
     * Devuelve si la variable ha sido creada
     * @param $key
     * @return bool
     */
    public static function isSet($key) {
        return isset($_SESSION[$key]);
    }

    /**
     * Destruye la session
     */
    public static function destroy() {
        session_destroy();
        $_SESSION = null;
    }
}