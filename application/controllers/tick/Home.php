<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
parent::__construct();

		$this-> load-> model('tick/tick_model');
		

// Load url helper
$this->load->helper('url');

 $this->load->library('session');
}


	public function index()
	{
		$this->load->view('tick/home');
	}


	function view_login()
	{
		$this->load->view('tick/login');

		if ($this -> input -> post('log'))   
		{

			$mail= $this -> input -> post('email');
			$pass= $this -> input -> post('password');
			$this -> login($mail,$pass);
		} 

		

	}


	public function login($mail,$pass)
		{
		//load session library
		$this->load->library('session');
 
		
 
		$data = $this->tick_model->login($mail, $pass);
 
		if($data){
			$this->session->set_userdata('user', $data);
			header("location:".base_url()."index.php/tick/home/");
			}
		else{
			header("location:".base_url()."index.php/tick/home/view_login");
			$error = $this->session->set_flashdata('error','Invalid login. User not found');


		} 
	}



	function view_appoint()
	{
		$this->load->view('tick/makeAppointment');

		if($this -> input -> post('finance_appointment'))
		{

	  		$data = array(
		  		'Email' => $this -> input -> post('email'),
		  		'Prefix' => $this -> input -> post('prefix'),
	            'FirstName' => $this-> input -> post('fname'),
	            'LastName' =>$this -> input -> post('lname'),
	            'Position_company' => $this -> input -> post('position'),
	            'Company_name' => $this -> input -> post('company'),
	            'Branch' => $this -> input -> post('branch'),
	            'PhoneNo' => $this -> input -> post('phone'),
	            'Purpose'=> $this -> input -> post('purpose'),
	            'Property_name' => $this -> input -> post('property_name'),
	            'AddressLine1' =>$this -> input -> post('address1'),
	            'AddressLine2' => $this -> input -> post('address2'),
	            'AddressLine3' => $this -> input -> post('address3')
	        );

	  $this -> tick_model -> make_appointment_finance($data);
      }

      if($this -> input -> post('other_appointment'))
		{

	  		$data = array(
		  		'Email' => $this -> input -> post('email'),
		  		'Prefix' => $this -> input -> post('prefix'),
	            'FirstName' => $this-> input -> post('fname'),
	            'LastName' =>$this -> input -> post('lname'),
	            'PhoneNo' => $this -> input -> post('phone'),
	            'Purpose'=> $this -> input -> post('purpose'),
	            'Property_name' => $this -> input -> post('property_name'),
	            'AddressLine1' =>$this -> input -> post('address1'),
	            'AddressLine2' => $this -> input -> post('address2'),
	            'AddressLine3' => $this -> input -> post('address3')
	        );

	  $this -> tick_model -> make_appointment_other($data);
      }

	}



	function register()
	{
		$this->load->view('tick/register');

		if($this -> input -> post('register'))
		{
		

		
	  $data = array(
            'FirstName' => $this-> input -> post('first_name'),
            'LastName' =>$this -> input -> post('last_name'),
            'PhoneNo' => $this -> input -> post('phone'),
            'Email' => $this -> input -> post('email'),
            'AddressLine1' =>$this -> input -> post('address1'),
            'AddressLine2' => $this -> input -> post('address2'),
            'AddressLine3' => $this -> input -> post('address3'),
            'DateExpected' => $this -> input -> post('date'),
            'Accepted' => "No"
        );


	    $this-> tick_model -> insert_user($data);

	    $this-> session -> set_userdata($data);

	    $username =$this-> session ->userdata('Email') ;


	}




      }



      function valuer()
      {
      	$this -> load -> view('tick/valuee');

      	
      }



      function valuer_accept()
      {

      	$result['user_list']=$this -> tick_model -> get_all_users();

      	$this -> load -> view('tick/view_users',$result);

	}


 	function do_request()
 	{
 		$email = $this -> input -> get('email');

 	

 		$this -> tick_model -> accept_user($email);


 		$this -> login_details($email);

 		
 	}
      	
     
 	function ignore_request()
 	{
 		$email = $this -> input -> get('email');

 		

 		$this -> tick_model -> delete_user($email);
 		
 	}
      	
    

    function login_details($email)
    {

    	$password = $this -> randomPassword(10,1,"lower_case,upper_case,special_symbols");
    	// echo "Password ".$password;


    	 $this -> tick_model -> store_login_details($email,md5($password));

    	 $this -> send_email($email,$password);

    	 $this -> valuer();

    }




  function randomPassword($length,$count, $characters) {
 

    $symbols = array();
    $passwords = '';
    $used_symbols = '';
    $pass = '';
 
// an array of different character types    
    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["special_symbols"] = '!?@#$';
 
    $characters = explode(",",$characters); // get characters types to be used for the passsword
    foreach ($characters as $key=>$value) {
        $used_symbols .= $symbols[$value]; // build a string with all characters
    }
    $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length); // get a random character from the string with all characters
            $pass .= $used_symbols[$n]; // add the character to the password string
        }
        $passwords = $pass;
    }
     
    return $passwords; // return the generated password
}


	 function send_email($email,$password)
	{

		require "phpmailer/PHPMailerAutoload.php";

		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPSecure = "ssl";
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->Username = 'vingi1996@gmail.com';
		$mail->Password = 'Vb960130';

		$mail->setFrom('vingi1996@gmail.com', 'TickValue');
		$mail->addAddress($email);
		$mail->Subject = 'Congratulations , Make your appointment now!!!';
		$mail->Body = 'Your login details are,username :'.$email.' password :'.$password.' You can login now and change your login details and more importantly make your appintment today';

		if ($mail->send())
		    echo "Mail sent";
		}	


  function appointments()
      {

      	$result['appointment_list_finance']=$this -> tick_model -> view_finance_appointment();

      	$result['appointment_list_other']=$this -> tick_model -> view_other_appointment();


      	$this -> load -> view('tick/viewAppointments',$result);


	}	

	function show_map()
	{
		$this -> load -> view('tick/dist');
	}
		

	function use_this()
	{
		$this -> load -> view('tick/whyTick');
	}
}





	