<?php

Class Show extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this -> load -> database();

		$this -> load -> model('show_mod');
	}


	public function view_data()
	{
		$result['user_list']=$this -> show_mod -> get_all_users();

		$this -> load -> view('Show',$result);

	}


 	public function delete_data()
 	{
 		$id = $this -> input -> get('id');

 		$this -> show_mod -> delete_user($id);
 		echo "Done";
 	}


 	public function update_data()
 	{
 		$id = $this -> input -> get('id');

 		$result['user']=$this -> show_mod -> get_the_users($id);

 		$this -> load -> view ('update_view',$result);

 		if($this->input->post('update'))
			{
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$email=$this->input->post('email');
			$this->show_mod->update_records($first_name,$last_name,$email,$id);
			
			}

	}
}
?>
