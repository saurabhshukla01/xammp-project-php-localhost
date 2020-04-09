<?php
class home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		//echo "Hello";
		$this->load->view('home');
	}
	public function home1(){
		//echo "Hello";
		$this->load->view('home1');
	}

	public function about(){
		//echo "Hello";
		$this->load->view('about');
	}

	public function f1($name){
		echo "Hello $name";
	}
}

?>
