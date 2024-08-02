<?php

class City
{
    public $name;
    public $country;

    public function __construct($name, $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }
}
