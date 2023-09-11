<?php

class base
{
    public static $name = ' gulam kibria';
    public static function show()
    {
        //echo $this->name; //this is not working bcz static variable is not accessible outside the class using self
        echo self::$name;
    }

    public function __construct($n)
    {
        //echo $this->name;
        self::$name = $n;
    }
}

echo base::$name;
base::show();


$obj = new base('amir hamza');

$obj->show();

/**************************************************** */


class base1
{
    public static $name = 'arif kibria';
}

class child extends base1
{
    public function show()
    {
        echo parent::$name;
    }
}

$obj = new child();
$obj->show();
