<?php
Class Kegiatan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('historykegiatan');
        $this->load->model('mheader');
        $this->load->model('mrincian');
        $this->load->model('pegwdata');
        $this->load->model('mprop');
        $this->load->model('mcapaian');
        $this->load->model('msubbutir');
        $this->load->library('auth');
        $this->load->library('fpdf');
        $this->load->library('fpdfmulticell');
        $this->load->library('sifungdate');
        //$this->load->library('wordwrap');
        $this->load->library('pujipdf2');

    }
	function index(){
        $this->auth->checksession();
        $data['title']   = $this->uri->segment(2);
        $data['isactive'] = array(
            'list'=>'active','dashboard'=>'','profile'=>''
        );
        $data['objs'] = $this->mcapaian->get(array('pelaksana'=>$_SESSION['user']));
        $this->load->view('frontend/list', $data);
    }
    function save(){
        $params = $this->input->post();
        echo json_encode($this->historykegiatan->create($params));
    }
    function gets(){
        echo json_encode($this->historykegiatan->gets());
    }
    function destroy_session(){
        session_destroy();
    }
    function getdatas(){
        echo '{"data":[{
            "pelaksana": "000000000000001902",
            "kdbutir": "D1001",
            "target": "Bla-bla",
            "period": "2022"
        }]}';
    }
    function show(){
        $this->auth->checksession();
        $butir = $this->mcapaian->get2(array('a.id'=>$this->uri->segment(3)));
        $data['title']   = humanize($this->uri->segment(1));
        $data['isactive'] = array(
            'list'=>'active','dashboard'=>'','profile'=>''
        );
        $data['id'] = $this->uri->segment(3);
        $data['pemberi'] = array();

        $data['subbutir'] = $this->elementhelper->paramstocombo(
            $this->msubbutir->getwithtext(array(
                'kdbutir'=>$butir['res'][0]->kdbutir)),array(
            'key'=>'kdsubutir','val'=>'butiranak'
        ));
  
        $data['navigation'] = array(
            array('title'=>'Home','url'=>'/capaian'),
            array('title'=>'Kegiatan','url'=>'/'),
            array('title'=>'','url'=>'/')
        );
        $data['prop'] = array();
        $data['kdbutir'] = $butir['res'][0]->kdbutir;
        $data['butirkegiatan'] = $butir['res'][0]->kdbutir . ' - ' . $butir['res'][0]->nmbutir;
        $data['objs'] = $this->mheader->get(array('id'=>$this->uri->segment(3)));
        $data['pemberi'] = $this->elementhelper->paramstocombo($this->pegwdata->getwithtext(array(
            '1'=>'1',
        )),array(
            'key'=>'unip',
            'val'=>'fnme'
        ));
        $data['prop'] = $this->elementhelper->paramstocombo($this->pegwdata->getlokasi($_SESSION['user'],array('1'=>'1')),
        array(
            'key'=>'kdupt',
            'val'=>'pelayanan'
        ));
         $this->load->view('kegiatan/list', $data);
    }
    function remove(){
        $urt = $this->uri->segment(3);
        echo json_encode($this->mheader->remove(array('urt'=>$urt)));
    }
    function get_lokasi(){
        $params = $this->input->post();
        echo json_encode($this->pegwdata->getlokasi(
            $_SESSION['user'],
            array('a.kdpel'=>'"'.$_SESSION['kdpel'].'"','a.kdupt'=>'"'.$_SESSION['kdupt'].'"')));
    }
    function getdata(){
        $params = $this->input->post();
        echo json_encode($this->mheader->get(array('urt'=>$params['urt'])));
    }
    function update(){
        $params = $this->input->post();
        echo json_encode($this->mheader->update(
            $params,array('urt'=>$params['urt'])
        ));
    }
    function report(){
        $urt = $this->uri->segment(3);
        $header = $this->mheader->getCustom(array('a.urt'=>$urt));
        //$rincian = $this->mrincian->getme(array('urtx'=>$this->uri->segment(3)));
        //$data['rincian'] = $rincian['res'][0];
        $data['header'] = $header['res'][0];
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        $this->load->view('kegiatan/report',$data);
    }
    function pdf(){
        $urt = $this->uri->segment(3);
        $header = $this->mheader->getCustom(array('a.urt'=>$urt));
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $data['header'] = $header['res'][0];
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        
        $this->load->view('kegiatan/pujipdf2',$data);
    }
    function xls(){
        $this->load->model('mrincian');
        $urt = $this->uri->segment(3);
        $header = $this->mheader->getCustom(array('a.urt'=>$urt));
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $data['header'] = $header['res'][0];
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        $this->load->view('kegiatan/xls',$data);
    }
    function pdfdraft1(){
        $urt = $this->uri->segment(3);
        $header = $this->mheader->getCustom(array('a.urt'=>$urt));
        $data['header'] = $header['res'][0];
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        $this->load->view('kegiatan/pdfdraft2',$data);
    }
    function pdfpuji(){
        $urt = $this->uri->segment(3);
        $header = $this->mheader->getCustom(array('a.urt'=>$urt));
        $data['header'] = $header['res'][0];
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        $this->load->view('kegiatan/pujipdf',$data);
    }
}    
