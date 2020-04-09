<?php
class Welcome extends CI_Controller
{
	function __construct()
	{
		parent ::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index()
	{
		$this->load->view('home-layout');
	}
	function home()
	{
		$this->load->view('home-layout');
	}
	function product()
	{
		    $this->load->model('user_model');
			$res=$this->user_model->search2();
			$this->load->view('product',['res'=>$res]);
	}
	function contect()
	{
		$this->load->view('contect');
	}
	function search()
	{
		$search=$this->input->post('search');
		$this->load->model('user_model');
		$res=$this->user_model->search($search);
		if($res)
		{
			$this->load->view('user-search-res',['res'=>$res]);
		}
		else
		{
			$this->load->model('user_model');
			$res=$this->user_model->search2();
			$this->load->view('other_product',['res'=>$res]);
		}
	}
	function book_now($id)
	{
		$this->load->model('user_model');
		$res=$this->user_model->book_now($id);
		$this->load->view('order',['d'=>$res]);
		
	}
	
	
	
	
	public function online_order()
	{
		/*$this->form_validation->set_rules('cname',"Coustmer Name","required");
		$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('mno',"Mobile Number","required");
				$this->form_validation->set_rules('address',"Address","required");
					$this->form_validation->set_rules('city',"City","required");*/
					
		$data=$this->input->post();
		$email=$this->input->post('email');
		unset($data['sub']);
		$this->load->model('user_model');
		$a=$this->user_model->online_order_book($data);
		if($a)
		{
			$this->load->model('user_model');
			$res=$this->user_model->search_res($email);
			$this->load->view('online_order_res',['res'=>$res]);
			
		}
	}
}
?>