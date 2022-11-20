<?php 
Class Pegwdata extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function getrelated(){
        $sql = 'select a.unip,a.fnme,a.jbfg,a.jbtn,a.kdpel,a.kdupt,b.urjjfg,c.urjbfg from progev.pegwdata a left outer join progev.jenjang b on b.jjfg=a.jjfg ';
        $sql.= 'left outer join progev.jabfung c on c.jbfg=a.jbfg ';
        $sql.= 'where a.unip='.$_SESSION['user'].' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array('rows'=>$que->result(),'cnt'=>$que->num_rows());
    }
    function get($condition){
        return $this->crud->get('progev.pegwdata',array('unip','fnme','jbfg','jjfg','jbtn','kdpel','kdupt'),$condition);
    }
    function create($obj){
        return $this->crud->create('header',array(
            'unip'=>$obj['unip'],
            'gldp'=>$obj['gldp'],
            'fnme'=>$obj['fnme'],
            'glbl'=>$obj['glbl'],
            'jbtn'=>$obj['jbtn'],
            'esch'=>$obj['esch'],
            'lgkr'=>$obj['lgkr'],
            'lktg'=>$obj['lktg'],
            'stkr'=>$obj['stkr'],
            'spvr'=>$obj['spvr'],
            'psts'=>$obj['psts'],
            'jbfg'=>$obj['jbfg'],
            'tmtg'=>$obj['tmtg'],
        ));
    }
    function getwithtext($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'="'.$val.'" ');
        }
        $sql = 'select unip, concat(unip,"  -  ",fnme)fnme from progev.pegwdata where ' . implode(' and ',$condition) . ' ' ;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
    function remove($unip){
        return $this->crud->remove('pegwdata',array('unip'=>$unip));
    }
    function getlokasi($unip,$conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . '=' . $val);
        }
        $sql = 'select distinct a.kdpel, b.kdupt, b.pelayanan from progev.pegwdata a ';
        $sql.= 'left outer join progev.tblpelayanan b on  substring(b.kdupt,1,3)=substring(a.kdupt,1,3) ';
        $sql.= 'where a.unip = "' . $unip . '" ';
        $sql.= 'and ' . implode(' and ', $condition);
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'sql'=>$sql,
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
    function getlokasiprev($unip){
        $sql = 'select a.kdpel, b.kdupt, b.pelayanan from progev.pegwdata a ';
        $sql.= 'left outer join progev.tblpelayanan b on b.kdpel=a.kdpel and b.kdupt=a.kdupt ';
        $sql.= 'where a.unip = "' . $unip . '" ';
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
}