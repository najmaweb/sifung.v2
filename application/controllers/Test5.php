<?php
Class Test5 extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->library('mympdf');
        $this->load->view('html2pdf/kampret');
    }
}