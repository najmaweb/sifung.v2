<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('jbfg');
        $this->load->model('jjfg');
        $this->load->model('pegwdata');
        $this->load->model('mcapaian');
        $this->load->library('elementhelper');
        $this->load->library('auth');
    }
	function index(){
        $this->auth->checksession();
        $data['title']   = $this->uri->segment(2);
        $data['isactive'] = array(
            'list'=>'','dashboard'=>'','profile'=>'active'
        );
        $data['navigation'] = array(
            array('title'=>'Home','url'=>'/profile'),
            array('title'=>'Profile','url'=>'/profile'),
            array('title'=>'','url'=>'/')
        );
        $data['fungsi'] = $this->elementhelper->paramstocombo($this->jbfg->getwithtext(array(
            '1'=>'1',
        )),array(
            'key'=>'kdbutir',
            'val'=>'butir'
        ));
        $data['jenjang'] = $this->elementhelper->paramstocombo($this->jjfg->getwithtext(array(
            '1'=>'1',
        )),array(
            'key'=>'kdbutir',
            'val'=>'butir'
        ));
        $peg = $this->pegwdata->getrelated(array('unip'=>$_SESSION['user']));
        $capaian = $this->mcapaian->get(array('pelaksana'=>$_SESSION['user']));
        if(count($capaian['rows'])>0){
            $data['capaian'] = $capaian['rows'][0];
        }
        $data['jbfg'] = $this->elementhelper->paramstocombo($this->jbfg->gets(),array('key'=>'jbfg','val'=>'jbfg'));
        $data['jjfg'] = $this->elementhelper->paramstocombo($this->jjfg->gets(),array('key'=>'jjfg','val'=>'jjfg'));
        if(count($peg)>0){
            $pegawai = $peg['rows'][0];
            $data['pegwdata'] = $pegawai;
            $_SESSION['namapegawai'] = $pegawai->fnme;
        }
        //print_r($peg['rows'][0]);
        $this->load->view('User/profile', $data);
    }
    function capaian(){
        echo ' "staff": [
            {
                "pelaksana": "Tiger Nixon",
                "kdbutir": "System Architect",
                "target": "$320,800",
                "periode": "2011/04/25"
            },
        ]';
    }
    function capai(){
        echo '{
            "data": [
              [
                "Tiger Nixon",
                "System Architect",
                "Edinburgh",
                "$320,800"
              ]}}';
    }
}
