<?php

class Upload_model extends CI_Model{

    public function insert_file($filename)
    {
//        $data = array(
//            'name'   => $name,
//        );
//        $this->db->where('albumId' ,$this->input->post('id'));
//        $this->db->insert('images', $data);
//
//       // return $this->db->insert_id();
        $data = array(
            'name'=> $filename,
            'albumId'=>$this->input->post('id'),

        );
        $this->db->where('albumId' ,$this->input->post('id'));
        $this->db->insert('images',$data);
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
        $query2 = $this->db->query("SELECT * FROM images;");

        return $query2;
        foreach($query2->result() as $row){
        }
    }
}