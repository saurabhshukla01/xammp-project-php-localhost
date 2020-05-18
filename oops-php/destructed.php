<?php

/*

destructor  :  when user used object , after all work completed value inside function , automatically destroy  object is
called destructor . create (__destruct) this keyword inside function .

*/

class Van
{
    public $var;
    function __construct($var)
    {
        $this->var = $var;
        echo "User craeted van constructor successfully.<br>";
        echo "Constuctor value is $this->var<br>";
    }
    function __destruct()
    {
        $this->var = 0;
        echo "User created object is destroy successfully.<br>";
        echo "Destructor value is $this->var<br>";
    }

}

$obj = new Van(8);

?>