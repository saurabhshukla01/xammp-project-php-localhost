<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function withdata()
        {
           $now = date('Y-m-d H:i:s');
           $data['currenttime'] = $now;
           $data['anotherdatabit'] = 'Now is the' .
              'time for all good men to come to '.
              'the aid of their country.';
            $this->load->view('withdataview', $data);
        }


	public function home()
	{
		$this->load->view('home');
	}

     public function hello() {
       $this->load->view('hello');
     }

     public function test() {
       $this->load->view('test');
     }

     public function name() {
     $this->load->view('errors/index.html');

    }

    public function user_model() {
        $this->load->model('User_model');
        echo "DATA FILE INSERTED ";
        //$this->User_model->user_model();
    }

}




?>
