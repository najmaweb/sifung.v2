<?php
Class Mtblsikonangkut extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('tblsikonangkut',array('kdsikon','sikon')));
    }
}