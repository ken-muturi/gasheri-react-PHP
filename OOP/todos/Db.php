<?php

namespace OOP\TODOS;

class Db
{
    public static function connect($database = "todos")
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        try {
            $conn = new \mysqli($host, $username, $password, $database);
            return $conn;
        } catch (\Exception $error) {
            error_log($error);
            die("error connecting to database");
        }
    }

    public static function select($conn, $sql)
    {
        $result = Db::query($conn, $sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public static function findAll($conn, $table)
    {
        $sql = "SELECT * FROM {$table};";
        return Db::select($conn, $sql);
    }

    public static function find($conn, $table, $id)
    {
        $sql = "SELECT * FROM {$table} where id = {$id};";
        $result = Db::select($conn, $sql);
        if (count($result) > 0) {
            return $result[0];
        }
        return null;
    }

    public static function insert($conn, $sql, $isBulkInsert = false)
    {
        return Db::query($conn, $sql, $isBulkInsert);
    }

    public static function insertData($conn, $table, $data)
    {
        if (count($data) > 1) {
            $fields = join(", ", array_keys($data[0]));
            $stmt = [];
            foreach ($data as $d) {
                $stmt[] = "(" . join(", ", array_values($d)) . ")";
            }
            $values = join(", ", $stmt);
        } else {
            $fields = join(", ", array_keys($data));
            $values = "(" . join(", ", array_values($data)) . ")";
        }

        $sql = "INSERT INTO {$table} ({$fields}) VALUES {$values};";
        return Db::query($conn, $sql, true);
    }

    public static function update($conn, $sql)
    {
        return Db::query($conn, $sql);
    }

    public static function deleteQuery($conn, $sql)
    {
        return Db::query($conn, $sql);
    }
    public static function delete($conn, $table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id= {$id}";
        return Db::query($conn, $sql);
    }

    public function arrayToString($array, $prefix = "AND")
    {
        $parts = [];
        foreach ($array as $key => $value) {
            // Check if the value is a string and add quotes if necessary
            if (is_string($value)) {
                $value = "'$value'";
            }
            $parts[] = "$key = $value";
        }
        return implode(" $prefix ", $parts);
    }

    public static function deleteWhere($conn, $table, $where)
    {
        $whereClause = self::arrayToString($where);
        $sql = "DELETE FROM {$table} WHERE {$whereClause}";
        return Db::query($conn, $sql);
    }

    public static function query($conn, $sql, $isBulkInsert = false)
    {
        try {
            if ($isBulkInsert) {
                return $conn->multi_query($sql);
            } else {
                return $conn->query($sql);
            }
        } catch (\Exception $error) {
            error_log($error);
            die("Error executing the query.");
        }
    }
}

$conn = Db::connect('todos');
