<?php
Class Capaian extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function get($condition){
        return $this->crud->get('capaian',array('id','pelaksana','kdbutir'),$condition);
    }
    function create($obj){
        return $this->crud->create('capaian',array(
            'pelakasana'=>$obj['pelakasana'],
            'kdbutir'=>$obj['kdbutir'],
            'target'=>$obj['target'],
            'pelaksana'=>$obj['pelaksana'],
            'periode'=>$obj['periode'],
        ));
    }
    function remove($id){
        return $this->crud->remove('capaian',array('id'=>$id));
    }
}