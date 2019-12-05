<?php 
   class Test extends CI_Controller {
  	  Public function __construct() { 
         parent::__construct(); 
         $this->load->model("User_model");
        }	
      public function index(){
      	$this->load->view('test');
      }
      public function login(){
        $data   = array(
                "user_name" => $this->input->post("uesr_name"),
                "user_pass" => $this->input->post("user_password")
                ); 
        $result['user_information']=$this->User_model->checkUsers($data);
        redirect("/Test/userProfile/");
      }
      public function upload(){
        $this->load->view('upload');
      }
      public function uploads(){
        $this->load->view('uploads');
      }

      public function userProfile() {       	 
      	$result['userList1'] =$this->User_model->getUsers(); 
      	$result['country']=$this->User_model->get_country();
      	$result['state']=$this->User_model->get_state();
      	$result['city']=$this->User_model->get_city();
        $result['userList']=$this->User_model->get_join();
        $result['user_information']=$this->User_model->get_user();
        if ($this->session->userdata('user_id') >0 || $this->input->post("uesr_name")!='') {
         $this->load->view('profile',$result);
        }else{
        redirect("Test/");
       }
        
       }
      public function update_user(){
        	//print_r($this->input->post());
          //print_r($_FILES);
        	$user_id =$this->input->post("user_id");
        	$data = array(
                     "mobile_no" => $this->input->post("mobileNo"),
                     "address"   => $this->input->post("address"),
                     "pin_code"  => $this->input->post("pincode"),
                     "gender"    => $this->input->post("gender"),
                     "country_id"=> $this->input->post("country"),
                     "state_id"  => $this->input->post("state"),
                     "city_id"   => $this->input->post("city")                    
                      );
         
          // if(isset($_FILES["userfile"])){ 
          //     $targetDir = "uploads/";
          //     @$fileName = basename($_FILES["userfile"]["name"]);
          //     $targetFilePath = $targetDir . $fileName;
          //     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
          //     if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetFilePath)){
          //     $data["image"]  = $fileName; 
          //       //$data["image"]  = $fileName.'.'.$fileType; 
          //     }        
          //    }
            $result = $this->User_model->update_user($data,$user_id); 
            redirect("/Test/userProfile/");
           }
     public function updateimage(){  
          $user_id =$this->input->post("user_id");
          if(isset($_FILES["userfile"])){ 
              $targetDir = "uploads/";
              @$fileName = basename($_FILES["userfile"]["name"]);
              $targetFilePath = $targetDir . $fileName;
              $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
              if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetFilePath)){
              $data["image"]  = $fileName; 
                //$data["image"]  = $fileName.'.'.$fileType; 
              }        
              $result = $this->User_model->update_user($data,$user_id); 
             }
             redirect("/Test/userProfile/");
            }
     public function deletedata(){
       $id = $_GET['id'];
  	   $this->User_model->deleterecords($id);
  	   echo "Date deleted successfully !";
  	  }
    public function country(){
  	   $data['country']=$this->User_model->get_country();
       $this->load->view('profile',$data); 
      } 
    public function state(){
      $countryID = $_POST['countryID'];
  	  $data=$this->User_model->fetch_state($countryID);
      echo json_encode($data);
      }
    //  public function city(){
   	// $data ['city']=$this->User_model->get_city();
    // $this->load->view('profile',$data);
    // }
    public function city(){
      $stateID = $_POST['stateID'];
      //echo $stateID;die();
      $data=$this->User_model->fetch_city($stateID);
      echo json_encode($data);
      }

    public function Logout(){
      $this->session->unset_userdata("user_id");
      $this->session->unset_userdata("user_name");
      $this->session->unset_userdata("user_pass");
      session_destroy();
      redirect('Test/');
    }
    
  }
?> 

     