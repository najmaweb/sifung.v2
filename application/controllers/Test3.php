<?php
Class Test3 extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('sifungauth');
        $this->load->library('crud');
    }
    function getusers(){}
    function getuser(){}
    function changepassword($params){
        $out = $this->sifungauth->createsalt(array(
            'unip'=>$params['unip'],'password'=>$params['password']
        ));
        $this->crud->update('progev.pegwdata',array(),array());
    }
    function update(){}
    function testcreate(){
        $res = $this->create(array(
            'unip'=>$this->uri->segment(3),
            'password'=>$this->uri->segment(4)
        ));
        print_r($res);
        $this->crud->create('progev.pegwdata',array(
            'unip'=>$res['unip'],
            'password'=>$res['password'],
            'salt'=>$res['salt']
        ));

    }
    function create($params){
        return $this->sifungauth->createsalt($params);
    }
    function testisauth(){
        $unip = $this->uri->segment(3);
        $userpassword = $this->uri->segment(4);
        $out = $this->crud->get('progev.pegwdata',array('unip','salt','password'),array(
            'unip'=>$unip
        ));
        $auth = $out['rows'][0];
        print_r($auth);
        if($this->sifungauth->isauth(array(
            'salt'=>$auth->salt,'password'=>$auth->password,'userpassword'=>$userpassword
        ))){
            echo "authenticated";
        }else{
            echo "not authenticated";
        }
    }
    function isauth($params){
        return $this->sifungauth->isauth($params);
    }
    function changeallpasswordtosifung(){
        $pegs = $this->crud->gets('progev.pegwdata',array('unip'));
        $out = $this->sifungauth->createsalt(array(
            'unip'=>'kittu','password'=>'sifung'
        ));
       /*foreach($pegs['res'] as $peg){
            echo($peg->unip).' - '.$out['salt'].' - '.$out['password'].'<br />';
            $this->crud->update('progev.pegwdata',array('salt'=>$out['salt'],'password'=>$out['password']),array("1"=>"1"));
        };*/
        $this->crud->update('progev.pegwdata',array('salt'=>$out['salt'],'password'=>$out['password']),array("1"=>"1"));
    }
    function testresetindividualpassword(){
        $unip = $this->uri->segment(3);
        $password = $this->uri->segment(4);
        print_r($this->resetindividualpassword(array('unip'=>$unip,'password'=>$password)));
    }
    function resetpassword(){
        $params = $this->input->post();
        $unip = $params['unip'];
        $password = $params['password'];
        echo json_encode($this->resetindividualpassword(array('unip'=>$unip,'password'=>$password)));
    }
    function resetindividualpassword($params){
        $out = $this->sifungauth->createsalt(array(
            'unip'=>$params['unip'],'password'=>$params['password']
        ));
        return ($this->crud->update('progev.pegwdata',array('salt'=>$out['salt'],'password'=>$out['password']),array("unip"=>$params["unip"])));
    }
}