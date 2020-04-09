<?php
   class Test extends CI_Controller {

      public function index() {
         echo "This is default function.";
      }

      public function form() {
         $this->load->view('form');
      }

      public function hello() {
         echo "This is hello function.";
      }
   }
?>
