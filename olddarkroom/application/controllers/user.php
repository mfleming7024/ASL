<?php

class User extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->authenticate();
       // $this->require_login();
        //  $this->load->driver('session');
        //if(!$this->session->userdata('username')) header('location: /login');
    }


    function login(){

        $data['main'] = 'login';
        $this->load->view('includes/template', $data);
       // $this->load->view('login');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('http://localhost:8888/');
    }

    function authenticate()
    {
        if (!$this->session->userdata('is_logged_in'))
        {
            redirect('home/require_login');
        }
    }

}
