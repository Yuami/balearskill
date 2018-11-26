<?php

include "DB.php";

/**
 * Class DAO
 */
class DAO {
    /**
     * @string $table
     * @string $class
     */
    private static $table;

    /**
     * DAO constructor.
     */
    public function __construct($table)
    {
        self::$table = $table;
    }


    /**
     * @return array
     */
    public function getAll() {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @return array
     */
    public function getById($id) {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table . " WHERE id=:id");
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $column
     * @param $value
     * @return array
     */
    public function getBy($column, $value) {
        $statement = DB::conn()->prepare("SELECT * FROM " . static::$table . " WHERE :column=':value'");
        $statement->bindValue(":column", $column);
        $statement->bindValue(":value", $value);
        $statement->bindValue(":table", static::$table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     */
    public function deleteById($id) {
        $statement = DB::conn()->prepare("DELETE FROM " . static::$table . " WHERE id=:id");
        $statement->bindValue(":table", static::$table);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }

    /**
     * @param $column
     * @param $value
     */
    public function deleteBy($column, $value) {
        $statement = DB::conn()->query("DELETE FROM " . static::$table . " WHERE :column=':value'");
        $statement->bindValue(":table", static::$table);
        $statement->bindValue(":column", $column);
        $statement->bindValue(":value", $value);
        $statement->execute();
    }
}