<?php

class parents
{
	private $data1;
	function parentsfun()
	{
		echo "This is parenets class.<br>";
	}
}

class child extends parents
{
	function childfun()
	{
		echo "This is the Child Class.<br>";
	}
}

$var = new child();
$var-> childfun();
$var-> parentsfun();          // inherit the class parent in child class (class ke object se parents class call krna hi inherit class hoti hai .)

?>



