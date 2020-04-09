<?php 
class admin_model extends CI_Model
{
	 public function login($un,$ps)
	 {
		$q=$this->db->where(['un'=>$un,'ps'=>$ps])->get('admin');
		if($q->num_rows())
		{
			return $q->row()->un;
		}
		
			
		
	 }
}
?>
