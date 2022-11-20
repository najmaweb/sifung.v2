<?php
Class Historykegiatan extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('header',array('id','urt','kdbutir','dasar','pelaksana','pemberi','lokasi','mulai','selesai','ringkasan'));
    }
    function create($obj){
        return $this->crud->create('header',array(
            'urt'=>$obj['urt'],
            'kdbutir'=>$obj['kdbutir'],
            'dasar'=>$obj['dasar'],
            'pelaksana'=>$obj['pelaksana'],
            'pemberi'=>$obj['pemberi'],
            'lokasi'=>$obj['lokasi'],
            'mulai'=>$obj['mulai'],
            'selesai'=>$obj['selesai'],
            'ringkasan'=>$obj['ringkasan'],
        ));
    }
    function remove($id){
        return $this->crud->remove('header',array('id'=>$id));
    }
}
