<?php
Class Mauth extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }
    function create($params){
        $salt = sha1($params['password']);
        $password = sha1($params['password']+$salt);

    }
}