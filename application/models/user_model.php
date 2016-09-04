<?php

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        echo'i am index';
    }

    function insert($user_image) {
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'password' => $this->input->post('password'),
            'user_image'=> $user_image,
            'user_type' => $user_type,
        );

        $this->db->insert('tbl_user',
                $data);
        $this->load->view('user/display');
    }

    function edit($user_id, $user_image) {
        $user_name = $this->input->post('user_name');
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'password' => $this->input->post('password'),
            'user_image' => $user_image,
            'user_type' => $user_type,
        );
        $this->db->where('user_id',
                $user_id);
        $this->db->update('tbl_user',
                $data);
        echo'Update Successful';
    }

    function login() {
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');
        $user_type = $this->input->post('user_type');
        $sql = "SELECT * from tbl_user where user_name='$user_name'  AND password='$password' AND user_type='$user_type'";
        $res = $this->db->query($sql);
        $user = $res->row();
        $username = $user->user_name;
        $id = $user->user_id;
        if (count($user) == 1) {
            $this->session->set_userdata('loggedin',
                    "true");
            $this->session->set_userdata('user_name',
                    $username);
            $this->session->set_userdata('user_id',
                    $id);
            $this->session->set_userdata('loggedin',
                    true);
            return true;
        } else {
            $this->session->set_flashdata('error',
                    'Invalid Username or Password <br> Please retry');
            return false;
        }
    }

    function getall() {
        $res = $this->db->query("SELECT * from tbl_user");
        return $res->result();
    }

    function getsingle($user_id) {
        $res = $this->db->get_where('tbl_user',
                array('user_id' => $user_id,));
        return $res->row($user_id);
    }
    function delete($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_user');
        echo'Delete Successful';
    }
    function getuserdata() {
        $user_id=$this->session->userdata('user_id');
        $this->db->where('user_id', $user_id);
        $res = $this->db->get_where('tbl_user')->result();
       // print_r($res);
        //die();
        return $res;
    }
  function getusertype() {
        $res = $this->db->query("SELECT * from tbl_usertype;");
        return $res->result();
    }

}
?>