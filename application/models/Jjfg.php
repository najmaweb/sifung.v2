<?php
Class Jjfg extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('butir',array('jjfg','jbfg'));
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select kdbutir, concat(kdbutir,"  -  ",nmbutir)butir from butir where ' . implode(' and ',$condition) . ' ' ;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
}