<?php 
   class Session_controller extends CI_Controller {
   
      public function index() { 
         //loading session library 
         $this->load->library('session');
         
         //adding data to session 
         $this->session->set_userdata($data);

         echo $this->session->userdata('Email') ;
         
      } 
      
      public function unset_session_data() { 
         //loading session library
         $this->load->library('session');
         
         //removing session data 
         $this->session->unset_userdata($data); 

      } 
      
   } 
?>