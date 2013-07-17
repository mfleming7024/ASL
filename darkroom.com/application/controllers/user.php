<?php

class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->authenticate();
        $this->load->helper(array('form', 'url'));
    }

    function admin($id = ''){
        $this->load->model('admin_model');
       $query = $this->admin_model->get();

        $this->load->model('admin_model');
        $type = $this->admin_model->usertype($id);
        $uid = $this->session->userdata('userType');
        //echo $uid;
        if($uid == 1){
            $data['query'] = $query;
            $data['main'] = 'admin';
            $this->load->view('includes/template', $data);
        }elseif($uid == 2){
            redirect('user/user_album');
        }



    }
    function users(){
        $this->load->model('admin_model');
        $query = $this->admin_model->get();
        $Lol = $this->session->all_userdata();

        $uid = $this->session->userdata('userId');

        $data['uid'] = $uid;
        $data['query'] = $query;
        $data['main'] = 'user_album';
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

//    function admin_albums(){
//        $data['main'] = 'admin_album';
//        $this->load->view('includes/template', $data);
//    }

    function perform_register(){
        $this->load->library('form_validation');

        //fieldname , errormessage, validation rules
        $this->form_validation->set_rules('lastname','Last name', 'trim|required');
        $this->form_validation->set_rules('firstname','First name', 'trim|required');
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('dateInput','Date', 'required');
        $this->form_validation->set_rules('notes','Notes', 'trim');

        if($this->form_validation->run() == FALSE)
        {
			$data['main'] = 'add_user';
            $this->load->view('includes/template', $data);
        }else{
            $this->load->model('add_user_model');
            if($query = $this->add_user_model->add_user()){
                $this->admin();
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

        $this->admin();
    }

    function update($id){
        $this->load->model('update_model');

        $result = $this->update_model->get($id);

        $data['main'] = 'update_user';
        $data['id'] = $id;
        $data['result'] = $result;
        $this->load->view('/includes/template',$data);

    }

    function update_user(){

        $this->load->model('update_model');

        $this->update_model->update_users();

        $this->admin();

    }
    function album($id){

        $this->load->model('create_album_model');

        $result = $this->create_album_model->get($id);
        $query2 = $this->create_album_model->get2();




        $this->load->model('admin_model');
        $type = $this->admin_model->usertype($id);
        $uid = $this->session->userdata('userType');
        //echo $uid;
        if($uid == 1){

            $data['id'] = $this->uri->segment(3);
            $data['main'] = 'album';
            $data['result'] = $result;
            $data['query2'] = $query2;
            $this->load->view('includes/template', $data);
        }elseif($uid == 2){
            redirect('user/user_album');
        }



    }

    function user_album($id = ''){

       // $this->load->model('admin_model');
        $this->load->model('create_album_model');
        $uid = $this->session->userdata('userId');
        $lastname = $this->session->userdata('lastname');
        $firstname = $this->session->userdata('firstname');

        $result = $this->create_album_model->get($id);
        $query2 = $this->create_album_model->get2();

        $data['firstname'] = $firstname;
        $data['lastname'] = $lastname;
        $data['id'] = $uid;
        $data['main'] = 'user_album';
        $data['result'] = $result;
        $data['query2'] = $query2;
        $this->load->view('includes/template', $data);
        //var_dump($result);
    }

    function create_album($id = 0){

        $this->load->model('create_album_model');

        $result = $this->create_album_model->get($id);
        $query2 = $this->create_album_model->get2();
        $this->create_album_model->add_album();

       // $data['main'] = 'album';

        $data['id'] = $this->uri->segment(3);
        $data['result'] = $result;
        $data['query2'] = $query2;
        $this->album($id);

        }

    function photos($id = ''){

        $this->load->library('upload');

        $this->load->model('upload_model');
        $result = $this->upload_model->get3($id);
        $query2 = $this->upload_model->get2();



        $this->load->model('admin_model');
        $type = $this->admin_model->usertype($id);
        $uid = $this->session->userdata('userType');
        //echo $uid;
        if($uid == 1){

            $data['main'] = 'photos';
            $data['id'] = $this->uri->segment(3);
            $data['query2'] = $query2;
            $data['result'] = $result;
            $data['error'] = $this->upload->display_errors();
            $this->load->view('includes/template', $data);
        }elseif($uid == 2){
            redirect('user/user_album');
        }



    }
    function user_photos($id = ''){

        $this->load->library('upload');

        $this->load->model('upload_model');
        $result = $this->upload_model->get3($id);
        $query2 = $this->upload_model->get2();

        $data['main'] = 'user_photos';
        $data['id'] = $this->uri->segment(3);
        $data['query2'] = $query2;
        $data['result'] = $result;
        $data['error'] = $this->upload->display_errors();
        $this->load->view('includes/template', $data);
    }

    function uploads($id = 0)
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

            $result = $this->upload_model->get($id);
            $result2 = $this->upload_model->get3($id);
            $data = $this->upload->data();
            $this->upload_model->insert_file($data['file_name']);
            $query2 = $this->upload_model->get2();

           // $data['result'] = $result;
            $data['id'] = $this->uri->segment(3);
            $data['result'] = $result2;
            $data['query2'] = $query2;
            $data['error'] = $this->upload->display_errors();
            $data['main'] = 'photos';
            $this->load->view('includes/template', $data);

        }
    }


}
