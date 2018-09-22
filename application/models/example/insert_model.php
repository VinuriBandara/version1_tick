<?php
class Insert_model extends CI_Model{
function __construct() {
parent::__construct();
      $this -> load -> database();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('students', $data);
}
}
?>