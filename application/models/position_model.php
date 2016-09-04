<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class position_model extends CI_Model {

    function __construct() {
        parent::__construct();
            $this->load->database();
    }
 function getall(){
        $query=$this->db->get('tbl_pos');
        $res=$query->result();
        return $res;
    }
}
?>