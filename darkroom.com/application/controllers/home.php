<?php

class Home extends CI_Controller{

    function __construct(){

        parent::__construct();

    }


    function index($msg = NULL){

        $data['main'] = 'home';
        $this->load->view('includes/template', $data);

    }

    public function process($id = 0){
        // Load the model
        $this->load->model('admin_model');
        // Validate the user can login
        $result = $this->admin_model->validate();
        $this->admin_model->usertype($id);
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            $this->load->model('admin_model');

            $this->admin_model->usertype($id);
            if($id == 1){
                $this->load->model('admin_model');

                $this->admin_model->usertype($id);
                redirect('user/admin');
            }elseif($id == 2){
                $this->load->model('admin_model');

                $this->admin_model->usertype($id);
                redirect('user/user_album');
            }
//            $this->load->model('admin_model');
//
//            $this->admin_model->usertype($id);
//            // If user did validate,
//            // Send them to members area

        }
    }

    public function require_login(){
        $data['main'] = 'require_login';
        $this->load->view('includes/template', $data);
    }

}
