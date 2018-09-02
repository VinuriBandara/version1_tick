<?php 
   Class User_model extends CI_Model { 
	
      public function __construct() { 
         parent::__construct(); 
         $this -> load -> database();
      } 

      public function user()
      {
      	echo "helloo";
      }

      public function get_all_users()
      {
      	$query=$this -> db -> get('user');
      	return $query -> result();
      }


      public function insert_users_to_db($data) 
      { 
      	return $this -> db -> insert('users', $data); 
  	  }

   } 
?> 