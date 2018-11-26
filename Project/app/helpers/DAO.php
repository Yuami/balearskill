<?php

include "DB.php";

/**
 * Class DAO
 */
abstract class DAO {
    /**
     * @string $table
     * @string $class
     */
    protected static $table;
    protected static $class;

    /**
     * @return array
     */
    public static function getAll() {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, static::$class);
    }

    /**
     * @param $id
     * @return array
     */
    public static function getById($id) {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table . " WHERE id=:id");
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, static::$class);
    }

    /**
     * @param $column
     * @param $value
     * @return array
     */
    public static function getBy($column, $value) {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table . " WHERE :column=':value'");
        $statement->bindValue(":column", $column);
        $statement->bindValue(":value", $value);
        $statement->bindValue(":table", static::$table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, static::$class);
    }

    /**
     * @param $id
     */
    public static function deleteById($id) {
        $statement = DB::conn()->prepare("DELETE FROM " . static::$table . " WHERE id=:id");
        $statement->bindValue(":table", static::$table);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }

    /**
     * @param $column
     * @param $value
     */
    public static function deleteBy($column, $value) {
        $statement = DB::conn()->query("DELETE FROM " . static::$table . " WHERE :column=':value'");
        $statement->bindValue(":table", static::$table);
        $statement->bindValue(":column", $column);
        $statement->bindValue(":value", $value);
        $statement->execute();
    }

    public abstract static function insert();

}