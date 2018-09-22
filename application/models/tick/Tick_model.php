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

		// echo "Done"; 
	}
	else
	{

		// echo "Error!!!";
	}


}

    public function insert_valuer($data){

	 $query = $this-> db ->insert('valuer_registration', $data);

	 if($query)
	 {

		// echo "Done"; 
	}
	else
	{

		// echo "Error!!!";
	}


	}

	
	public function make_appointment_finance($data)
	{

		 $query = $this-> db ->insert('appointment_finance', $data);

		 if($query)
		 {

			// echo "Done"; 
		}
		else
		{

			// echo "Error!!!";
		}


	}



	public function get_all_users()
	{
		$sql="select * from registration where Accepted='No'";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}


	public function get_users()
	{
		$sql="select * from registration where Accepted='Yes'";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}




	public function get_all_valuers()
	{
		$sql="select * from valuer_registration where Accepted='No'";

		$query=$this -> db -> query($sql);

		return $query -> result();


	}


	public function get_valuers()
	{
		$sql="select * from valuer_registration where Accepted='Yes'";

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

	public function delete_valuer($email)
	{
		$sql="delete from valuer_registration where Email='". $email."'";
		$this -> db -> query($sql);
		
	}



public function make_appointment_other($data){

		 $query = $this-> db ->insert('appointment_other', $data);

		 if($query)
		 {

			// echo "Done"; 
		}
		else
		{

			// echo "Error!!!";
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




	public function valuer_login($mail, $pass){
			$query = $this->db->get_where('valuer_login', array('Email'=>$mail, 'Password'=>$pass));
			return $query->row_array();
		}



	public function admin_login($mail, $pass){
			$query = $this->db->get_where('admin', array('admin_email'=>$mail, 'admin_password'=>$pass));
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

	

	Public function getEvents()
	{
		
	$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}

/*Create new events */

	Public function addEvent()
	{

	$sql = "INSERT INTO events (title,events.start,events.end,description, color) VALUES (?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function updateEvent()
	{

	$sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	/*Delete event */

	Public function deleteEvent()
	{

	$sql = "DELETE FROM events WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			//$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}



	public function count_registered()
	{
		$table_row_count = $this->db->count_all('registration');
		if($table_row_count > 0){
    			return $table_row_count;
			}
	}


	public function count_appointments()
	{
		$table_finance_count = $this->db->count_all('appointment_finance');
		$table_other_count = $this->db->count_all('appointment_other');
		$total_count =$table_finance_count + $table_other_count;
		if($total_count > 0){
    			return $total_count;
			}
	}



	public function count_valuers()
	{
		$valuer_count = $this->db->count_all('valuer_login');
		if($valuer_count > 0){
    			return $valuer_count;
			}
	}


	public function count_projects()
	{
		$project_count = $this->db->count_all('start_appointment');
		if($project_count >=0){
    			return $project_count;
			}
	}

	public function insert_comment($data)
	{
		 $query = $this-> db ->insert('comment', $data);

	}

	public function get_comment()
	{
		$sql="select * from comment";

		$query=$this -> db -> query($sql);

		return $query -> result();
	}


	public function get_username($abc)
	{
		$this->db->order_by('date asc, time asc'); 
		$query = $this->db->get_where('registration', array('Email'=>$abc));

		return $query -> result();
	}






	
}




?>