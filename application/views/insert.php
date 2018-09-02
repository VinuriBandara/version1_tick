<?php

Class Insert_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this -> load -> database();

		$this -> load -> model(insert_model);
	}


	
}






?>