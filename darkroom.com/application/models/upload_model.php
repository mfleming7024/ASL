<?php

class Upload_model extends CI_Model{

    public function insert_file($name)
    {
        $data = array(
            'name'   => $name,

        );
        $this->db->insert('images', $data);
        return $this->db->insert_id();
    }

}