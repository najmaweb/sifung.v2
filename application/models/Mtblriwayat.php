<?php
Class Mtblriwayat extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return ($this->crud->gets('tblriwayat',array('kdriwayat','riwayat')));
    }
}