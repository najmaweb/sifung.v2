<?php
Class Mtblrekam extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('tblrekam',array('kdrekam','rekam')));
    }
}