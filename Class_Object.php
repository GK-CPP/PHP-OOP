<?php

class calculation
{
    public $a, $b, $c;
    public $text = '';
    function sum()
    {
        $this->c = $this->a + $this->b;
        $this->text = $this->a . '+' . $this->b . '=' . $this->c . '<br>';
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        $this->text = $this->a . '-' . $this->b . '=' . $this->c . '<br>';
    }

    function mul()
    {
        $this->c = $this->a * $this->b;
        $this->text = $this->a . '*' . $this->b . '=' . $this->c . '<br>';
    }

    function div()
    {
        $this->c = $this->a / $this->b;
        $this->text = $this->a . '/' . $this->b . '=' . $this->c . '<br>';
    }

    function mod()
    {
        $this->c = $this->a % $this->b;
        $this->text = $this->a . '%' . $this->b . '=' . $this->c . '<br>';
    }

    function display()
    {
        echo $this->text;
    }
}


$obj = new calculation();

$obj->a = 10;
$obj->b = 5;

$obj->sum();
$obj->display();
$obj->sub();
$obj->display();
$obj->mul();
$obj->display();
$obj->div();
$obj->display();
$obj->mod();
$obj->display();


$obj2 = new calculation();

$obj2->a = 10;
$obj2->b = 20;

$obj2->sum();
$obj2->display();
$obj2->sub();
$obj2->display();
$obj2->mul();
$obj2->display();
$obj2->div();
$obj2->display();
$obj2->mod();
$obj2->display();
