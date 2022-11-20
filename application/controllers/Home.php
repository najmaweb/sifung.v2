<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('Auth');
        $this->load->model('pegwdata');
        $this->load->library('sifungauth');
    }
	function index(){
        $data['title']   = $this->uri->segment(2);
        $data['isactive'] = array(
            'list'=>'','dashboard'=>'','profile'=>''
        );
        $this->load->view('commons/login-v2', $data);
    }
    function test(){
        $this->load->model('butirkegiatan');
        print_r($this->butirkegiatan->gets());
    }
    function doauth(){
        $params = $this->input->post();
        $out = $this->crud->get('progev.pegwdata',array('unip','salt','password'),array(
            'unip'=>$params['user']
        ));
        $auth = $out['rows'][0];
        if($this->sifungauth->isauth(array(
            'salt'=>$auth->salt,'password'=>$auth->password,'userpassword'=>$params['password']
        ))){
            $peg = $this->pegwdata->get(array('unip'=>$params['user']));$pegawai = $peg['rows'][0];
            $data['pegwdata'] = $pegawai;
            $_SESSION["jjfg"] = $pegawai->jjfg;
            $_SESSION["jbfg"] = $pegawai->jbfg;
            $_SESSION["namapegawai"] = $pegawai->fnme;
            $_SESSION["user"] = $params["user"];
            $_SESSION['kdupt'] = $pegawai->kdupt;
            $_SESSION['kdpel'] = $pegawai->kdpel;
            redirect('/Capaian');
    }else{
            echo "not authenticated";
        }
    }
    function doauth_(){
        $params = $this->input->post();
        //print_r($_SESSION);
        if($this->auth->is_authenticated($params)){
            $peg = $this->pegwdata->get(array('unip'=>$params['user']));
            //print_r($peg);
            if(count($peg)>0){
                $pegawai = $peg['rows'][0];
                $data['pegwdata'] = $pegawai;
                $_SESSION["jjfg"] = $pegawai->jjfg;
                $_SESSION["jbfg"] = $pegawai->jbfg;
                $_SESSION["namapegawai"] = $pegawai->fnme;
                $_SESSION["user"] = $params["user"];
                $_SESSION['kdupt'] = $pegawai->kdupt;
                $_SESSION['kdpel'] = $pegawai->kdpel;
                redirect('/Capaian');
                }    
        }
    }
}
