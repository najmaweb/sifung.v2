<?php
Class Masters extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('lokasi');
        $this->load->model('butir');
    }
    function getprops(){
        echo json_encode($this->lokasi->gets());
    }
    function getbutir(){
        $jjfg = $this->uri->segment(3);
        $jbfg = $this->uri->segment(4);
        echo json_encode($this->butir->get(array('jjfg'=>$jjfg,'jbfg'=>$jbfg)));
    }
    function getbutirdatatable(){
        $objs = $this->butir->gets();
        echo '{"data":'.json_encode($objs['rows']).'}';
    }
}
