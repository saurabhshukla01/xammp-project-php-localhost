<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function getCountry(){

        $page =  $_GET['page'];
        $this->load->model('welcome_model');
        $countries = $this->welcome_model->getCountry($page);
        
        foreach($countries as $country){
            echo "<tr><td>".$country->country_id."</td><td>".$country->country_name."</td><td>".$country->country_code."</td></tr>";
        }
        exit;
    }
}