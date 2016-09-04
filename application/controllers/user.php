<?php

class user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('league_model');
        $this->load->model('slider_model');
        $this->load->model('player_model');
        
        $this->load->library('image_moo');
//        $this->load->helper('url');
    }
    
    private function do_upload() {
        $config['upload_path'] = 'uploads/original';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000000';
        $config['max_width'] = '50000';
        $config['max_height'] = '50000';

        $this->load->library('upload',
                $config);
        if ($this->upload->do_upload("user_image")) {
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
            $this->image_moo->load($source)->resize_crop($size_slider_width,
                    $size_slider_height)->save($destination_slider);
            $this->image_moo->load($source)->resize_crop($size_square_width,
                    $size_square_height)->save($destination_square);
            $this->image_moo->load($source)->resize_crop($size_thumb_width,
                    $size_thumb_height)->save($destination_thumb);
            return $data['file_name'];
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo"<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
    }

    public function index() {

        if ($this->session->userdata('user_name') == !0) {
            $this->load->view('dashboard');
        } else {
            $data['user'] = $this->user_model->getall();
            $this->load->view('home/includes/header');
            $this->load->view('login');
            $this->load->view('home/includes/footer');
        }
    }

    function dashboard() {
      if ($this->session->userdata('user_name') == !0) {
        $data['user'] = $this->user_model->getuserdata();
       $this->load->view('home/includes/header');
        $this->load->view('dashboard', $data);
       //$this->load->view('home/includes/footer');
        //$data['latestclub'] = $this->club_model->latestclub();
       // $data['latestleague'] = $this->league_model->latestleague();
      }  
   
    }

    function logged() {
        if ($this->session->userdata('loggedin') == "true") {
            $this->load->view('logged');
        } else {
            $this->user->login();
        }
    }

    function register() {
      if ($this->session->userdata('loggedin') == 0) {
          
        $this->load->view('home/includes/header');
        if ($_POST) {
            $user_image = $this->do_upload();
            $this->form_validation->set_rules('user_name',
                    'user_name',
                    'required');
            $this->form_validation->set_rules('password',
                    'password',
                    'required|min_length[8]');
          
            $this->form_validation->set_rules('email',
                    'email',
                    'required|valid_email');
            $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>',
                    '</font>');
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('register');
            } else {
                
                $this->user_model->insert($user_image);
            }
        } else {
            $this->load->view('register');
        }
        $this->load->view('home/includes/footer');
        } else {
            $this->load->view('home/includes/header');
            $this->load->view('login');
         $this->load->view('home/includes/footer');
        }
    }

    function delete($user_id) {
        $this->load->view('home/includes/header');
        if ($_POST) {
            $this->user_model->delete($user_id);
            redirect('user/display');
        } else {
            $data['user'] = $this->user_model->getsingle($user_id);
            $this->load->view('delete', $data);
        }
        $this->load->view('home/includes/footer');
    }

    function display() {
        $this->load->view('home/includes/header');
        $data['users'] = $this->user_model->getall();
        $this->load->view('user_table', $data);
        $this->load->view('home/includes/footer');
    }

    function edit($user_id) {
       $this->load->view('home/includes/header');
       $data['user'] = $this->user_model->getall();
        $this->load->model('user_model');
        if ($_POST) {
            $newImage = $_FILES['user_image']['name'];
            if ($newImage != '') {
                $user_image = $this->do_upload();
            } else {
                $user = $this->club_model->getsingle($club_id);
                $user_image = $user->user_image;
            }
            
            $this->form_validation->set_rules('user_name',
                    'user_name',
                    'required');
            $this->form_validation->set_rules('password',
                    'password',
                    'required|min_length[5]');
            $this->form_validation->set_rules('email',
                    'email',
                    'required|valid_email');
            $this->form_validation->set_error_delimiters('<font color="#ace123"> <br>',
                    '</font>');
            if ($this->form_validation->run() == FALSE) {
                $data['user'] = $this->user_model->getsingle($user_id);
                $this->load->view('edit',
                        $data);
            } else {
                $this->user_model->edit($user_id, $user_image);
                redirect('user/display');
                
            }
        } else {
            $data['user'] = $this->user_model->getsingle($user_id);
            $this->load->view('edit',
                    $data);
        }
       $this->load->view('home/includes/footer');
    }

    function login() {
        $this->load->view('home/includes/header');
        if ($_POST) {
            $this->form_validation->set_rules('user_name',
                    'user_name',
                    'required');
            $this->form_validation->set_rules('password',
                    'password',
                    'required|min_length[5]');
            $this->form_validation->set_error_delimiters('<font color="BLUE"> <br>',
                    '</font>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $res = $this->user_model->login();
                if ($res) {
                    $data['user_name'] = $this->session->userdata['user_name'];
                    redirect('home');
                } else {
                    redirect('user/login');
                }
            }
        } else {
            $this->load->view('login');
        }
        $this->load->view('home/includes/footer');
    }

    function logout() {
        $this->load->view('home/includes/header');
        $this->session->sess_destroy();
        $this->session->set_flashdata('error',
                "You've logged out");
        redirect('user/login');
        $this->load->view('home/includes/footer');
    }

    function checklogin() {
        if ($this->session->userdata('loggedin') == TRUE) {
            redirect('user/dashboard');
        }
    }

    function contact() {
        $data['users'] = $this->user_model->getall();
        $this->load->view('home/includes/header');
        $this->load->view('contact',
                $data);
        $this->load->view('home/includes/footer');
    }

    function admin($user_id) {
        $data['users'] = $this->user_model->getsingle($user_id);
        $this->load->view('home/includes/header');
        $this->load->view('admin',
                $data);
        $this->load->view('home/includes/footer');
    }
    
    
    function user_detail($user_id) {
        $data['users'] = $this->user_model->getsingle($user_id);
        $this->load->view('home/includes/header');
        $this->load->view('user_detail',
                $data);
        $this->load->view('home/includes/footer');
    }
}
?>