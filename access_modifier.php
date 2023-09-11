<?php

class base
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show()
    {

        echo $this->name;
    }
}

$obj = new base('gulam kibria');

$obj->name = 'hamza chowdhury';

$obj->show();
