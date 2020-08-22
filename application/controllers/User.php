<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    //  function __construct() {
    //     parent::__construct();


    //     // $this->tree_change();
    // }


      public function __construct()
  {
    parent::__construct();
// $user= $this->session->userdata('username');
    if (!$this->session->userdata('user_logged_in') ) {
       

  redirect('login','refresh');
          
  }
}


// 	  public function __construct()
//   {
// 	// parent::__construct();
// // $user= $this->session->userdata('username');
//   	$session = session();
//     if (!$this->$session->get('isLoggedIn') ) {
       

//   redirect('login','refresh');
          
//   }
// }







	public function index()
	{
			$data['title'] = "Login";
			 $username = $_SESSION['username'];
            $data['user_info'] = $this->Estate_model->user_info($username);
			$this->load->view('pages/header', $data);
		    $this->load->view('user/dashboard', $data);
		    $this->load->view('pages/footer', $data);
	}



	public function profile()
	{
		$data['title'] = "Profile";

			 $username = $_SESSION['username'];
            $data['user_info'] = $this->Estate_model->user_info($username);
			$this->load->view('pages/header', $data);
		    $this->load->view('user/profile', $data);
		    $this->load->view('pages/footer', $data);
	}




	public function save_property()
	{
			 $data['title'] = "Saved Property";
			 $data['estate'] = $this->Estate_model->property_list();
			$this->load->view('pages/header', $data);
		    $this->load->view('user/property', $data);
		    $this->load->view('pages/footer', $data);
	}


	public function setup()
	{

		$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('company_Address', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_email', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_agent', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_phone', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_number', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_lga', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_city', 'Username', 'trim|required');
		$this->form_validation->set_rules('company_state', 'Username', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Setup Business";
			$this->load->view('pages/header', $data);
		    $this->load->view('user/setup', $data);
		    $this->load->view('pages/footer', $data);
	
		} else {

			$username = $_SESSION['username'];
			   $agent = array(
          'company_name' => $this->input->post('company_name'),
          'company_Address' => $this->input->post('company_Address'),
          'company_email' => $this->input->post('company_email'),
          'company_agent' => $this->input->post('company_agent'),
          'company_phone' => $this->input->post('company_phone'),
          'company_number' => $this->input->post('company_number'),
          'company_lga' => $this->input->post('company_lga'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'username' => $username
          // 'username' => $this->input->post('username'),
          );
		$this->db->insert('agent', $agent);
		 $this->session->set_flashdata("product_claim","Product Succesfully Claimed");
			redirect('profile','refresh');
		}
	}









	public function password()
	{
		$data['title'] = "Change Password";
			$this->load->view('pages/header', $data);
		    $this->load->view('user/password', $data);
		    $this->load->view('pages/footer', $data);
	}


	public function save($slug)
{
	
	if (empty($slug)|| $this->Estate_model->property_slug($slug)==false) {
            redirect('Page/error','refresh');
          }else{


          	if ($this->Estate_model->save_already($slug)==true) {
          			
          			echo "<script>alert('Apartment Already saved');</script>";
          			redirect('view/'.$slug,'refresh');
          	}else{
          		$slug_id = $this->Estate_model->blog_post($slug)['id'];
          		$title = $this->Estate_model->blog_post($slug)['title'];
          		$username = $_SESSION['username'];
          $data = array(
              'username' => $username,
              'slug' =>$slug,
              'slug_id' => $slug_id,
              'title' =>$title
            );
            $this->db->insert('saved_apartment', $data);
            echo "<script>alert('Apartment Succesfully Saved');</script>";
            redirect('view/'.$slug,'refresh');
          	}
          }

}


} ?>