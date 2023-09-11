<?php

class base_public
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

$obj = new base_public('gulam kibria');

$obj->name = 'hamza chowdhury';

$obj->show();

/*******************************************************/


class base_protected
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

class child extends base_protected
{
    public function get()
    {
        echo $this->name . '<br>';
    }
}

$obj = new base_protected('gulam kibria');

//Cannot access protected property base
//$obj->name = 'hamza chowdhury'; 
//$obj->show();

$obj2 = new child('hamza chowdhury');

$obj2->get();

/*******************************************************/

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
        // echo $this->name . '<br>'; //name not 
    }
}

$obj = new base_private('gulam kibria');

//Cannot access private property base
//$obj->name = 'hamza chowdhury'; 
//$obj->show();

$obj2 = new child1('hamza chowdhury');
//Undefined property: child1
//$obj2->get();
