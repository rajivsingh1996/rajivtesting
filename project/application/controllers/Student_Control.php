<?php
    class Student_Control extends CI_Controller {
  	  Public function __construct() { 
         parent::__construct(); 
         $this->load->model("Stu_Model");
        }

      public function index(){
      	$this->load->view('stulogin');
      } 

      public function login(){
      	        $data   = array(
                "student_name"  => $this->input->post("student_name"),
                "student_pass"  => $this->input->post("student_pass")
                ); 
                $result['login_information']=$this->Stu_Model->insert_data($data);
       			redirect('Student_Control/Student_view');
           }

            public function Student_view(){ 
        $data['student'] = $this->Stu_Model->student_details();
        $data['country'] = $this->Stu_Model->get_country();
        $data['state']   = $this->Stu_Model->get_state();
        $data['city']    = $this->Stu_Model->get_city();
        $this->load->view('Student_view',$data);
    }
    public function student_update(){
      $student_id = $this->input->post("student_id");
      $data       = array(
                "student_phoneno" => $this->input->post("student_phoneno"),
                "student_address" => $this->input->post("student_address"),
                "student_gender"  => $this->input->post("gender"),
                "student_country" => $this->input->post("country"),
                "student_state"   => $this->input->post("state"),
                "student_city"    => $this->input->post("city"),
              
                );
     
      $result = $this->Stu_Model->student_information($data,$student_id);
              redirect("/Student_Control/student_view/");
           }
     public function updateimage(){  
            $student_id =$this->input->post("student_id");
            if(isset($_FILES["userfile"])){ 
	              $targetDir = "uploads/";
	              @$fileName = basename($_FILES["userfile"]["name"]);
	              $targetFilePath = $targetDir . $fileName;
	              $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	              if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetFilePath)){
	            $data["image"]  = $fileName; 
	            
	              }        
	              $result = $this->Stu_Model->student_information($data,$student_id);
	              }
	              redirect("/Student_Control/student_view/");
	              }   
        

    function state(){
		      $countryID = $_POST['countryID'];
		  	  $data      =$this->Stu_Model->fetch_state($countryID);
		      echo json_encode($data);
		      }
    function city(){
		    $stateID = $_POST['stateID'];
		    $data    = $this->Stu_Model->fetch_city($stateID);
		    echo json_encode($data);
		    }

    function Logout(){
	      $this->session->unset_userdata("student_id");
	      $this->session->unset_userdata("student_name");
	      $this->session->unset_userdata("student_pass");
	      session_destroy();
	      redirect('Student_Control/');
	    }

}

     
?>