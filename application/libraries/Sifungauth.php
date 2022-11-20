<?php
Class Sifungauth {
    function createsalt($params){
        $salt = sha1($params['password'].'sifung');
        $password = sha1($salt.$params['password']);
        return array(
            'unip'=>$params['unip'],
            'salt'=>$salt,'cntsalt'=>strlen($salt),
            'password'=>$password,'cntpwd'=>strlen($password)
        );
    }
    function isauth($params){
        if(sha1($params['salt'].$params['userpassword'])===$params['password']){
            return true;
        }
        return false;
    }
    function update($params){}
    function getuser($params){}
    function getusers($params){}
    function changepassword($params){}
}