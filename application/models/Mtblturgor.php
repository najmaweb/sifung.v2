<?php
Class Mtblturgor extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('tblturgor',array('kdturgor','turgor'));
    }
}