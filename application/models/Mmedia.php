<?php
Class Mmedia extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('media',array('kdpem','nipem','suhu')));
    }
    function getcustom(){
        $sql = 'select kdpem,nipem,nepem,suhu from media where left(kdpem,1)="1" ';
        $sql.= 'order by nipem asc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function getcustom2($conditions){
        $cond = array();
        foreach($conditions as $key=>$val){
            array_push($cond,$key.'="'.$val.'"');
        }
        $condstr = implode(',',$cond);
        $sql = 'select kdpem,nipem,nepem,suhu,pulsus,respirasi from media where  '.$condstr.' ';
        $sql.= 'order by nipem asc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function getcustom3($conditions){
        $cond = array();
        foreach($conditions as $key=>$val){
            array_push($cond,$key.' '.$val.' ');
        }
        $condstr = implode(',',$cond);
        $sql = 'select kdpem,nipem,nepem,suhu,pulsus,respirasi from media where  '.$condstr.' ';
        $sql.= 'order by nipem asc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
}