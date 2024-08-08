<?php

namespace Hospital\Model;

use Framework\Database\Database;

class Db
{
    public $table;
    public $database;
    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'username' => 'root',
            'password' => 'root',
            'schema' => 'sais',
        ];

        $this->database = new Database($config);
    }

    public function get($table = null)
    {
        $results = $this->database->select('*')
            ->from($table ?? $this->table)
            ->run()
            ->fetchAll();

        return json_encode($results);
    }

    public function insert($data, $table = null)
    {
        return $this->database->insert()
            ->into($table ?? $this->table)
            ->set($data)->run();
    }
}
