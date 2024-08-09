<?php

namespace Class\Api;

use Class\Model\Db;

class Teacher extends Db
{
    public $table = 'teachers';

    public $allowedFields = [
        'name',
        'email',
        'age',
        'subject',
    ];
}
