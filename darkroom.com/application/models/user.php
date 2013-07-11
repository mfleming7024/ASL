<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load-database();
    }

    public function getUserId($userId=''){
//        $stmnt = $db->prepare("select userId from user where userName = :username");
//        $stmnt->execute(array(':username'=>$username));
//        $rows = $stmnt->fetchAll(PDO::FETCH_ASSOC);
//        foreach ($rows as $row) {
//            return $row['userId'];

//
//
//            if ($slug === FALSE)
//            {
//                $query = $this->db->get('news');
//                return $query->result_array();
//            }

//        $query = $this->db->get_where('user', array('userId' => $userId));
//        return $query->row_array();


    }

    public function login($username, $password){
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }
}