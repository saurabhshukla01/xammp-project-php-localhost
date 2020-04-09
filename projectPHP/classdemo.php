<?php

class Fruit {

	public $name;
	private $color;


	function set_name($name) {
		$this->name = $name;
	}

	function get_name() {
		return $this->name;
	}

	function set_color($color) {
		$this->color = $color;
	}

	function get_color() {
		return $this->color;
	}
}

$var = new Fruit();
// echo $var->name;
$var->set_name('saurabh');
// echo $var->name;
echo $var->get_name();
echo"<br>";
$var->set_color('black');
// echo $var->color;
echo $var->get_color();
echo"<br>";
echo "=========================================================<br>";

?>


<?php

class dbcon{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	function set_servername($servername) {
		$this->servername = $servername;
	}
	function get_servername(){
		return $this->servername;
	}

	function set_username($username) {
		$this->username = $username;
	}
	function get_username(){
		return $this->username;
	}

	function set_password($password) {
		$this->password = $password;
	}
	function get_password(){
		return $this->password;
	}

	function set_dbname($dbname) {
		$this->dbname = $dbname;
	}
	function get_dbname(){
		return $this->dbname;
	}
}


$var = new dbcon();
$var->set_servername('localhost');
echo $var->get_servername();
echo"<br>";
$var->set_password('Abc@1234');
echo $var->get_password();
echo"<br>";
$var->set_username('root');
echo $var->get_username();
echo"<br>";
$var->set_dbname('test_1');
echo $var->get_dbname();
echo"<br>";


$contdb = mysqli_connect($var->get_servername(),$var->get_username(),$var->get_password(),$var->get_dbname());
if (!$contdb) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>