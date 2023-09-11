<?php

class base
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    protected function show()
    {

        echo $this->name;
    }
}

class child extends base
{
    public function get()
    {
        echo $this->name . '<br>';
    }
}

$obj = new base('gulam kibria');

//Cannot access protected property base
//$obj->name = 'hamza chowdhury'; 
//$obj->show();

$obj2 = new child('hamza chowdhury');

$obj2->get();
