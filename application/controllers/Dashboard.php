<?php
Class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('mdashboard');
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
        $this->load->view('commons/dashboardv5',$data);
    }
    function get(){
        echo json_encode($this->mdashboard->get());
    }
    function getsubutirs(){
        echo json_encode($this->mdashboard->getsubutirs());
    }
}