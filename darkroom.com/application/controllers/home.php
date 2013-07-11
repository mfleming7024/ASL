<?php

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
      //  $this->load->driver('session');
        //  if(!$this->session->userdata('username')) header('location: user/login');
    }


    function index($msg = NULL){

        $data['main'] = 'home';
        $this->load->view('includes/template', $data);

    }

    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate,
            // Send them to members area
            redirect('user/login');
        }
    }

    public function require_login(){
        $data['main'] = 'require_login';
        $this->load->view('includes/template', $data);
    }

//class Home extends CI_Controller {
////    public function __construct(){
////        parent::__construct();
////        // $this->load-library('session');
////    }
//    public function view($home = 'home'){
//        if ( ! file_exists('../application/views/home/'.$home.'.php'))
//        {
//            // Whoops, we don't have a page for that!
//            show_404();
//        }
//        $data['title'] = ucfirst($home); // Capitalize the first letter
//
//        $this->load->view('templates/header', $data);
//        $this->load->view('home/'.$home, $data);
//        $this->load->view('templates/footer', $data);
//    }
//
//    function login(){
//        $this->load->model('user_model');
//        $query = $this->user_model->validate();
//
//        //if the users credentials validated
//        if($query){
//            $data = array(
//                'username' => $this->input->post('username'),
//                'is_logged_in' => true
//            );
//
//            $this->session->set_userdata($data);
//            redirect('user/second');
//        }else{
//            $this->view();
//        }
//    }
//
//    function validate_credentials(){
//
//
//    }
}
