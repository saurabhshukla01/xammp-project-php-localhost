<?php

/*

constructor :  When user create a class under define a constructor using construct keyword ,
after user create a object than automatically called function constructor is called constructor.

*/

class Van
{
    public $var;
    function __construct()
    {
        $this->var = "8";
        echo "<br>Called Van class inside Constructor.<br>";
        echo "Constructor value is $this->var";
    }
}

$obj = new Van;


?>