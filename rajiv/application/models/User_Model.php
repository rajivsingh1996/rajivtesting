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
   if($query->num_rows() > 0) { 
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

   public function emp_information($data,$emp_id){
		   	$this->db->where('emp_id',$emp_id);
		   	$this->db->update("employee",$data);
		   	echo "update successfully";
		   }
   public function get_country(){
		   	$query = $this->db->get('country');
		   	return $query->result_array();
		   }
   public function get_state(){
		   	$query = $this->db->get('state');
		   	return $query->result_array();
		   }

   public function get_city(){
		   	$query = $this->db->get('city');
		   	return $query->result_array();
		   }

    public function fetch_state($id){
		      $this->db->select("*");
		      $this->db->from("state");
		      $this->db->where('country_id',$id);
		      $query = $this->db->get();
		      return $query->result_array();
		    } 

    public function fetch_city($id){
	    	$this->db->select("*");
	    	$this->db->from("city");
	    	$this->db->where('state_id',$id);
	    	$query = $this->db->get();
	    	return $query->result_array();
              }
	    

      }

      ?>
