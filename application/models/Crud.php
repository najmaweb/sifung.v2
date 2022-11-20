<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($tableName,$params){
        $keys = array();
        $vals = array();
        foreach($params as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'insert into '.$tableName.' ';
        $sql.= '('.implode(",",$keys).') ';
        $sql.=' values ';
        $sql.= '("'.implode('","',$vals).'") ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return array('sql'=>$sql);
    }
    function read($tableName,$params){
        $sql = 'select * from ' . $tableName . ' ';
        $ci = & get_instance();
        $que = $ci->query($sql);
        return array(
            'res'=>$que->result(),'cnt'=>$que->num_rows()
        );
    }
}