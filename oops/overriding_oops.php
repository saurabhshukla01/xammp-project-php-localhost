<?php
class car
    {
        public function carfun()
        {
            echo "Car is started<br>";
        }
    }

class sportcar extends car
    {
        public function carfun()
        {
            echo "This is car started sportcar<br>";
        }
    }

$var = new sportcar();
$var->carfun();

?>