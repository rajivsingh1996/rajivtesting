<?php
    class Control extends CI_Controller {
  	  Public function __construct() { 
         parent::__construct(); 
         $this->load->model("User_Model");
        }

      public function index(){
      	$this->load->view('userlogin');
      }

      public function login(){
      	        $data   = array(
                "emp_name"  => $this->input->post("emp_name"),
                "emp_regno" => $this->input->post("emp_regno")
                ); 
                $result['login_information']=$this->User_Model->insert_data($data);
       			redirect('Control/viewpro');
           }

      public function viewpro(){ 
        $data['emp']     = $this->User_Model->emp_details();
        $data['country'] = $this->User_Model->get_country();
        $data['state']   = $this->User_Model->get_state();
        $data['city']    = $this->User_Model->get_city();
      	$this->load->view('viewpro',$data);
      }

      public function emp_update(){
      $emp_id = $this->input->post("emp_id");
      $data   = array(
                "emp_fullname" => $this->input->post("emp_fullname"),
                "emp_mobileno" => $this->input->post("emp_mobileno"),
                "emp_address"  => $this->input->post("emp_address"),
                "emp_salary"   => $this->input->post("emp_salary"),
                "emp_gender"   => $this->input->post("gender"),
                "emp_country"  => $this->input->post("country"),
                "emp_state"    => $this->input->post("state"),
                "emp_city"     => $this->input->post("city")
                
                );
     
      $result = $this->User_Model->emp_information($data,$emp_id);   
        }

     public function state(){
      $countryID = $_POST['countryID'];
  	  $data      =$this->User_Model->fetch_state($countryID);
      echo json_encode($data);
      }

     public function city(){
     	$stateID = $_POST['stateID'];
     	$data    = $this->User_Model->fetch_city($stateID);
     	echo json_encode($data);
         }
         
     public function Logout(){
      $this->session->unset_userdata("emp_id");
      $this->session->unset_userdata("emp_name");
      $this->session->unset_userdata("emp_regno");
      session_destroy();
      redirect('Control/');
    }

   // public function updateimage(){  
         // $user_id =$this->input->post("user_id");
          //if(isset($_FILES["userfile"])){ 
            //  $targetDir = "uploads/";
              //@$fileName = basename($_FILES["userfile"]["name"]);
              //$targetFilePath = $targetDir . $fileName;
              //$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
              //if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetFilePath)){
              //$data["image"]  = $fileName; 
                //$data["image"]  = $fileName.'.'.$fileType; 
              //}        
              //$result = $this->User_Model->emp_update($data,$emp_id); 
             //}
             //redirect("/Control/userProfile/");
            //}
       
   }       
      	?>
     