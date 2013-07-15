<?php

class User extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->authenticate();
    }

    function login(){

        $data['main'] = 'login';
        //$data['main'] = 'album';
        $this->load->view('includes/template', $data);
       // $this->load->view('login');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('http://darkroom.com/');
    }

    function authenticate()
    {
        if (!$this->session->userdata('is_logged_in'))
        {
            redirect('home/require_login');
        }
    }

    function add_user(){
        $data['main'] = 'add_user';
        $this->load->view('includes/template', $data);
    }

    function admin_albums(){
        $data['main'] = 'admin_album';
        $this->load->view('includes/template', $data);
    }

    function perform_register(){
        $this->load->library('form_validation');

        //fieldname , errormessage, validation rules
        $this->form_validation->set_rules('lastname','Last name', 'trim|required');

        if($this->form_validation->run() == FALSE)
        {
            $this->login();
        }else{
            $this->load->model('add_user_model');
            if($query = $this->add_user_model->add_user()){
                $this->login();
            }else{
                $data['main'] = 'add_user';
                $this->load->view('includes/template', $data);
            };
        }
    }
    function delete($id){
        $this->load->model('delete_model');

        if((int)$id > 0){
            $this->delete_model->delete($id);
        }

        $this->login();
    }

    function update($id){
        $this->load->model('update_model');

        $data['main'] = 'update_user';
        $data['id'] = $id;

        $this->load->view('/includes/template',$data);

    }

    function update_user(){
      //  echo $id;
        $this->load->model('update_model');

        $this->update_model->update_users();

        $this->login();

    }
    function album($id){

        $this->load->model('create_album_model');

        //$this->create_album_model->add_album();

//        $Lol = $this->create_album_model->get();
//        var_dump($Lol);
        $data['main'] = 'album';
        $data['id'] = $id;
        $this->load->view('includes/template', $data);
    }

    function create_album($id = 0){

        $this->load->model('create_album_model');
        $lol =$this->create_album_model->add_album();
        //var_dump($lol);
        $data['main'] = 'album';
        $this->load->view('includes/template', $data);

        }

}
