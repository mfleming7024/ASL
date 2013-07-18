<?php

class Home extends CI_Controller{

    function __construct(){

        parent::__construct();

    }


    function index($msg = ''){

        $data['main'] = 'home';
        $data['msg'] = $msg;
        $this->load->view('includes/template', $data);

    }

    public function process($id = 0){
        // Load the model
        $this->load->model('admin_model');
        // Validate the user can login
        $result = $this->admin_model->validate();
        //$this->admin_model->usertype($id);
        // Now we verify the result
        if(!$result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            $this->load->model('admin_model');
            $type = $this->admin_model->usertype($id);
            $uid = $this->session->userdata('userType');
            //echo $uid;
            if($uid == 1){
                redirect('user/admin');
            }elseif($uid == 2){
                redirect('user/user_album');
            }

        }
    }

    public function require_login(){
        $data['main'] = 'require_login';
        $this->load->view('includes/template', $data);
    }

}
