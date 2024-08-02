<?php
class CapitalCity extends City
{
    public $hasBeaches;

    public function __construct($name, $country, $hasBeaches)
    {
        parent::__construct($name, $country);
        $this->hasBeaches = $hasBeaches;
    }

    public function hasBeaches()
    {
        return $this->hasBeaches ? "yes" : "no";
    }
}
