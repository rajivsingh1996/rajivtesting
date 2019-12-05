<?php 
   Class User_model extends CI_Model { 

      Public function __construct() { 
         parent::__construct(); 
      }

      public function checkUsers($data){
      	$result 	=	array();
      	$user_name 	=	$data['user_name'];
      	$user_pass  =   $data['user_pass'];
      	$this->db->select("*");
      	$this->db->from("user");
      	$this->db->where("user_name",$user_name);
      	$query 		=	$this->db->get();
      if($query->num_rows() > 0){
      		$res 	=	$query->row();
      		$result['user_id']   = $res->user_id;
      		$result['user_name'] = $res->user_name;
      		$result['user_pass'] = $res->user_pass;
      }else{
      		$this->db->insert("user",$data);
      		$result['user_id']   = $this->db->insert_id();
      		$result['user_name'] = $data['user_name'];
      		$result['user_pass'] = $data['user_pass'];
       	  }
         $this->session->set_userdata($result);
         //print_r($result); die();
         return $result; 
       }

     public function update_user($data,$user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data); 
        //echo 'Data  updated successfully';
    }
    
	  public function getUsers(){
		$this->db->select("*");
		$this->db->from("user");
		$query  =  $this->db->get();
		return $query->result();
  	}

	  public function deleterecords($id){
	  $this->db->query("delete  from user where user_id='".$id."'");
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

    public function get_join(){
    //echo ($id);die();
    $this->db->select('user.*,IFNULL(country.country_name,"") as country_name, IFNULL(state.state_name,"") as state_name, IFNULL(city.city_name,"") as city_name');
    $this->db->from('user');
    $this->db->join('country','country.country_id = user.country_id','LEFT');
    $this->db->join('state','state.state_id = user.state_id','LEFT');
    $this->db->join('city','city.city_id = user.city_id','LEFT');
    $query = $this->db->get();
    return $query->result();
    }
    public function get_user(){  //(user table get by id)
    //echo($user_id); die();
    $u_id=$this->session->userdata('user_id');
    $this->db->select("*");
    $this->db->from("user");
    $this->db->where('user_id',$u_id);
    $query = $this->db->get(); 
    return $query->row();
    }
    }
?> 
