<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_user_model extends CI_Model{

    function add_user(){
        $new_user_insert_data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'date' => $this->input->post('dateInput'),
            'notes' => $this->input->post('notes'),
            'userType' => $this->input->post('user_type'),
        );
        
        $insert = $this->db->insert('users', $new_user_insert_data);
        return $insert;
    }

}