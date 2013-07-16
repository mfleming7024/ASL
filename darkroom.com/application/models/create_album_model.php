<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_album_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function add_album(){

        $this->load->database();

        $data = array(
            'albumName'=>$this->input->post('album_name'),
            'userId'=>$this->input->post('id'),

        );
        $this->db->where('userId' ,$this->input->post('id'));
        $this->db->insert('album',$data);
    }

    function get($id){


        $query = $this->db->get_where('users', array('userId' => $id));
        $result = $query->row_array();
        return $result;
        echo $result;
    }

    function get2(){
        $query2 = $this->db->query("SELECT * FROM album;");
        $query2->result();

//        foreach($query2->result() as $row){
//          // echo $row;
//        }
    }

}