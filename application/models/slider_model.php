<?php

class slider_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }

    function index() {
        echo'i am index';
    }

    function insert($slider_image) {
        $slider_name = $this->input->post('slider_name');
        $data = array(
            'slider_name' => $this->input->post('slider_name'),
            'slider_image' => $slider_image,
            'featured' => $this->input->post('featured'),
        );

        $this->db->insert('tbl_slider',
                $data);
        echo'Insertion Successful';
    }

    function update($slider_id,
            $slider_image) {
        $slider_name = $this->input->post('slider_name');
        $data = array(
            'slider_name' => $this->input->post('slider_name'),
            'slider_image' => $slider_image,
            'featured' => $this->input->post('featured'),
        );
        $this->db->where('slider_id',
                $slider_id);
        $this->db->update('tbl_slider',
                $data);
        echo'Update Successful';
    }

    function delete($slider_id) {
        $this->db->where('slider_id',
                $slider_id);
        $this->db->delete('tbl_slider');
        echo'Delete Successful';
    }

    function getall() {
        $res = $this->db->query("SELECT * FROM tbl_slider");
        return $res->result();
    }

    function getallfeatured() {
        $res = $this->db->get_where('tbl_slider',
                array("featured" => 1));
        return $res->result();
    }

    function getsingle($slider_id) {
        $res = $this->db->get_where('tbl_slider',
                array('slider_id' => $slider_id));
        return $res->row($slider_id);
    }

}

?>