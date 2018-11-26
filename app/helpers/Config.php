<?php

/**
 * Class Config
 */
class Config
{
    private $vars;
    private static $instance;

    /**
     * Config constructor.
     */
    private function __construct()
    {
        $this->vars = array();
    }

    /**
     * @param $name
     * @param $value
     * Defineix una variable a config
     */
    public function set($name, $value)
    {
        if (!isset($this->vars[$name])) {
            $this->vars[$name] = $value;
        }
    }

    /**
     * Con get('nombre_de_la_variable') recuperamos un valor.
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        if (isset($this->vars[$name])) {
            return $this->vars[$name];
        }
        return false;
    }

    /**
     * @return mixed
     */
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
}