<?php
Class Hello extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'Hello';
    }
}