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
}