<?php

namespace Class\Api;

use Class\Model\Db;


class Student extends Db
{
    public $table = 'students';

    public $allowedFields = [
        'name',
        'date_of_birth',
        'email',
        'phone_number',
    ];
}
