<?php

class employee
{
    public $name, $age, $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function info()
    {
        echo "employee profile" . '<br>';
        echo $this->name . '<br>' . $this->age . '<br>' . $this->salary . '<br>';
    }
}

class manager extends employee
{
    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;
    function info()
    {
        echo "manager profile" . '<br>';
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
        echo $this->name . '<br>' . $this->age . '<br>' . $this->totalsalary . '<br>';
    }
}


$obj = new manager('mahfuz', 25, 10000);
$obj2 = new employee('gulam kibria', 25, 5000);


$obj->info();
$obj2->info();
