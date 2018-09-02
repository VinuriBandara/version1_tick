<?php

Class insert_mod extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function store_users($fname,$lname,$email)
	{
		$sql="insert into new_user(first_name, last_name,email) values('$fname','$lname','$email')";

		$this -> db -> query($sql);

		
	}
}




?>