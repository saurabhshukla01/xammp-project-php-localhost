<?php


class food
{
	protected $fname;
	function getdata($name)
	{
		$this->fname=$name;
	}
	function showdata()
	{
		echo "Item is : $this->fname <br>";
	}

}

class junkfood extends food
{
	
	function passvalue()
	{
		// private $jfname="sandwitch";
		$this->fname="New Junkfood";
		//$this->fname=$this->jfname;
	}
}

$f1 = new junkfood();
$f1 -> passvalue();
$f1 -> showdata();

?>