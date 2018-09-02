<?php

Class Tick_model extends CI_Model
{
	public function __construct()
	{

		parent::__construct();
		$this -> load -> database();
	}

    public function insert_user($data){

	 $query = $this-> db ->insert('registration', $data);

	 if($query)
	 {

		echo "Done"; 
	}
	else
	{

		echo "Error!!!";
	}


}


public function make_appointment_finance($data){

		 $query = $this-> db ->insert('appointment_finance', $data);

		 if($query)
		 {

			echo "Done"; 
		}
		else
		{

			echo "Error!!!";
		}


	}



	public function get_all_users()
	{
		$sql="select * from registration";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}





	public function accept_user($email)
	{
		$sql="update registration set Accepted='Yes' where Email='". $email."'";
		$this -> db -> query($sql);
		
	}





	public function delete_user($email)
	{
		$sql="delete from registration where Email='". $email."'";
		$this -> db -> query($sql);
		
	}



public function make_appointment_other($data){

		 $query = $this-> db ->insert('appointment_other', $data);

		 if($query)
		 {

			echo "Done"; 
		}
		else
		{

			echo "Error!!!";
		}


	}


	public function store_login_details($email,$password)
	{
		$sql="insert into user_login(Email,Password) values ('$email','$password')";

		$this -> db -> query($sql);
	}


	public function login($mail, $pass){
			$query = $this->db->get_where('user_login', array('Email'=>$mail, 'Password'=>md5($pass)));
			return $query->row_array();
		}



	public function view_finance_appointment()
	{
		$sql="select * from appointment_finance";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}



	public function view_other_appointment()
	{
		$sql="select * from appointment_other";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}








	
}




?>