<?php
Class Crud {
    function gets($table,$cols){
        $sql = 'select ' .implode(',',$cols). ' from ' . $table;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'res'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
    function getsegmented($table,$cols,$segment,$offset){
        $sql = 'select ' .implode(',',$cols). ' from ' . $table;
        $sql.= 'limit ' . $segment . ',' . $offset;
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'rows'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
    function get($table,$cols,$conditions){
        $condition = array();
        $sql = 'select ' .implode(',',$cols). ' from ' . $table . ' ';
        $sql.= 'where ';
        foreach($conditions as $key=>$val){
            array_push ($condition,$key . '="' . $val . '"');
        }
        $sql.= ''.implode(' and ',$condition);
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'rows'=>$query->result(),
            'cnt'=>$query->num_rows()
        );
    }
    function create($table,$cols){
        $keys = array();$vals = array();
        foreach($cols as $col=>$val){
            array_push($keys,$col);
            array_push($vals,$val);
        }
        $sql = 'insert into ' . $table . ' ';
        $sql.= '(' . implode(',',$keys) . ') ';
        $sql.= 'values ';
        $sql.= '("' . implode('","',$vals) . '") ';
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        
        return array('sql'=>$sql); 
        return array(
            'insert_id'=>$ci->db->insert_id(),
        );
    }
    function update($table,$cols,$conditions){
        $toupdate = array();$condition = array();
        foreach($cols as $key=>$val){
            array_push($toupdate,$key.'="'.$val.'" ');
        }
        foreach($conditions as $key=>$val){
            array_push ($condition,$key . '="' . $val . '"');
        }
        $sql = 'update ' . $table . ' ';
        $sql.= 'set ' . implode(',',$toupdate);
        $sql.= 'where ' . implode(',',$condition);
        $ci = & get_instance();
        $query = $ci->db->query($sql);
        return array(
            'sql' => $sql
        );
    }
    function remove($table,$conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . '="' . $val . '" ');
        }
        $sql = 'delete from ' . $table . ' ';
        $sql.= 'where ' . implode(' and ',$condition);
        $ci = & get_instance();
        $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
}