<?php

Class Show_mod extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function get_all_users()
	{
		$sql="select * from new_users";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}



}





?>