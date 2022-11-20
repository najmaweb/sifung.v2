<?php
Class Msubbutir extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . ' = ' . $val);
        }
        $sql = 'select kdbutir, kdsubutir, butiranak from butiranak ';
        $sql.= 'where ' . implode(' and ', $condition) . ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select kdbutir, kdsubutir, butiranak from butiranak ';
        $sql.= 'where ' . implode(' and ', $condition) . ' ';
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
}