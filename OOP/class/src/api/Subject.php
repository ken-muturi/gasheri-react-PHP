<?php

namespace Class\Api;

use Class\Model\Db;

class Subject extends Db
{
    public $table = 'subjects';

    public $allowedFields = [
        'name',
        'description',
    ];
}
