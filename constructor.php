<?php

class person
{
    public $name = 'No name', $age = 'No age';

    function show()
    {
        echo $this->name . '<br>' . $this->age;
    }
}


$obj = new person();

$obj->name = 'gulam kibria';
$obj->age = 25;

$obj->show();
