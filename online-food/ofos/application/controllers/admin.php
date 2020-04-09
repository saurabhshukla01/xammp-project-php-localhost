<?php
class admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index()
	{
		$this->load->view('admin_home');
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("un","User Name","required");
		$this->form_validation->set_rules("ps","Password","required");
		if($this->form_validation->run())
		{
			$un=$this->input->post('un');
			$ps=$this->input->post('ps');
			$this->load->model('admin_model','am');
			$u=$this->am->login($un,$ps);
			if($u)
			{
				    $this->load->library('session');
					$this->session->set_userdata('un',$u);
					$this->load->view('admin_welcome');
			}
			else
			{
				echo "Wrong User";
			}
		}
		else
		{
			$this->load->view('admin_home');
		}
		
	}
	public function home_open()
	{
		$this->load->library('session');
		$this->session->set_userdata('un',$un);
		$this->load->view('admin_welcome');
	}
	
}
?>