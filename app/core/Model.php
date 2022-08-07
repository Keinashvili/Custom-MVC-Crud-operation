<?php

namespace app\app\core;

use app\app\database\Database;
use PDO;

abstract class Model extends Database
{
    protected $table;
    private static $childrenArray = [];

    private function pdo(): PDO
    {
        return parent::connect();
    }

    public static function all(): array
    {
        $static = new static();
        $connect = $static->pdo();
        $table = $static->table;
        $sql = "SELECT * FROM $table";
        $result = $connect->query($sql);

        foreach ($result->fetchAll() as $key => $fetchArray) {
            $childClass = new static();
            foreach ($fetchArray as $itemKey => $itemValue) {
                $childClass->{$itemKey} = $itemValue;
            }
            self::$childrenArray[] = $childClass;
        }

        return self::$childrenArray;
    }

    public static function findOrFail($id)
    {
        $static = new static();
        $connect = $static->pdo();
        $table = $static->table;
        $sql = "SELECT * FROM $table WHERE id = $id";
        $result = $connect->query($sql);

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function create(array $array)
    {
        $columns = '';
        $values = '';
        $num = 0;
        $execute = [];

        $static = new static();
        $table = $static->table;

        foreach ($array as $key => $value) {
            $num++;
            $num != count($array) ? $columns .= "$key, " : $columns .= $key;
            $num != count($array) ? $values .= ":$key, " : $values .= ":$key";
            $execute[":$key"] = $value;
        }

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $statement = $static->pdo()->prepare($sql);
        $statement->execute($execute);
    }

    public static function update(int $id,array $array)
    {
        $execute = [];

        $static = new static();
        $table = $static->table;
        $sql = "UPDATE $table SET ";

        foreach ($array as $key => $value){
            $sql = $sql . " " . $key . " = '" . $value . "', ";
        }
        $len = strlen($sql) - 2;
        $sql = substr($sql, 0, $len);
        $sql = $sql." WHERE id=$id ";

        $statement = $static->pdo()->prepare($sql);
        $statement->execute($execute);
    }


    public static function delete($id)
    {
        $static = new static();
        $connect = $static->pdo();
        $table = $static->table;
        $sql = "DELETE FROM $table WHERE id = $id";
        $result = $connect->query($sql);

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
