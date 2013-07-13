<?php
class Delete_model extends CI_Model{

//    function delete($id){
//        $this->load->database();
//        $this->db->delete('users', array('id' => $id));
//    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

}