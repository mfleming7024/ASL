<?php

class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->authenticate();
        $this->load->helper(array('form', 'url'));
    }

    function login(){

        $data['main'] = 'login';
        $this->load->view('includes/template', $data);
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

        $this->load->model('update_model');

        $this->update_model->update_users();

        $this->login();

    }
    function album($id){

        $this->load->model('create_album_model');

        $result = $this->create_album_model->get($id);
        $query2 = $this->create_album_model->get2();
        $data['id'] = $this->uri->segment(3);
        $data['main'] = 'album';
        $data['result'] = $result;
        $data['query2'] = $query2;
        $this->load->view('includes/template', $data);
    }

    function create_album($id = 0){

        $this->load->model('create_album_model');

        $result = $this->create_album_model->get($id);
        $query2 = $this->create_album_model->get2();
        $data['id'] = $this->uri->segment(3);
        $data['main'] = 'album';
        $data['result'] = $result;
        $data['query2'] = $query2;
        $this->load->view('includes/template', $data);

        }

    function photos(){

        $this->load->library('upload');
        $data['main'] = 'photos';
        $data['error'] = $this->upload->display_errors();
        $this->load->view('includes/template', $data);
    }

    function uploads()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            $data = array('error' => $this->upload->display_errors());

            //$this->load->view('upload_form', $error);
            $data['main'] = 'photos';
            $this->load->view('includes/template', $data);
            echo 'error';
        }
        else
        {
            $this->load->model('upload_model');

            $data = $this->upload->data();
            $this->upload_model->insert_file($data['file_name']);
            $data['error'] = $this->upload->display_errors();
            $data['main'] = 'photos';
            $this->load->view('includes/template', $data);
            //echo 'success';
        }
    }


}
