<?php
Class Elementhelper {
    function paramstocombo($params,$keyval){
        //print_r($params['rows']);
        $out = array();
        $key = $keyval['key'];
        $val = $keyval['val'];
    foreach($params['res'] as $param){
            $out[$param->$key] = $param->$val;
        }
        return $out;
    }
}