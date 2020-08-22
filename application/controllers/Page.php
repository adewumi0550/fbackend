<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

     function __construct() {
        parent::__construct();


        // $this->tree_change();
    }



            public function index($page = 'index')
        {
            if ( ! is_file(APPPATH.'/views/pages/'.$page.'.php'))
            {
                // Whoops, we don't have a page for that!
                // throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
                show_404();
            }

            $data['title'] = 'Apartments at your finger tips'; 
            $data['estate'] = $this->Estate_model->apartment();
            $this->load->view('pages/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('pages/footer', $data);
        }


        public function login()
        {
            if ($this->session->userdata('user_logged_in') ) {
                 redirect('dashboard','refresh');

          
                 }
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
                     $this->form_validation->set_rules('password', 'Password', 'trim|required');

           
          if ($this->form_validation->run() == FALSE) {
             
            $data['title'] = "Login";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/login', $data);
            $this->load->view('pages/footer', $data);

          } else {
            
             $username =  strtolower($this->input->post('username'));
                                 $password =  strtolower($this->input->post('password'));
                                 $pass = md5($password);

                          $user_id = $this->Estate_model->user_login($username,$pass);

                          if ($user_id) {
                            $user_data =array(
                              'user_id' => $user_id,
                              'username' => $username,
                              'password' => $password,
                              'user_logged_in' => TRUE
                            );
                            $this->session->set_userdata($user_data);
                           $data['title'] = 'Dashboard';
                          // echo  '<script>alert("Welcome to gidanhaya Dashboard")</script>';
                            redirect('dashboard','refresh',$data);

                          }else{

                    $this->session->set_flashdata("login_failed","Invalid Username or Password");
                     $data['title'] = 'Login Panel'; // Capitalize the first letter
                        // $data['info'] = $this->Estate_model->home_info();
                    $this->load->view('pages/header', $data);
                    $this->load->view('pages/login', $data);
                    $this->load->view('pages/footer', $data);
                            }
          }


        }


       
        public function signup()
        {

          if ($this->session->userdata('user_logged_in') ) {
                 redirect('dashboard','refresh');

          
                 }
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|callback_check_username_exists');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
             $this->form_validation->set_rules('name', 'Full Name', 'trim|required');

            
          if ($this->form_validation->run() == FALSE) {
              $data['title'] = "signup";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/signup', $data);
            $this->load->view('pages/footer', $data);
          } else {
            

            $name = $this->input->post('name');
             $email = $this->input->post('email');
             // $this->register_email($name, $email);
            
            $data = array(
              'email' => $this->input->post('email'),
              'password' =>md5($this->input->post('password')),
              'name' =>$this->input->post('name'),
              'client' =>$this->input->post('client')
            );
            $this->db->insert('users', $data);

           
           
             // $this->session->set_flashdata("login_success","Account succesfully created");
            echo "<script>alert('Account succesfully created proceed to login your Account');</script>";

            redirect('/login','refresh');
          }
        

            
        }



        public function check_username_exists($email)
                  {


                       $this->form_validation->set_message('check_username_exists', 'The Email Address Already registered, proceed to login your Account');
                    if ($this->Estate_model->check_username_exists($email)) {
                            return true;
                    }else{
                            return false;
                    }
                  }



        public function about()
        {

            $data['title'] = "about";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/about', $data);
            $this->load->view('pages/footer', $data);
        }




        public function sale()
        {
           
            $data['title'] = "For Sales Apartment";
             $data['estate'] = $this->Estate_model->for_sale();
            $this->load->view('pages/header', $data);
            $this->load->view('pages/sale', $data);
            $this->load->view('pages/footer', $data);
        }




        public function rent()
        {
            
            $data['title'] = "For Rent Apartment";
             $data['estate'] = $this->Estate_model->for_rent();
            $this->load->view('pages/header', $data);
            $this->load->view('pages/rent', $data);
            $this->load->view('pages/footer', $data);
        }

          public function search()
        {
            
            $this->form_validation->set_rules('property_status', '', 'trim');
            if ($this->form_validation->run() == TRUE) {
            
            if ($this->input->post('property_status')=="---Any---") {
              $property_status ='';
            }else{
              $property_status = $this->input->post('property_status');
            }

           if ($this->input->post('property_type')=="---Any---") {
              $property_type ='';
            }else{
              $property_type = $this->input->post('property_type');
            }


            if ($this->input->post('commercial')=="---Any---") {
              $commercial ='';
            }else{
              $commercial = $this->input->post('commercial');
            }


            if ($this->input->post('location')=="---Any---") {
              $location ='';
            }else{
              $location = $this->input->post('location');
            }

            if ($this->input->post('minimum')=="---Any---") {
              $minimum ='';
            }else{
              $minimum = $this->input->post('minimum');
            }


            if ($this->input->post('maximum')=="---Any---") {
              $maximum ='';
            }else{
              $maximum = $this->input->post('maximum');
            }


            // echo $property_status;
            // echo $property_type;
            // echo $commercial;
            // echo $location;
            // echo $minimum;
            // echo $maximum;

           

               // $this->input->post('property_type');
               //  $this->input->post('commercial');
               //   $this->input->post('location');
               //    $this->input->post('minimum');
               //     $this->input->post('maximum');
  if (empty($property_status)  && empty($property_type) && empty($commercial) && empty($location) && empty($minimum) && empty($maximum)) {
             $data['title'] = "For Rent Apartment";
             $data['estate'] = $this->Estate_model->apartment();
            $this->load->view('pages/header', $data);
            $this->load->view('pages/search', $data);
            $this->load->view('pages/footer', $data);
           }else{


             $data['title'] = "For Rent Apartment";
             $data['estate'] = $this->Estate_model->search($property_status, $property_type, $commercial, $location, $minimum, $maximum);
            $this->load->view('pages/header', $data);
            $this->load->view('pages/search', $data);
            $this->load->view('pages/footer', $data);
           }
           
                    
             }else{

               $data['title'] = "For Rent Apartment";
             $data['estate'] = $this->Estate_model->for_rent();
            $this->load->view('pages/header', $data);
            $this->load->view('pages/search', $data);
            $this->load->view('pages/footer', $data);
             }        
 
        }



        //  public function sale()
        // {

        //  $data['title'] = "Sale Product";
            
        //  $this->load->view('pages/header', $data);
        //     $this->load->view('pages/sale', $data);
        //     $this->load->view('pages/footer', $data);
        // }


        public function contact()
        {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Mobile Number', 'trim');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');
             if ($this->form_validation->run() == FALSE) {
                  $data['title'] = "contact";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('pages/footer', $data);
             } else {
                    $data= array(
                'name' => $this->input->post('name'),
                 'email' => $this->input->post('email'),
                  'phone' => $this->input->post('phone'),
                  'subject' => $this->input->post('subject'),
                  'message' => $this->input->post('message')
            );

           
            $this->db->insert('contact', $data);
              $name = $this->input->post('name');
            $this->session->set_flashdata('success_contact_save', 'Thank You,<strong>'.$name.'</strong> for your Message.');
       
             $data['title'] = "contact";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('pages/footer', $data);
             }
        

            
        }





              // Check Email System from dashboard
            function register_email($name, $email)
  {




             //SMTP & mail configuration
          $config = array(
              'protocol'  => 'smtp',
              'smtp_host' => 'ssl://mail.gidanhaya.com',
              'smtp_port' => 465,
              'smtp_user' => 'service@gidanhaya.com',
              'smtp_pass' => 'Excelluck0550.',
              'mailtype'  => 'html',
              'charset'   => 'utf-8'
          );
          $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");

      $this->email->from('service@gidanhaya.com', 'Gidanhaya Real Estate');
      $this->email->to($email);
      $this->email->subject('Welcome to Gidanhaya Real Estate!');
      $msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml"><head>
  <title>Gidanhaya Real Estate</title>
  <style type="text/css">
       text-align: justify;
      }
      .name {
        color: #FE6605;
        font-weight: bold;
      }
      body .footer {
        color: #FE6605;
        font-size:12px;
        text-align:center;
        margin-top: 10px;
        background: 
      }
  </style>
</head>
<body>
  <table width="70%" border="0" align="center" style="border: 2px solid #FE6605;" cellpadding="0" cellspacing="0">
      
        <tr>
          <td width="6%" bgcolor="#3F3F3F">&nbsp;</td>
          <td width="34%">&nbsp;</td>
          <td width="53%">&nbsp;</td>
          <td width="7%" bgcolor="#3F3F3F">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#3F3F3F">&nbsp;</td>
          <td colspan="2" rowspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td><p style="font-weight: bold;">Dear <span class="name">'.$name.'</span>,</p>
               
               <p>Congratulations and welcome to our Plaform, enjoy and share your experience of our platform.
               </p>
                <p class="p"><u><b>Account Details</b></u></p>
                <p class="p">Username: '.$email.'</p>
                <p class="p">Password: <small> choosen password</small></p>



               
                
                </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p style="font-weight: bold;"><span class="name">Disclaimer</span>:</p>
                <p style="font-style: italic;">This email was sent to '.$email.' because it was used to register on Gidan Haya.com. Kindly disregard if you have not registered on the website. Thanks</p></td>
              <td>&nbsp;</td>
            </tr>
          </table></td> 
          <td bgcolor="#3F3F3F">&nbsp;</td>
        </tr>

                <tr>
          <td bgcolor="#3F3F3F">&nbsp;</td>
          <td bgcolor="#3F3F3F">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#3F3F3F">&nbsp;</td>
          <td bgcolor="#3F3F3F">&nbsp;</td>
        </tr>
        <tr  style="font-size: 14px;">
          <td height="22" bgcolor="#3F3F3F" >&nbsp;</td>
          <td colspan="2" align="center" bgcolor="#3f3f3f"><span class="footer">Copyright &copy; 2019. gidanhaya.com </span></td>
          <td bgcolor="#3F3F3F">&nbsp;</td>
        </tr>
      </table>
</body>
</html>';
      $this->email->message($msg);
       $this->email->set_mailtype("html");
      $this->email->send();
  }



        public function faqs()
        {

            $data['title'] = "Frequently Asked Questions";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/faq', $data);
            $this->load->view('pages/footer', $data);
        }

        public function request()
        {

            $data['title'] = "request";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/request', $data);
            $this->load->view('pages/footer', $data);
        }



        public function privacy()
        {

            $data['title'] = "privacy";
            $this->load->view('pages/header', $data);
            $this->load->view('pages/privacy', $data);
            $this->load->view('pages/footer', $data);
        }



        public function view($slug = NULL)
        {
            if (empty($slug)|| $this->Estate_model->blog_post($slug)==false) {
            redirect('Page/error','refresh');
          }

                     $data['news'] = $this->Estate_model->blog_post($slug);
                     $data['title'] = ucfirst($data['news']['status']).' :: '.$data['news']['title'];

                    $this->load->view('pages/header', $data);
                    $this->load->view('pages/details', $data);
                    $this->load->view('pages/footer', $data);
        }





            public function Logout()
            {

             $this->session->unset_userdata('user_logged_in');
                  $this->session->unset_userdata('user_id');
                  $this->session->unset_userdata('username');
                  $this->session->unset_userdata('password');
                  $this->session->set_flashdata("logout","You have succesfully log out");
                
                        redirect('login','refresh');
            }

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */ ?>    
