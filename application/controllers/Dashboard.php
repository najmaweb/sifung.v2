<?php
Class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('mdashboard');
        $this->load->model('mheader');
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
        $this->load->view('commons/dashboardv6',$data);
    }
    function getheaders(){
        $objs = $this->mheader->get(array('1'=>'1'));
        echo '{"data":'.json_encode($objs['rows']).'}';
    }
    function get(){
        echo json_encode($this->mdashboard->get());
    }
    function getsubutirs(){
        echo json_encode($this->mdashboard->getsubutirs());
    }
    function hehe(){
        $dashboard = $this->mheader->getdashboard(array('pelaksana'=>$_SESSION['user']));
        echo '{"data":'.json_encode($dashboard['res']).'}';
    }
}