<?php

class User_model extends CI_Model{

        function get_users($id){
       // $query = $this->db->query("SELECT * FROM users;");

            $new_user_insert_data = array(
                'lastname' =>$this->db->query('lastname'),
                'firstname' => $this->db->query('firstname'),
                'username' => $this->db->query('username'),
                'password' => md5($this->db->query('password')),
                'email' => $this->db->query('email'),
                'notes' => $this->db->query('notes'),
            );

            $insert = $this->db->query('users', $new_user_insert_data);
            return $insert;
    }

}