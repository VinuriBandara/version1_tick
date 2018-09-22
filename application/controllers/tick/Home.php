<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() 
	{
	parent::__construct();


	$this->load->library('session');
	$this->load->library('Calendar');


	$this->load-> model('tick/tick_model');
	$this->load-> model('tick/calendar_model');
		
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


	function valuer_login()
	{
		$this->load->view('tick/login_valuer');

		if ($this -> input -> post('log'))   
		{

			$uname= $this -> input -> post('user');
			$pass= $this -> input -> post('password');
			$this -> login_valuer($uname,$pass);
		} 


	}


	public function login($mail,$pass)
		{
		//load session library
 
		$data_client= $this->tick_model->login($mail, $pass);
		$data_valuer = $this->tick_model->valuer_login($mail, $pass);
		$data_admin = $this->tick_model->admin_login($mail, $pass);
 
		if($data_client){

			$var =$data_client['Email'];
			
			$this-> session -> set_userdata('userEmail',$var);
		
			$username= $this-> session ->userdata('userEmail');
			 
			header("location:".base_url()."index.php/tick/home/?username=$username");

			}
		elseif ($data_valuer){
			if($data_valuer)
			{

			$var =$data_valuer['Email'];
			$this-> session -> set_userdata('userEmail',$var);
			$username= $this-> session ->userdata('userEmail');
			header("location:".base_url()."index.php/tick/home/valuer?username=$username");
			}

			}

		elseif($data_admin){
			
			if($data_admin)
			{

			$var =$data_admin['admin_email'];
			$this-> session -> set_userdata('userEmail',$var);
			$username= $this-> session ->userdata('userEmail');
			header("location:".base_url()."index.php/tick/home/admin?username=$username");
			}
			}
		else
			{	
			header("location:".base_url()."index.php/tick/home/view_login");
			$error = $this->session->set_flashdata('error','Invalid login. User not found');

			}
			

		} 



	public function logout()
	{

	$this->session->unset_userdata('Email');
	$this->session->sess_destroy();
	header("location:".base_url()."index.php/tick/home/");
	}



	function view_appoint()
	{

	$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		$this->load->view('tick/makeAppointment',$data);



	}




	function register()
	{

		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);
		
		$this->load->view('tick/register',$data);


		if($this -> input -> post('register_client'))
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



	}


	if($this -> input -> post('register_valuer'))
		{
		

		
	  	$data = array(
            'FirstName' => $this-> input -> post('first_name'),
            'LastName' =>$this -> input -> post('last_name'),
            'PhoneNo' => $this -> input -> post('phone'),
            'ValuerRef_No' => $this -> input -> post('ref_no'),
            'Email' => $this -> input -> post('email'),
            'AddressLine1' =>$this -> input -> post('address1'),
            'AddressLine2' => $this -> input -> post('address2'),
            'AddressLine3' => $this -> input -> post('address3'),
            'Accepted' => "No"
        );


	    $this-> tick_model -> insert_valuer($data);


	}
   }


      function valuer()
      {
      	$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

      	$this -> load -> view('tick/valuee',$data);

      	
      }



      function valuer_accept()
      {

      	$data['email'] =array(
			$username=$this-> session ->userdata('userEmail'),

		);


  //     	$result['user_list']=$this -> tick_model -> get_all_users();

  //     	$this -> load -> view('tick/view_users',array_merge($data,$result));

      	$this -> load -> view('tick/viewAppointments',$data);
	}



      function admin_accept()
      {

      	$data['email'] =array(
			$username=$this-> session ->userdata('userEmail'),

		);


      	$result['valuer_list']=$this -> tick_model -> get_all_valuers();

      	$this -> load -> view('tick/view_users',array_merge($data,$result));

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


 	 	function del_user()
 	{
 		$email = $this -> input -> get('email');

 		

 		$this -> tick_model -> delete_user($email);

 		header("location:".base_url()."index.php/tick/home/admin/");

 	
 		
 	}

 	function ignore_request_valuer()
 	{
 		$email = $this -> input -> get('email');

 		

 		$this -> tick_model -> delete_valuer($email);
 		header("location:".base_url()."index.php/tick/home/admin/");


 		
 	}
      	
    

    function login_details($email)
    {

    	$password = $this -> randomPassword(10,1,"lower_case,upper_case,special_symbols");
    	// echo "Password ".$password;


    	 $this -> tick_model -> store_login_details($email,md5($password));

    	 $this -> send_email($email,$password);

    	 $this -> admin();

    }




  function randomPassword($length,$count, $characters) 
  {
 

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
        $used_symbols .= $symbols[$value]; 
    }
    $symbols_length = strlen($used_symbols) - 1; 
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length); 
            $pass .= $used_symbols[$n]; 
        }
        $passwords = $pass;
    }
     
    return $passwords; 
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
		$mail->Body = 'Your login details are,username :'.$email.' password :'.$password.' You can login now and change your login details and more importantly make your appointment today';

		$mail->send();
		   
		}	


  function appointments()
      {

      	$data['email'] =array(
			$username=$this-> session ->userdata('userEmail'),

		);

      	$result['appointment_list_finance']=$this -> tick_model -> view_finance_appointment();

      	$result['appointment_list_other']=$this -> tick_model -> view_other_appointment();


      	$this -> load -> view('tick/view_all_appointments',array_merge($data,$result));



	}	

	function show_map()
	{
		$this -> load -> view('tick/map');
	}
	

	function show_ratings()
	{

		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);
	
	    

	    $result['comments'] = $this-> tick_model -> get_comment();

	    	$this -> load -> view('tick/profile_ratings',array_merge($data,$result));


		if($this -> input -> post('get_comment'))
		{
		

		
	  	$comment_data = array(
            'username' => $this-> session ->userdata('userEmail'),
            'comment' =>$this -> input -> post('text_comment'),
            'date' => date("Y-m-d"),
            'time' =>date("h:i:sa")
         
        );

	  	$this-> tick_model -> insert_comment($comment_data);
	  	header("location:".base_url()."index.php/tick/home/show_ratings");


	}


	}
	


	function profile()
	{

		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);


		$this -> load -> view('tick/profile',$data);
	}		

	function use_this()
	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);


		$this -> load -> view('tick/whyTick',$data);
	}



	function admin()
	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		
		$result['user_list']=$this -> tick_model -> get_all_users();
		$reg_count['users']=array($this -> reg_users() );
		$tot_appoint['appointments']=array($this -> total_appointments() );
		$tot_valuers['valuers']=array($this -> total_valuers() );
		$tot_projects['projects']=array($this -> total_projects() );

		$appoint['client_requests']=$this -> tick_model -> get_all_users();
		$appoint['valuer_requests']=$this -> tick_model -> get_all_valuers();

		$appointment['appointment_list_finance']=$this -> tick_model -> view_finance_appointment();
		$appointment['appointment_list_other']=$this -> tick_model -> view_other_appointment();
		$this -> load -> view('tick/admin/index',array_merge($data,$result,$reg_count,$tot_appoint,$tot_valuers,$tot_projects,$appoint,$appointment));
	}


	Public function view_financial_appoint()

	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		$this->load->view('tick/makeAppointment1',$data);


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


	}


Public function view_client_appoint()

	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		$this->load->view('tick/makeAppointment2',$data);

	

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




	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->tick_model->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	Public function addEvent()
	{
		$result=$this->tick_model->addEvent();
		echo $result;
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->tick_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->tick_model->deleteEvent();
		echo $result;
	}
	Public function dragUpdateEvent()
	{	

		$result=$this->tick_model->dragUpdateEvent();
		echo $result;
	}



	public function reg_users()
	{
		$no_of_users=$this -> tick_model -> count_registered();
		return $no_of_users;
	}

	public function total_appointments()
	{
		$no_of_appoints=$this -> tick_model -> count_appointments();
		return $no_of_appoints;
	}



	public function total_valuers()
	{
		$no_of_valuers=$this -> tick_model -> count_valuers();
		return $no_of_valuers;
	}




	public function total_projects()
	{
		$no_of_projects=$this -> tick_model -> count_projects();
		return $no_of_projects;
	}


	public function user_mgt()
	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		$appoint['client_requests']=$this -> tick_model -> get_all_users();
		$appoint['valuer_requests']=$this -> tick_model -> get_all_valuers();

		$this -> load -> view('tick/admin/register',array_merge($data,$appoint));
	}


	public function user_del()
	{
		$data['email'] =array(
			$username=$this-> session ->userdata('userEmail')
		);

		$appoint['client_requests']=$this -> tick_model -> get_users();
		$appoint['valuer_requests']=$this -> tick_model -> get_valuers();

		$this -> load -> view('tick/admin/delete',array_merge($data,$appoint));


	}








}





	