<?php

class Cookie
{
    /**
     * @param $key
     * @return bool
     */
    public static function get($key) {
        if (self::isSet($key)){
            return $_COOKIE[$key];
        }
        return false;
    }

    /**
     * @param $key
     * @return bool
     */
    public static function isSet($key) {
        return isset($_COOKIE[$key]);
    }

    /**
     * @param $key
     * @param $value
     * @param $timeInDays
     */
    public static function set($key, $value, $timeInDays) {
        $timeToDays = time() + $timeInDays * 24 * 60 * 60;
        setcookie($key, $value, $timeToDays, "/");
    }

    /**
     * @param $key
     */
    public static function delete($key) {
        if (self::isSet($key)){
            $_COOKIE[$key] = null;
        }
    }
}