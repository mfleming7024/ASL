<?php

class Home extends CI_Controller{

    function __construct(){

        parent::__construct();

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

}
