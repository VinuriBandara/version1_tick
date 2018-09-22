<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {

		public function __construct()
	{

		parent::__construct();
		$DB2 = $this->load->database('default', TRUE);
	}


Public function getEvents()
	{
		
	$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}



	Public function addEvent()
	{

	$sql = "INSERT INTO events (title,events.start,events.end,description, color) VALUES (?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color']));
		return ($this->db->affected_rows()!=1)?false:true;
	}



	Public function updateEvent()
	{

	$sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	Public function deleteEvent()
	{

	$sql = "DELETE FROM events WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}



	Public function dragUpdateEvent()
	{
			//$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}






}