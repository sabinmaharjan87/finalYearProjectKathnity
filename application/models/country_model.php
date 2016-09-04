<?php

class country_model extends CI_Model {

    function __construct() {
        parent::__construct();
            $this->load->database();
            
    }

    function index() {
        echo'i am index';
    }

    function insert($country_image) {
        $country_name=$this->input->post('country_name');
        $data = array(
            'country_name' => $this->input->post('country_name'),
            'country_image'=>$country_image,
            );
        $this->db->insert('tbl_country', $data);
        echo'Insertion Successful';
    }
    function update($country_id,$country_image) {
        $country_name=$this->input->post('country_name');
        $data = array(
            'country_name' => $this->input->post('country_name'),
            'country_image'=>$country_image,
            );
        $this->db->where('country_id', $country_id);
        $this->db->update('tbl_country', $data);
        echo'Update Successful';
    }
    function delete($country_id) {
        $this->db->where('country_id',$country_id);
        $this->db->delete('tbl_country');
        echo'Delete Successful';
    }
    function getall(){
        $query=$this->db->get('tbl_country');
        $res=$query->result();
        return $res;
    }
    function getsingle($country_id){
        $res = $this->db->get_where('tbl_country',array('country_id'=>$country_id));
        return $res->row($country_id);
    }
    function latestcountry() {
        $res=$this->db->query("SELECT * from tbl_country  order by country_id desc  LIMIT 5 ");
        return $res->result();
    }
    function latestcountryimage() {
        $res=$this->db->query("SELECT * from tbl_country order by country_id desc  LIMIT 1 ");
        return $res->result();
    }
    function allclubofcountry($club_name) {
        $res = $this->db->query("SELECT * from tbl_club WHERE country_name = '$country_name'");
        return $res->result();
    }

}

?>