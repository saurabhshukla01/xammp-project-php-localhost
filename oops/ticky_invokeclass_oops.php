<?php

class Car
    {
        public function startcar()
        {
            echo "Car is started from parents Class<br>";
        }
        public function Invokeparentstart()
        {
            self :: startcar();
        }
    }

class sportcar extends Car
{
    public function startcar()
    {
        echo "Car is started From child class<br>";
    }
    public function Invokechildstart()
    {
        parent :: Invokeparentstart();
    }
}

$spcar = new sportcar();
$spcar -> startcar();
$spcar -> Invokeparentstart();

?>