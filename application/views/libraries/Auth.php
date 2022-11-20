<?php
Class Auth {
    function is_authenticated($params){
        return true;
    }
    function is_session_expired(){
        if(!$_SESSION['user']){
            return true;
        }else{
            return false;
        }
    }
    function checksession(){
        if($this->is_session_expired()){
            redirect('/home');
        }
    }
}