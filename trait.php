<?php

trait hlw
{
    public function cal()
    {
        echo "hello";
    }
}

class person
{
    use hlw;
}

class parson1
{
    use hlw;
}

$obj = new person();
$obj->cal();
$obj1 = new parson1();
$obj1->cal();
