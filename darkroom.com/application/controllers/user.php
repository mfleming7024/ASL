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
       // echo $id;
        //$id = $this->input->post('my_id');

        if($this->input->post('edit')){
            if($this->input->post('id')){
                $this->update_model->update_users();
            }else{
                $this->update_model->entry_insert();
            }
        }

        $data['main'] = 'update_user';
        $data['id'] = $id;

        //$data = $id;

        $this->load->view('/includes/template',$data);

    }

    function update_user($id = 0){
      //  echo $id;
        $this->load->model('update_model');



        $data = $this->update_model->update_users();

        if((int)$id > 0){
            $query = $this->update_model->get($id);
            $data['id']['value'] = $query['id'];
            $data['lastname']['value'] = $query['lastname'];
            $data['firstname']['value'] = $query['firstname'];
            $data['username']['value'] = $query['username'];
            $data['password']['value'] = $query['password'];
            $data['notes']['value'] = $query['notes'];
        }
        $this->login();

    }
    function album(){
        $data['main'] = 'album';
        $this->load->view('includes/template', $data);
    }
}
