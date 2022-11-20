<?php
Class Butir extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('butir',array('jbfg','jjfg','nmbutir','kdbutir','butir','sat','ak'));
    }
    function get($condition){
        return $this->crud->get('butir',array('jbfg','jjfg','nmbutir','kdbutir','urutbutir','sat','ak'),$condition);
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select kdbutir, concat(kdbutir,"  -  ",nmbutir)urbutir from butir where ' . implode(' and ',$condition) . ' ' ;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
}