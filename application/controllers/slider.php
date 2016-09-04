<?php

class slider extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('league_model');
        $this->load->model('slider_model');
        $this->load->model('player_model');
        
        $this->load->library('image_moo');
        if ($this->session->userdata('loggedin') != 'true') {
            redirect('user/login');
        }
    }

    public function index() {
        $hdata = array(
            'ctitle' => 'Hello Kathford',
        );
        
        $this->load->view('home/includes/header',
                $hdata);
        $this->load->view('home/homepage',
                $data);
        $this->load->view('home/includes/footer');
    }

    function add() {
        $this->load->view('home/includes/header');
        $data['slider'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['players'] = $this->player_model->getall();
        if ($_POST) {
            $slider_image = $this->do_upload();
            $this->form_validation->set_rules('slider_name',
                    'Slider Name',
                    'required');
            $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>',
                    '</font>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('slider/slider_form',
                        $data);
            } else {
                $this->slider_model->insert($slider_image);
                redirect('slider/display');
            }
        } else {
            $this->load->view('slider/slider_form',
                    $data);
        }
        $this->load->view('home/includes/footer');
    }

    function edit($slider_id) {
        $this->load->view('home/includes/header');
        $data['sliders'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['players'] = $this->player_model->getall();
        if ($_POST) {
            $newImage = $_FILES['userfile']['name'];
            if ($newImage !== '') {
                $slider_image = $this->do_upload();
            } else {
                $slider = $this->slider_model->getsingle($slider_id);
                $slider_image= $slider->slider_image;
            }

            $this->form_validation->set_rules('slider_name',
                    'Slider Name',
                    'required');
           
            $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>',
                    '</font>');
            if ($this->form_validation->run() == FALSE) {
                $data['slider'] = $this->slider_model->getsingle($slider_id);
                $this->load->view('slider/slider_edit_form',
                        $data);
            } else {
                $this->slider_model->update($slider_id,
                        $slider_image);
                redirect('slider/display');
            }
        } else {
            $data['slider'] = $this->slider_model->getsingle($slider_id);
            $this->load->view('slider/slider_edit_form',
                    $data);
        }
        $this->load->view('home/includes/footer');
    }

    function display() {
        $this->load->view('home/includes/header');

        $data['sliders'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['players'] = $this->player_model->getall();
        $this->load->view('slider/slider_table',
                $data);
        $this->load->view('home/includes/footer');
    }

   private function do_upload() {
        $config['upload_path'] = 'uploads/original';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000000';
        $config['max_width'] = '50000';
        $config['max_height'] = '50000';

        $this->load->library('upload',
                $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            $source = "uploads/original/" . $data['file_name'];
            $destination_mainslider = "uploads/mainslider/" . $data['file_name'];
            $destination_thumb = "uploads/thumb/" . $data['file_name'];
            $size_mainslider_width = 960;
            $size_mainslider_height = 350;
            $size_thumb_width = 100;
            $size_thumb_height = 100;
            $this->image_moo->load($source)->resize_crop($size_mainslider_width,
                    $size_mainslider_height)->save($destination_mainslider);
            
            $this->image_moo->load($source)->resize_crop($size_thumb_width,
                    $size_thumb_height)->save($destination_thumb);
            return $data['file_name'];
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo"<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
    }


    function delete($slider_id) {
        $this->load->view('home/includes/header');
         $this->load->model('slider_model');
        if ($_POST) {
            $this->slider_model->delete($slider_id);
            redirect('slider/display');
        } else {
            $data['slider'] = $this->slider_model->getsingle($slider_id);
            $this->load->view('slider/slider_delete',
                    $data);
        }
        $this->load->view('home/includes/footer');
    }

}
