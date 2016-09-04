<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('club_model');
        $this->load->model('slider_model');
        $this->load->model('league_model');
        $this->load->model('country_model');
        $this->load->model('user_model');
        $this->load->model('player_model');
         $this->load->library('image_moo');
        
    }
    
   public function index(){      
        $hdata = array(
          'covtitle' => 'dominEYT',
        );
        $data['sliders'] = $this->slider_model->getall();
        $data['clubs'] = $this->club_model->getall();
        $data['leagues'] = $this->league_model->getall();
        $data['countrys'] = $this->country_model->getall();
        $data['players'] = $this->player_model->getall();
     
        $data['users'] = $this->user_model->getall();
        $data['latestclub'] = $this->club_model->latestclub();
        $data['latestclubimage'] = $this->club_model->latestclubimage();
        $data['latestleagueimage'] = $this->league_model->latestleagueimage();
        $data['latestleague'] = $this->league_model->latestleague();
        $data['latestplayerimage'] = $this->player_model->latestplayerimage();
        $data['latestplayer'] = $this->player_model->latestplayer();
        $this->load->view('home/includes/header',$hdata);
        $this->load->view('home/homepage',$data);
        $this->load->view('home/includes/footer');
       
    }
    
    function leagues(){
        $data['leagues']=$this->league_model->getall();
        $this->load->view('home/includes/header');
        $this->load->view('home/league',$data);
        $this->load->view('home/includes/footer');
    }
    
    function league_detail($league_id){
        $data['league']=$this->league_model->getsingle($league_id);
        $league_name=  $data['league']->league_name;
        $data['allclubofleague']=$this->club_model->allclubofleague($league_name);
        $this->load->view('home/includes/header');
        $this->load->view('home/league_detail',$data);
        $this->load->view('home/includes/footer');
    }
    function countrys(){
        $data['countrys']=$this->country_model->getall();
        $this->load->view('home/includes/header');
        $this->load->view('home/country',$data);
        $this->load->view('home/includes/footer');
    }
    function country_detail($country_id){
        $data['country']=$this->country_model->getsingle($country_id);
        $country_name=  $data['country']->country_name;
        $data['allclubofcountry']=$this->club_model->allclubofcountry($country_name);
        $this->load->view('home/includes/header');
        $this->load->view('home/country_detail',$data);
        $this->load->view('home/includes/footer');
    }
    function players(){
        $data['players']=$this->player_model->getall();
        $this->load->view('home/includes/header');
        $this->load->view('home/player',$data);
        $this->load->view('home/includes/footer');
    }
    function player_detail($player_id){
        $data['player']=$this->player_model->getsingle($player_id);
        $club_name=  $data['player']->club_name;
        $country_name=  $data['player']->country_name;
        $this->load->view('home/includes/header');
        $this->load->view('home/player_detail',$data);
        $this->load->view('home/includes/footer');
    }
    
    function clubs(){
        $data['clubs']=$this->club_model->getall();
        $this->load->view('home/includes/header');
        $this->load->view('home/club',$data);
        $this->load->view('home/includes/footer');
    }
    function club_detail($club_id){
        $data['club']=$this->club_model->getsingle($club_id);
        $club_name=  $data['club']->club_name;
        $data['allplayerofclub']=$this->club_model->allplayerofclub($club_name);
        $this->load->view('home/includes/header');
        $this->load->view('home/club_detail',$data);
        $this->load->view('home/includes/footer');
    }
    function sliders(){
        $data['sliders']=$this->slider_model->getallfeatured();
        $this->load->view('home/includes/header');
        $this->load->view('home/slider',$data);
        $this->load->view('home/includes/footer');
    }
    function slider_detail($slider_id){
        $data['slider']=$this->slider_model->getsingle($slider_id);
        $this->load->view('home/includes/header');
        $this->load->view('home/slider_detail',$data);
        $this->load->view('home/includes/footer');
    }
    
}