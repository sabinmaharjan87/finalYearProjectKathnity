<?php

class player extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('club_model');
        $this->load->model('slider_model');
        $this->load->model('player_model');
        $this->load->model('country_model');
        $this->load->model('league_model');
        $this->load->model('user_model');
        $this->load->library('image_moo');
        $this->load->model('position_model');
        if ($this->session->userdata('loggedin') != 'true') {
            redirect('user/login');
        }
    }

    private function do_upload() {
        $config['upload_path'] = 'uploads/original';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000000';
        $config['max_width'] = '50000';
        $config['max_height'] = '50000';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            $source = "uploads/original/" . $data['file_name'];
            $destination_slider = "uploads/slider/" . $data['file_name'];
            $destination_thumb = "uploads/thumb/" . $data['file_name'];
            $destination_square = "uploads/square/" . $data['file_name'];
            $size_slider_width = 425;
            $size_slider_height = 170;
            $size_thumb_height = 50;
            $size_thumb_width = 50;
            $size_square_height = 250;
            $size_square_width = 250;
            $this->image_moo->load($source)->resize_crop($size_slider_width, $size_slider_height)->save($destination_slider);
            $this->image_moo->load($source)->resize_crop($size_square_width, $size_square_height)->save($destination_square);
            $this->image_moo->load($source)->resize_crop($size_thumb_width, $size_thumb_height)->save($destination_thumb);
            return $data['file_name'];
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo"<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
    }

    public function index() {
        $hdata = array(
            'ctitle' => 'players',
        );
        $data['slider'] = $this->slider_model->getall();
        $data['players'] = $this->player_model->getall();
        $data['countrys'] = $this->country_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['position'] = $this->position_model->getall();
        $this->load->view('home/includes/header', $hdata);
        $this->load->view('home/homepage', $data);
        $this->load->view('home/includes/footer');
    }

    function add() {
        $this->load->view('home/includes/header');
        $data['slider'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['players'] = $this->player_model->getall();
        $data['countrys'] = $this->country_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['position'] = $this->position_model->getall();
        if ($_POST) {
            $player_image = $this->do_upload();
            $this->form_validation->set_rules('player_name', 'player_name', 'required');
                $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>', '</font>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('player/player_form', $data);
            } else {
                $this->player_model->insert($player_image);
                redirect('player/display');
            }
        } else {
            $this->load->view('player/player_form', $data);
        }
        $this->load->view('home/includes/footer');
    }

    function edit($player_id) {
        $this->load->view('home/includes/header');
        $data['slider'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['countrys'] = $this->country_model->getall();
        $data['players'] = $this->player_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['position'] = $this->position_model->getall();
        if ($_POST) {
            $newImage = $_FILES['userfile']['name'];
            if ($newImage != '') {
                $player_image = $this->do_upload();
            } else {
                $player = $this->player_model->getsingle($player_id);
                $player_image = $player->player_image;
            }
            $this->form_validation->set_rules('player_name', 'player_name', 'required');
           
            $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>', '</font>');
            if ($this->form_validation->run() == FALSE) {
                $data['player'] = $this->player_model->getsingle($player_id);
                $this->load->view('player/player_edit_form', $data);
            } else {
                $this->player_model->update($player_id, $player_image);
                redirect('player/display');
            }
        } else {
            $data['player'] = $this->player_model->getsingle($player_id);
            $this->load->view('player/player_edit_form', $data);
        }
        $this->load->view('home/includes/footer');
    }

    function display() {
        $this->load->view('home/includes/header');

        $data['slider'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['players'] = $this->player_model->getall();
        $data['countrys'] = $this->country_model->getall();
        $data['leagues'] = $this->league_model->getall();
        
        
        $this->load->view('player/player_table', $data);
        $this->load->view('home/includes/footer');
    }

    function ajaxAdd() {
        $player_name = $this->input->post('player_name');
        $this->player_model->insert();
    }

    function delete($player_id) {
        $this->load->view('home/includes/header');
        if ($_POST) {
            $this->player_model->delete($player_id);
            redirect('player/display');
        } else {
            $data['player'] = $this->player_model->getsingle($player_id);
            $this->load->view('player/player_delete', $data);
        }
        $this->load->view('home/includes/footer');
    }

}
