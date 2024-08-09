<?php

namespace Class\Model;

use Framework\Database\Database;
use Faker\Factory;

class Db
{
    public $allowedFields;
    public $table;
    public $database;
    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'username' => 'root',
            'password' => '',
            'schema' => 'class',
        ];

        $this->database = new Database($config);
    }

    public function get($table = null, $limit = null, $offset = 0)
    {
        $fields = join(", ", $this->allowedFields);
        $results = $this->database->select($fields)
            ->from($table ?? $this->table);
    
        if($limit) {
            if($offset) {
                $results = $results->limit($limit, $offset);
            }
            else {

                $results = $results->limit($limit);
            }
        }

        $results = $results->run()->fetchAll();

        return json_encode($results);
    }

    public function insert($data, $table = null)
    {
        return $this->database->insert()
            ->into($table ?? $this->table)
            ->set($data)->run();
    }

    public function replace($data, $table = null)
    {
        return $this->database->replace()
            ->into($table ?? $this->table)
            ->set($data)->run();
    }

    public function update($data, $where, $table = null)
    {
        $query = $this->database->update()
                ->table($table ?? $this->table)
                ->set($data);

        // ->whereEqual('id', 1)
        // ->whereEqual('name', 1)
        // ->whereEqual('name', 1)
        // ->run();

        foreach($where as $key => $value) {
            $query = $query->whereEqual($key, $value);
        }
        return $query->run(); 

    }
    
    public function delete($data, $where, $table = null)
    {
        $query = $this->database->delete()
                ->from($table ?? $this->table);

        foreach($where as $key => $value) {
            $query = $query->whereEqual($key, $value);
        }
        return $query->run(); 
    }

    public function seed($num = 1) {

        $faker = Factory::create();

        for($i =0; $i <= $num; $i++) {
            $data = [];
            foreach($this->allowedFields as $field) {
                $value = $faker->word();
                if($field =="name") {
                    $value = $faker->name();
                }

                if($field == "date_of_birth") {
                    $value = $faker->date();
                }

                if($field == "email") {
                    $value = $faker->email();
                }

                if($field == "phone_number") {
                    $value = $faker->e164PhoneNumber();
                }

                if($field == "description") {
                    $value = $faker->paragraph();
                }

                if($field == "age") {
                    $value = $faker->numberBetween(10, 60);
                }

                $data [$field] = $value;
            }

            $this->insert($data);
        }
    }
}
