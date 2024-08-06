<?php
class Todo
{
    public $todos = [];

    function __construct($todo = [])
    {
        if (count($todo)) {
            $this->todos[] = $todo;
        }
    }

    function add($todo)
    {
        $this->todos[] = $todo;
    }

    function remove($id)
    {
        // $data = [];
        // foreach($this->todos as $d) {
        //     if($d['id'] !== $id) {
        //         $data[] = $d;
        //     }
        // }
        // $this->todos = $data;

        $this->todos = array_filter($this->todos, function ($d) use ($id) {
            if ($d['id'] !== $id) {
                return $d;
            }
        });
    }

    function get($id)
    {
        $todos = array_filter($this->todos, function ($d) use ($id) {
            if ($d['id'] == $id) {
                return $d;
            }
        });
        return count($todos) ? $todos[0] : [];
    }

    function getAll()
    {
        return $this->todos;
    }
}
