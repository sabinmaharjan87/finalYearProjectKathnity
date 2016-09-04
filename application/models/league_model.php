<?php

class league_model extends CI_Model {

    function __construct() {
        parent::__construct();
            $this->load->database();
            
    }

    function index() {
        echo'i am index';
    }

    function insert($league_image) {
        $league_name=$this->input->post('league_name');
        $data = array(
            'league_name' => $this->input->post('league_name'),
            'league_image'=>$league_image,
            );
        $this->db->insert('tbl_league', $data);
        echo'Insertion Successful';
    }
    function update($league_id,$league_image) {
        $league_name=$this->input->post('league_name');
        $data = array(
            'league_name' => $this->input->post('league_name'),
            'league_image'=>$league_image,
            );
        $this->db->where('league_id', $league_id);
        $this->db->update('tbl_league', $data);
        echo'Update Successful';
    }
    function delete($league_id) {
        $this->db->where('league_id',$league_id);
        $this->db->delete('tbl_league');
        echo'Delete Successful';
    }
    function getall(){
        $query=$this->db->get('tbl_league');
        $res=$query->result();
        return $res;
    }
    function getsingle($league_id){
        $res = $this->db->get_where('tbl_league',array('league_id'=>$league_id));
        return $res->row($league_id);
    }
    function latestleague() {
        $res=$this->db->query("SELECT * from tbl_league  order by league_id desc  LIMIT 5 ");
        return $res->result();
    }
    function latestleagueimage() {
        $res=$this->db->query("SELECT * from tbl_league order by league_id desc  LIMIT 1 ");
        return $res->result();
    }
    function allclubofleague($league_name) {
        $res = $this->db->query("SELECT * from tbl_league WHERE league_name = '$league_name'");
        return $res->result();
    }
}

?>