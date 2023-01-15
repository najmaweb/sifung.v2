<?php
Class Test4 extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo "Dukuh Tengah";
    }
    function chart1(){
        $this->load->view('test4/chart1');
    }
    function flot1(){
        $this->load->view('test4/flot1');
    }
    function select2(){
        $this->load->view('test4/select2');
    }
}