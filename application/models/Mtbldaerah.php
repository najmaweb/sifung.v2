<?php
Class Mtbldaerah extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getnegaradaerah(){
        $sql = 'select kdneg kd,urneg ur from tblnegara ';
        $sql.= 'union ';
        $sql.= 'select rgkd kd,concat(prov," - ",cptl) ur from tbldaerah ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function getnegara(){
        $sql = 'select kdneg kd,urneg ur from tblnegara ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function getdaerah(){
        $sql = 'select rgkd kd,concat(prov," - ",cptl) ur from tbldaerah ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
}