<?php 
   Class Stu_Model extends CI_Model { 

      Public function __construct() { 
         parent::__construct(); 
      }

    public function insert_data($data){
    	$result          = array();
    	$student_name    =$data['student_name'];
        $student_pass    =$data['student_pass'];
        $this->db->select("*");
        $this->db->from("student");
        $this->db->where("student_name",$student_name);
        $query = $this->db->get();
    if ($query->num_rows() > 0) { 
   	    $res=$query->row();
   	    $result['student_id']   = $res->student_id;
	   	$result['student_name'] = $res->student_name;
	   	$result['student_pass'] = $res->student_pass;
    }else{
	    $query = $this->db->insert("student",$data);
	    $result['student_id']   = $this->db->insert_id();
	    $result['student_name'] = $data['student_name'];
	    $result['student_pass'] = $data['student_pass'];
    }    
		$this->session->set_userdata($result);
		return $result;
    }

public function student_details(){
		$student_id =$this->session->userdata('student_id'); 
		$this->db->select("*");
		$this->db->from("student");
		$this->db->where('student_id',$student_id );
		$query =$this->db->get(); 
		return $query->row();

}

   public function student_information($data,$student_id){
		   	$this->db->where('student_id',$student_id);
		   	$this->db->update("student",$data);
		   	echo " Student update successfully";
		   }
   public function get_country(){
		   	$query = $this->db->get('country');
		   	return $query->result_array();
		   }
  public function get_state(){
  	$query=$this->db->get('state');
  	return $query->result_array();
  }
   public function get_city(){
  	$query=$this->db->get('city');
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


