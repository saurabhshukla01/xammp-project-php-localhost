<?php


/*

Inheritence : The child class inherit all property and method parent class .

*/

class Father
{
    public $var;
    function propertyFather()
    {
        //$arr = ['car','house','business','Bike'];
        echo "Big house <br> car <br> Bike <br> Business <br>";

    }
}

class Son extends Father
{
    public $var;
    function propertySon()
    {
        //$arr = ['car','house','business','Bike'];
        echo "Big flat <br> BMW car <br> Hayabusa Bike <br> Job <br>";

    }
}

$obj = new Son();
$obj -> propertyFather();
$obj -> propertySon();

?>