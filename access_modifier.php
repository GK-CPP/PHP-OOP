<?php


class base_private
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    private function show()
    {

        echo $this->name;
    }
}

class child1 extends base_private
{
    public function get()
    {
        // echo $this->name . '<br>'; //name not found
    }
}

$obj = new base_private('gulam kibria');

//Cannot access private property base
//$obj->name = 'hamza chowdhury'; 
//$obj->show();

$obj2 = new child1('hamza chowdhury');
//Undefined property: child1
//$obj2->get();
