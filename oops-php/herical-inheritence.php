<?php

class Father
{
    public $var;
    function propertyFather()
    {
        //$arr = ['car','house','business','Bike'];
        echo "<br> Its Father Property : <br>";
        echo "<b>Big house <br> car <br> Bike <br> Business </b><br>";

    }
}

class Son extends Father
{
    public $var;
    function propertySon()
    {
        //$arr = ['car','house','business','Bike'];
        echo "<br> Its Son Property : <br>";
        echo "<b> Big flat <br> BMW car <br> Hayabusa Bike <br> Job </b><br>";

    }
}

class Daughter extends Father
{
    public $var;
    function propertyDaughter()
    {
        //$arr = ['car','house','business','Bike'];
        echo "<br> Its Daughter Property : <br>";
        echo "<b> Big House , flat  <br> Marcidy car <br> Pulsure Bike <br> Bank Job </b><br>";

    }
}

$obj = new Son();
echo "All Property of Son is : </h2>";
$obj -> propertyFather();
$obj -> propertySon();
$obj1 = new Daughter();
echo "All Property of Daughter is : </h2>";
$obj1 -> propertyFather();
$obj1 -> propertyDaughter();


?>