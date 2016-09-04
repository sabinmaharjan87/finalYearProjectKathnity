<?php

class club_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        
    }

    function index() {
        echo'i am index';
    }

    function insert($club_image) {
        $club_name = $this->input->post('club_name');
        $data = array(
        'club_name' => $this->input->post('club_name'),
        'country_name' => $this->input->post('country_name'),
        'league_name' => $this->input->post('league_name'),
        'club_image' => $club_image,
        );
        $this->db->insert('tbl_club', $data);
        echo'Insertion Successful';
    }

    function update($club_id,$club_image) {
        $club_name = $this->input->post('club_name');
        $data = array(
        'club_name' => $this->input->post('club_name'),
        'country_name' => $this->input->post('country_name'),
        'league_name' => $this->input->post('league_name'),
            'club_image' => $club_image,
        );
        
        $this->db->where('club_id', $club_id);
        $this->db->update('tbl_club', $data);
        echo'Update Successful';
    }

    function delete($club_id) {
        $this->db->where('club_id', $club_id);
        $this->db->delete('tbl_club');
        echo'Delete Successful';
    }

    function getall() {
        $res=$this->db->query("SELECT * from tbl_club");
        return $res->result();
    }
    function latestclub() {
        $res=$this->db->query("SELECT * from tbl_club  order by club_id desc  LIMIT 5");
        return $res->result();
    }
    function latest5club() {
        $res=$this->db->query("SELECT * from tbl_club  order by club_id desc  LIMIT 5 ");
        return $res->result();
    }
    
    function latestclubimage() {
        $res=$this->db->query("SELECT * from tbl_club order by club_id desc  LIMIT 1 ");
        return $res->result();
    }
    
    function getsingle($club_id) {
        $res = $this->db->get_where('tbl_club', array('club_id' => $club_id));
        return $res->row($club_id);
    }
    function allclubofleague($league_name) {
        $res = $this->db->query("SELECT * from tbl_club WHERE league_name = '$league_name'");
        return $res->result();
    }
    function allclubofcountry($country_name) {
        $res = $this->db->query("SELECT * from tbl_club WHERE country_name = '$country_name'");
        return $res->result();
    }
    
    function allplayerofclub($club_name) {
        $res = $this->db->query("SELECT * from tbl_player WHERE club_name = '$club_name'");
        return $res->result();
    }
    function predict($club_name, $league, $row, $k)
    {
        
       
            $this->distances = nearestNeighbors($club_name, $row);
            $this->distances = array_slice($this->distances, 0, $k); // get top k.
            $predictions = array();
            foreach($$this->distances as $neighbor=>$this->distance)
             {
                 $predictions[$league[$neighbor]]++;
             }
            asort($predictions);
            return $predictions;
    }
    function nearestNeighbors($club_name, $club_id) {
            $testPoint = $club_name[$club_id];
            $this->distances = distances_to_point($xs, $testPoint);
            return $this->distances;
    }
    
   
}

?>