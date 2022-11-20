<?php
Class Mprop extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get($condition){
        return $this->crud->get('tblprop',array('kdprop','urprop'),$condition);
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select kdProp, concat(kdProp,"  -  ",urProp)urProp from tblprop where ' . implode(' and ',$condition) . ' ' ;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'rows'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
}