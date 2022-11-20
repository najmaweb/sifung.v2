<?php
Class Header extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mheader');
        $this->load->model('butir');
        $this->load->model('pegwdata');
        $this->load->model('mprop');
    }
    function index(){
        $this->auth->checksession();
        $data['title']   = $this->uri->segment(2);
        $data['isactive'] = array(
            'list'=>'active','dashboard'=>'','profile'=>''
        );
        $data['objs'] = $this->mheader->get(array('pelaksana'=>$_SESSION['user']));
        $data['pemberi'] = $this->elementhelper->paramstocombo($this->pegwdata->get(array('glng'=>'gl2a')),array('key'=>'unip','val'=>'fnme'));
        $data['prop'] = $this->elementhelper->paramstocombo($this->mprop->get(array('1'=>'1')),array('key'=>'kdprop','val'=>'urprop'));
        $data['butirkegiatan'] = $this->elementhelper->paramstocombo($this->butir->get(array(
            'jjfg'=>$_SESSION['jjfg'],
            'jbfg'=>$_SESSION['jbfg']
        )),array(
            'key'=>'kdbutir',
            'val'=>'kdbutir'
        ));
        $this->load->view('header/list', $data);
    }
    function get_datas(){
        $id = $this->uri->segment(3);
        $objs = $this->mheader->getCustom(array('a.id'=>$id));
        echo '{"data":'.json_encode($objs['res']).'}';
    }
    function save(){
        $params = $this->input->post();
        echo json_encode($this->mheader->create($params));
    }
}
