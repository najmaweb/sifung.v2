<?php
Class Butiranak extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select kdbutir, concat(kdsubutir,"  -  ",butiranak)butiranak from butiranak where ' . implode(' and ',$condition) . ' ' ;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }

}