<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->input->post('password'));

        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
    //    $this->db->where('password', md5($this->input->post('password')));


        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
//            $row = $query->row();
//            $data = array(
//                'userid' => $row->userid,
//                'fname' => $row->fname,
//                'lname' => $row->lname,
//                'username' => $row->username,
//                'validated' => true
//            );
//            $row = $query->row();
//            $data = array(
//                'session_id'    =>  randomhash,
//                'ip_address'    =>  'string - user IP address',
//                'user_agent'    =>  'string - user agent data',
//                'last_activity' =>  timestamp
//            );
            if($query){
                $data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => true
                );

                $this->session->set_userdata($data);
                return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
        }
     }
}
?>