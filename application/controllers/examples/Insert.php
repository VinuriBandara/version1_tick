<?php

Class Insert extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this -> load -> database();

		$this -> load -> model('insert_mod');
	}


	public function insert_user()
	{
		$this -> load -> view('form_view');

		if($this -> input -> post('save'))
		{
			$fname=$this -> input -> post('first_name');
			$lname=$this -> input -> post('last_name');
			$email=$this -> input -> post('email');

			$this -> insert_mod -> store_users($fname,$lname,$email);

			echo "Done";
		}
	}
}






?>