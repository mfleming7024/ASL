<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_album_model extends CI_Model{

    function add_album(){

        $this->load->database();

        $data = array(
            'albumName'=>$this->input->post('album_name'),
            'userId'=>$this->input->post('id'),

        );
        $this->db->where('userId' ,$this->input->post('id'));
        $this->db->insert('album',$data);
    }

    function get(){

        $id = $this->uri->segment(3);
       // echo $id;
        $query = $this->db->get_where('users', array('userId' => $id));
        $result = $query->row_array();

    }



}