<?php
Class Mtbljnsangkut extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('tbljnsangkut',array('kdangkut','angkut')));
    }
}