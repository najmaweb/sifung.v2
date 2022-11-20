<?php
Class Elementhelper {
    function paramstocombo($params,$keyval,$pilihlah=true){
        //print_r($params['rows']);
        $out = array();
        $key = $keyval['key'];
        $val = $keyval['val'];
        foreach($params['res'] as $param){
            if($pilihlah){
                $out["-"] = "Pilihlah";
            }
                $out[$param->$key] = $param->$val;
            }
            return $out;
        }
}