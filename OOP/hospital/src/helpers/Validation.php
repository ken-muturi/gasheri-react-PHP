<?php

namespace Hospital\Helpers;

use Framework\Validation\Validation as FValidation;

class validation
{
    public $validation;

    public function __construct()
    {
        $this->validation = new FValidation();
    }
}
