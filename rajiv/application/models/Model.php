<?php 
   Class User_Model extends CI_Model { 

      Public function __construct() { 
         parent::__construct(); 
      }
   public function insert_data($data){
   	$result   = array();
    $emp_name = $data['emp_name'];
    $emp_regno= $data['emp_regno'];
    $this->db->select("*");
    $this->db->from("employee");
    $this->db->where("emp_name",$emp_name);
    $query = $this->db->get();
   if ($query->num_rows() > 0) { 
   	$res=$query->row();
   	$result['emp_id']   = $res->emp_id;
   	$result['emp_name'] = $res->emp_name;
   	$result['emp_regno']= $res->emp_regno;
   }else{
    $query = $this->db->insert("employee",$data);
    $result['emp_id']   = $this->db->insert_id();
    $result['emp_name'] = $data['emp_name'];
    $result['emp_regno']= $data['emp_regno'];

}
	$this->session->set_userdata($result);
   	return $result;


   } 
   public function emp_details(){
   $emp_id=$this->session->userdata('emp_id');
   $this->db->select("*");
   $this->db->from("employee");
   $this->db->where('emp_id',$emp_id);
    $query = $this->db->get(); 
    return $query->row();
   }
      }

      ?>
