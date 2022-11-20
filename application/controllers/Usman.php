<?php
Class Usman extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function showusers(){
        $_SESSION['user'] = "test";
        $this->load->view('users/list',array(
            "title"=>"users",
            "pagename"=>"users",
            "navigation"=>array(
                array("url"=>"","title"=>""),
                array("url"=>"","title"=>""),
                array("url"=>"","title"=>"")
            ),
            "isactive"=>array("dashboard"=>"")
        ));
    }
    function datatablesusers(){
        echo '{
            data:[{
                "id:"test1",
                "kode":"test2",
                "nama":"test3",
                "alamat":"test4"
            }]}';
    }
}