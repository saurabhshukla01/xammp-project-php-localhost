<?php
class Car
    {
    Private $speed;
    function GetCarfun($speed)
        {
            echo "Car is started with medium speed 90km/h  has changed with high Speed Car<br>";
            echo "Changed with high race car is <br>";
            $this->speed=$speed;
        }
    function ShowCarfun()
        {
            echo "High Speed Car is started with this speed  $this->speed";
        }
    }
$var = new Car();    // object create use the new keyword .
//$var->GetCarfun('100km/h');
$var->GetCarfun('160km/h');   // get method to set the value of function .
$var->ShowCarfun();      // show all value in the method of given function.


?>