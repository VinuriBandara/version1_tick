<?php

Class register_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function store_users($fname,$lname,$phone,$email,$address1,$address2,$address3,$date,$stautus)
	{
		$sql="insert into registration(FirstName,LastName,PhoneNo,Email,AddressLine1,AddressLine2,AddressLine3,DateExpected,Accepted) values('$fname','$lname','$phone','$email','$address1','$address2','$address3','$date',$status')";

		$this -> db -> query($sql);

		
	}
}




?>