<!--<!DOCTYPE html>
<html>
<head>
	<title>Data Abstraction Example in PHP</title>
</head>
<body>-->
<?php
	abstract class My_abstract_class
	{
		abstract protected function pre_sub_fix_function($parameter_v);
	}
	class My_concrete_class extends My_abstract_class
	{
		public function pre_sub_fix_function($parameter_v)
		{
			//return "I just love to read $parameter_v on CodesCracker.";
			return "I just love to read {$parameter_v} on CodesCracker.";
			// curly brekets has join the string not show in the output.
		}
	}
	$obj = new My_concrete_class;
	echo $obj->pre_sub_fix_function("PHP")."<br/>";
	echo $obj->pre_sub_fix_function("HTML")."<br/>";
	echo $obj->pre_sub_fix_function("CSS")."<br/>";
	echo $obj->pre_sub_fix_function("Java")."<br/>";
	echo $obj->pre_sub_fix_function("C")."<br/>";
	echo $obj->pre_sub_fix_function("C++")."<br/>";
	echo $obj->pre_sub_fix_function("JavaScript")."<br/>";
?>
<!--</body>
</html>-->


<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
?>




