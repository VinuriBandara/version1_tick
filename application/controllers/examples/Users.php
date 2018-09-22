<?php

Class Users extends CI_Controller
{
	public function __construct() 
	{ 
		parent::__construct(); 
		$this-> load -> helper('url'); 
		$this-> load -> helper('form_helper'); 
		$this-> load-> model('user_model'); 
	} 

	public function getall() 
	{ $data["user_list"] = $this-> user_model -> get_all_users(); 
		$this-> load -> view("show_users", $data); }



	public function form_show() {
		$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
} else {
       
  		
   
        $data = array(
            'Username' => $this -> input -> post('u_name'),
            'Useremail' => $this -> input -> post('u_email')
                );



        $this -> user_model -> insert_users_to_db($data); 


}
  $this->load->view("form");
        
    }
}

?>