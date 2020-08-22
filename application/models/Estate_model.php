<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estate_model extends CI_Model {

	  public function __construct()
        {
                $this->load->database();
        }



        public function property_list()
        {

          $username = $_SESSION['username'];
            $query = $this->db->query("SELECT * FROM saved_apartment where username='$username' ");
            return $query->result_array();
        }



         public function blog_post($slug)
        {
         $query = $this->db->query("SELECT * FROM apartment where  slug= '$slug'");
                         return $query->row_array(); 
        }


        public function search($property_status, $property_type, $commercial, $location, $minimum, $maximum)
        {
         $query = $this->db->query("SELECT * FROM `apartment` WHERE status='$property_status' OR type='$property_type' OR state='$location' OR amount<='$minimum' AND amount>='$maximum'");

            return $query->result_array();

        }

        public function save_already($slug)
        {
            $username = $_SESSION['username'];
            $query = $this->db->query("SELECT * FROM saved_apartment where  slug= '$slug' and username='$username' ");
                         return $query->row_array(); 
        }

        public function apartment()
      {
                 $query = $this->db->query("SELECT * FROM apartment");
    		  return $query->result_array();
      }


        public function check_username_exists($email)
        {
            $this->db->where('email', $email);
          $query = $this->db->get('users');
          if ($query->num_rows()>0) {
            return false;
          }else{
            return true;
          }
        }

         public function property_slug($slug)
        {
         $query = $this->db->query("SELECT * FROM apartment where  slug= '$slug'");
                         return $query->row_array(); 
        }



      public function for_sale()
      {
      	   $query = $this->db->query("SELECT * FROM apartment WHERE status='For Sale' ");
    		  return $query->result_array();
      }

      public function for_rent()
      {
      	 $query = $this->db->query("SELECT * FROM apartment WHERE status='For Rent' ");
    		  return $query->result_array();
      }


      public function user_login($username,$pass)
      {
          $this->db->select('*');
       $this->db->where('email', $username);
        $this->db->where('password', $pass);
        $result = $this->db->get('users');
        if ($result->num_rows()==1) {
          return $result->row(0)->id;
        }else{

          return false;
        }
      }


      public function user_info($username)
        {
                  $query = $this->db->query("SELECT * FROM users where email= '$username'");
                         return $query->row_array();  
        }

	

}

/* End of file Estate_model.php */
/* Location: ./application/Models/Estate_model.php */ ?>