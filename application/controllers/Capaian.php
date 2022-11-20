<?php
Class Capaian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mcapaian');
        $this->load->model('butir');
        $this->load->library('auth');
        $this->load->library('elementhelper');
        $this->auth->checksession();
    }
    function index(){
        $this->auth->checksession();
        $data['title']   = $this->uri->segment(2);
        $data['isactive'] = array(
            'list'=>'active','dashboard'=>'','profile'=>''
        );
        $data['navigation'] = array(
            array('title'=>'Home','url'=>'/capaian'),
            array('title'=>'','url'=>'/capaian'),
            array('title'=>'','url'=>'/capaian')
        );
        $data['objs'] = $this->mcapaian->get(array('pelaksana'=>$_SESSION['user']));
        $data['butirkegiatan'] = $this->elementhelper->paramstocombo($this->butir->getwithtext(array(
            'jjfg'=>$_SESSION['jjfg'],
            'jbfg'=>$_SESSION['jbfg']
        )),array(
            'key'=>'kdbutir',
            'val'=>'urbutir'
        ));
        $this->load->view('capaian/list', $data);
    }
    function get_datas(){
        $objs = $this->mcapaian->get2(array('a.pelaksana'=>'197411212001121002'));
//        $objs = $this->mcapaian->get2(array('a.pelaksana'=>$_SESSION['user']));
        echo '{"data":'.json_encode($objs['res']).'}';
    }
    function get_datas3(){
        $objs = $this->mcapaian->get3(array('pelaksana'=>$_SESSION['user']));
        echo '{"data":'.json_encode($objs['res']).'}';        
    }
    function get_butirs(){
        $objs = $this->mcapaian->get(array('pelaksana'=>$_SESSION['user']));
        echo '{"data":'.json_encode($objs['rows']).'}';
    }
    function save(){
        $params = $this->input->post();
        echo json_encode($this->mcapaian->save($params));
    }
    function remove(){
        $params = $this->input->post();
        echo json_encode($this->mcapaian->remove($params));
    }
    function checkexists(){
        $pelaksana = $this->uri->segment(3);
        $kdbutir = $this->uri->segment(4);
        $obj = $this->mcapaian->get(array('pelaksana'=>$pelaksana,'kdbutir'=>$kdbutir));
        if($obj['cnt']>0){
            return true;
        }else{
            return false;
        }
    }
    function checkexistsjson(){
        $pelaksana = $this->uri->segment(3);
        $kdbutir = $this->uri->segment(4);
        $obj = $this->mcapaian->get(array('pelaksana'=>$pelaksana,'kdbutir'=>$kdbutir));
        if($obj['cnt']>0){
            echo json_encode(array("res"=>true));
        }else{
            echo json_encode(array("res"=>false));
        }
    }
    function get_edit(){
        $params = $this->input->post();
        $objs = $this->mcapaian->get2(array('a.id'=>$params['id']));
        echo '{"data":'.json_encode($objs['res']).'}';
    }
    function update(){
        $params = $this->input->post();
        echo json_encode($this->mcapaian->update($params,array('id'=>$params['id'])));
    }
}