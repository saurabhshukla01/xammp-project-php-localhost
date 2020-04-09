<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends MY_Controller {

	function __construct() {

		parent::__construct();
	}

	public function index() {
		
		$this->load->template('home');
	}

	public function Contact_us() {

		$this->load->template('contact-us');
	}

	public function About_us() {

		$this->load->template('about-us');
	}

	public function Privacy_policy() {

		$this->load->template('privacy-policy');
	}

	public function Term_and_condition() {

		$this->load->template('term-and-condition');
	}
}
