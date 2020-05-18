<?php

class Father
{
    public $var;
    function propertyFather()
    {
        //$arr = ['car','house','business','Bike'];
        echo "Fathers property is : <br> ";
        echo "<b> Big house <br> car <br> Bike <br> Business </b><br>";

    }
}

class Son extends Father
{
    public $var;
    function propertySon()
    {
        //$arr = ['car','house','business','Bike'];
        echo "Fathers property and Son property : <br> ";
        echo "<b> Big flat <br> BMW car <br> Hayabusa Bike <br> Job </b> <br>";

    }
}

class GrandSon extends Son
{
    public $var;
    function propertyGrandson()
    {
        //$arr = ['car','house','business','Bike'];
        echo "Fathers property , Son property , GrandSon : <br>  ";
        echo "<b> Big property , Big house , Big flat <br>Fort car , BMW car <br>Apache , Hayabusa Bike
                <br> Office , Manager of Business </b><br>";

    }
}

$obj = new GrandSon();
echo "<h2>All property of Father is : </h2>";
$obj -> propertyFather();
echo "<h2>All property of Son is : </h2>";
$obj -> propertyFather();
$obj -> propertySon();
echo "<h2>All property of GrandSon is : </h2>";
$obj -> propertyFather();
$obj -> propertySon();
$obj -> propertyGrandson();

?>