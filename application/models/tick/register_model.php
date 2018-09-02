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
}




?>