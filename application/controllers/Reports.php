<?php
Class Reports extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('fpdf');
    }
    function index(){
        $this->load->view('rincian/report');
    }
    function show(){
        $this->load->view('html2pdf/tables');
    }
    function columns(){
        $this->load->view('fpdf/sifung');
    }
    function laporan(){
        $this->load->view('rincian/laporan');
    }
}