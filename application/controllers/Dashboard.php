<?php
Class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
    }
    function index(){
        $this->auth->checksession();
        $data['isactive'] = array(
            'list'=>'','dashboard'=>'active','profile'=>''
        );
        $data['title'] = "Dashboard";
        $data['navigation'] = array(
            array('title'=>'Home','url'=>'/dashboard'),
            array('title'=>'Dashboard','url'=>'/dashboard'),
            array('title'=>'','url'=>'/')
        );
        $this->load->view('commons/dashboardv4',$data);
    }
}