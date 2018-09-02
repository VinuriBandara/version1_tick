<?php

Class Show_mod extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function get_all_users()
	{
		$sql="select * from new_user";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}


	public function delete_user($id)
	{
		$sql="delete from new_user where id='". $id."'";
		$this -> db -> query($sql);
		
	}



	public function get_the_users($id)
	{
		$sql="select * from new_user where id='".$id."'";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}

	public function update_records($first_name,$last_name,$email,$id)
	{
		
		$sql="update new_user set first_name='$first_name',last_name='$last_name',email='$email' where id='$id'";
		$this -> db -> query($sql);



	}


}





?>