<?php

	class Test extends CI_Controller
	{
		public function index()
		{
			// echo "Hello world";
			$this -> load -> view('test');
		}

		public function hello()
		{
			$this -> load -> model('user_model');
			$this -> user_model -> user();

			$this -> load -> helper('url_helper');
		}
	}


?>