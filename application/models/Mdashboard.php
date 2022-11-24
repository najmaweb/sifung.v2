<?php
Class Mdashboard extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get(){
        $sql = 'SELECT pelaksana,a.kdsubutir,tgops,COUNT(urtx)frek FROM rincian01 a  ';
        $sql.= 'LEFT OUTER JOIN header b ON b.kdsubutir=a.kdsubutir  ';
        $sql.= 'GROUP BY a.kdsubutir,tgops  ';
        $sql.= 'ORDER BY tgops ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
    function getsubutirs(){
        $sql = 'select distinct kdsubutir from header ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}