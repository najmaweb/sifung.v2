<?php
Class Mtblpresen extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('tblpresen',array('kdpresen','presen')));
    }
}