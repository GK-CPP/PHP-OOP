<?php
abstract class parentclass
{
    public $name;

    abstract protected function calc($a, $b);
}


class childclass extends parentclass
{

    //Declaration of childclass::calc() must be compatible with parentclass::calc
    // public function calc()
    // {
    //     echo 'hello';
    // }

    public function calc($c, $d)
    {
        echo $c + $d;
    }
}

//Cannot instantiate abstract class parentclass
//$obj = new parentclass();

$obj = new childclass();
//$obj->calc();
$obj->calc(10, 20);
