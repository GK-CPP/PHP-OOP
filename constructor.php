<?php

class person
{
    public $name, $age;

    function __construct($name = 'No name', $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . '<br>' . $this->age . '<br>';
    }
}


$obj = new person('gulam kibria', 25);

//$obj->name = 'gulam kibria';
//$obj->age = 25;

$obj->show();

$obj2 = new person();
$obj2->show();
