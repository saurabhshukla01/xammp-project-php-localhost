<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model{

    public function getCountry($page){
        $offset = 5*$page;
        $limit = 5;
        $sql = "select * from country limit $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}