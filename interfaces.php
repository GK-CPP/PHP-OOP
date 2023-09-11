<?php

interface parent1
{
    // $var; //cannot be use in interface
    //protected function show(); //cannot be use protected and private
    function cal($a, $b);
}

interface parent2
{
    // $var; //cannot be use in interface
    //protected function show(); //cannot be use protected and private
    function sub($a, $b);
}

class childClass implements parent1, parent2
{

    public  $c;
    public $text = '';
    function cal($a, $b)
    {
        $this->c = $a + $b;
        $this->text = $a . '+' . $b . '=' . $this->c . '<br>';
    }
    function sub($a, $b)
    {
        $this->c = $a - $b;
        $this->text = $a . '-' . $b . '=' . $this->c . '<br>';
    }
    function display()
    {
        echo $this->text;
    }
}

//Cannot create interface object
//$obj = new parent1();
//$obj = new parent2();

$obj = new childClass();
$obj->cal(10, 20);
$obj->display();
$obj->sub(10, 20);
$obj->display();
