<?php

class Upload_model extends CI_Model{

    public function insert_file($name,$id)
    {
        $data = array(
            'name'   => $name,
        );
        $this->db->where('albumId' ,$this->input->post('id'));
        $this->db->insert('images', $data);

       // return $this->db->insert_id();
    }
    function get($id){
        $query = $this->db->get_where('images', array('albumId' => $id));
        $result = $query->row_array();
        return $result;

//        $this->load->database();
//        $query = $this->db->get_where('images', array('albumId' => $id));
//        return $query->row_array();
        // echo $result;
    }

    function get2(){
        $query2 = $this->db->query("SELECT * FROM album;");

        return $query2;
        foreach($query2->result() as $row){
        }
    }
}