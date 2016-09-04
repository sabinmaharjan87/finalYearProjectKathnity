<?php

class player_model extends CI_Model {

    function __construct() {
        parent::__construct();
            $this->load->database();
    }

    function index() {
        echo'i am index';
    }

    function insert($player_image) {
        $player_name=$this->input->post('player_name');
        $country_name=$this->input->post('country_name');
        $club_name=$this->input->post('club_name');
        $data = array(
            'player_name' => $this->input->post('player_name'),
            'player_image'=>$player_image,
            'country_name'=>$country_name,
            'club_name'=>$club_name,
            'position'=>$position
            );
        $this->db->insert('tbl_player', $data);
        echo'Insertion Successful';
    }
    function update($player_id,$player_image) {
        $player_name=$this->input->post('player_name');
        $country_name=$this->input->post('country_name');
        $club_name=$this->input->post('club_name');
        $data = array(
            'player_name' => $this->input->post('player_name'),
            'player_image'=>$player_image,
            'country_name'=>$country_name,
            'club_name'=>$club_name,
            'position'=>$position
            );
        $this->db->where('player_id', $player_id);
        $this->db->update('tbl_player', $data);
        echo'Update Successful';
    }
    function delete($player_id) {
        $this->db->where('player_id',$player_id);
        $this->db->delete('tbl_player');
        echo'Delete Successful';
    }
    function getall(){
        $query=$this->db->get('tbl_player');
        $res=$query->result();
        return $res;
    }
    function getsingle($player_id){
        $res = $this->db->get_where('tbl_player',array('player_id'=>$player_id));
        return $res->row($player_id);
    }
    function latestplayer() {
        $res=$this->db->query("SELECT * from tbl_player  order by player_id desc  LIMIT 5 ");
        return $res->result();
    }
    function latestplayerimage() {
        $res=$this->db->query("SELECT * from tbl_player order by player_id desc  LIMIT 1 ");
        return $res->result();
    }
    function allplayerofcountry($country_name) {
        $res = $this->db->query("SELECT * from tbl_player WHERE country_name = '$country_name'");
        return $res->result();
    }
    function allplayerofclub($club_name) {
        $res = $this->db->query("SELECT * from tbl_player WHERE club_name = '$club_name'");
        return $res->result();
    }

}

?>