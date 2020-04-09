<!DOCTYPE html>
<html>
<head>
	<title>Data Abstraction Example in PHP</title>
</head>
<body>
<?php
	abstract class My_Abstract_Class
	{
		abstract protected function gettingValueFunction();
		abstract protected function prefixValue($prefixParameterValue);
		public function displayingFunction()
		{
			echo $this->gettingValueFunction()."<br/>";
		}
	}
	class AnotherFirstAbstractClass extends My_Abstract_Class
	{
		protected function gettingValueFunction()
		{
			return "AnotherFirstAbstractClass";
		}
		public function prefixValue($prefixParameterValue)
		{
			return "{$prefixParameterValue}AnotherFirstAbstractClass";
		}
	}
	class AnotherSecondAbstractClass extends My_Abstract_Class
	{
		public function gettingValueFunction()
		{
			return "AnotherSecondAbstractClass";
		}
		public function prefixValue($prefixParameterValue)
		{
			return "{$prefixParameterValue}AnotherSecondAbstractClass";
		}
	}
	$objectFirst = new AnotherFirstAbstractClass;
	$objectFirst->displayingFunction();
	echo $objectFirst->prefixValue('PrefixedValue ');
	echo "<hr/>";
	$objectSecond = new AnotherSecondAbstractClass;
	$objectSecond->displayingFunction();
	echo $objectSecond->prefixValue('PrefixedValue ');
	echo "<hr/>";
?>
</body>
</html>
