<?php
Class Rincian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mrincian');
        $this->load->model('msubbutir');
        $this->load->model('mtblrekam');
        $this->load->model('mtblturgor');
        $this->load->model('mtblsentuh');
        $this->load->model('mtblriwayat');
        $this->load->model('mtblpresen');
        $this->load->model('mtblnafsu');
        $this->load->model('mtbljnsangkut');
        $this->load->model('mtblsikonangkut');
        $this->load->model('mtbldaerah');
        $this->load->model('mmedia');
        $this->load->model('mheader');
        $this->load->model('mtblsuhu');
        $this->load->library('sifungdate');
        $this->load->library('fpdf');
        $this->load->library('fpdfmulticell');
        $this->load->library('crud');
    }
    function index(){}
    function getmedia(){
        $param = $this->uri->segment(3);
        $objs = $this->mmedia->getcustom2(array("kdpem"=>$param));
        echo json_encode($objs['res'][0]);
    }
    function show(){
        $this->auth->checksession();
        $subbutir = $this->msubbutir->gets(array('kdbutir'=>'"D1001"'));
        $me =  $this->mrincian->getme(array(
            'a.urt'=>$this->uri->segment(3)
        ));
        $parent = $this->mrincian->getparent($this->uri->segment(3));
        $header = $this->mheader->getCustom(array('a.urt'=>$this->uri->segment(3)));
        $theader = $header['res'][0];
        $data['header'] = $header['res'][0];
        $data['parent'] = $parent;
        $butiranak = $this->msubbutir->getwithtext(array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir));
        $data['butiranak'] = $butiranak['res'][0];
        $data['isactive'] = array(
            'list'=>'active','dashboard'=>'','profile'=>''
        );
        $data['urt'] = $this->uri->segment(3);
        $data['title'] = 'Rincian';
        $data['navigation'] = array(
            array('title'=>'Home','url'=>'/capaian'),
            array('title'=>'Kegiatan','url'=>'/kegiatan/show/'.$parent),
            array('title'=>'Rincian','url'=>'#')
        );
        $mmedia = $this->mmedia->getcustom();
        switch($theader->kdsubutir){
            case 'a':
                $data['media'] =  $this->elementhelper->paramstocombo($this->mmedia->getcustom(),array(
                    'key'=>'kdpem','val'=>'nipem'
                ));        
                break;
            case 'b':
                $data['media'] =  $this->elementhelper->paramstocombo($this->mmedia->getcustom3(array('substring(kdpem,1,1)'=>'>1')),array(
                    'key'=>'kdpem','val'=>'nipem'
                ));        
                break;
        }
        if($me['cnt']>0){
            $data['me'] = $me['res'];
        }else{
            $data['me'] = array();
        }
        //echo $me['sql'];
        $data['cmbkdsubutir'] =  $this->elementhelper->paramstocombo($subbutir,array(
            'key'=>'kdsubutir','val'=>'butiranak'
        ));
        $data['tblrekam'] =  $this->elementhelper->paramstocombo($this->mtblrekam->gets(),array(
            'key'=>'kdrekam','val'=>'rekam'
        ));
        $data['tblturgor'] =  $this->elementhelper->paramstocombo($this->mtblturgor->gets(),array(
            'key'=>'kdturgor','val'=>'turgor'
        ));
        $data['tblsentuh'] =  $this->elementhelper->paramstocombo($this->mtblsentuh->gets(),array(
            'key'=>'kdsentuh','val'=>'sentuh'
        ));
        $data['tblriwayat'] =  $this->elementhelper->paramstocombo($this->mtblriwayat->gets(),array(
            'key'=>'kdriwayat','val'=>'riwayat'
        ));
        $data['tblpresen'] =  $this->elementhelper->paramstocombo($this->mtblpresen->gets(),array(
            'key'=>'kdpresen','val'=>'presen'
        ));
        $data['tblnafsu'] =  $this->elementhelper->paramstocombo($this->mtblnafsu->gets(),array(
            'key'=>'kdnafsu','val'=>'nafsu'
        ));
        $data['tbljnsangkut'] =  $this->elementhelper->paramstocombo($this->mtbljnsangkut->gets(),array(
            'key'=>'kdangkut','val'=>'angkut'
        ));
        $data['tblsikonangkut'] =  $this->elementhelper->paramstocombo($this->mtblsikonangkut->gets(),array(
            'key'=>'kdsikon','val'=>'sikon'
        ));
        $data['tbldaerah'] =  $this->elementhelper->paramstocombo($this->mtbldaerah->getnegaradaerah(),array(
            'key'=>'kd','val'=>'ur'
        ));
        $data['asaldaerah'] =  $this->elementhelper->paramstocombo($this->mtbldaerah->getdaerah(),array(
            'key'=>'kd','val'=>'ur'
        ));
        $data['asalnegara'] =  $this->elementhelper->paramstocombo($this->mtbldaerah->getnegara(),array(
            'key'=>'kd','val'=>'ur'
        ));
        $data['tblsuhu'] =  $this->elementhelper->paramstocombo($this->mtblsuhu->gets(),array(
            'key'=>'kdhewan','val'=>'suhu'
        ));
        



        $data['pensuhu'] = $this->elementhelper->paramstocombo($this->crud->gets('pensuhu',['kdpensuhu','urpensuhu']),array(
            'key'=>'kdpensuhu','val'=>'urpensuhu'
        ),false);
        $data['penpulsus'] = $this->elementhelper->paramstocombo($this->crud->gets('penpulsus',['kdpenpulsus','urpenpulsus']),array(
            'key'=>'kdpenpulsus','val'=>'urpenpulsus'
        ),false);
        $data['penrespirasi'] = $this->elementhelper->paramstocombo($this->crud->gets('penrespirasi',['kdpenrespirasi','urpenrespirasi']),array(
            'key'=>'kdpenrespirasi','val'=>'urpenrespirasi'
        ),false);
        $data['penlimfo'] = $this->elementhelper->paramstocombo($this->crud->gets('penlimfo',['kdpenlimfo','urpenlimfo']),array(
            'key'=>'kdpenlimfo','val'=>'urpenlimfo'
        ),false);
        $data['penmukosa'] = $this->elementhelper->paramstocombo($this->crud->gets('penmukosa',['kdpenmukosa','urpenmukosa']),array(
            'key'=>'kdpenmukosa','val'=>'urpenmukosa'
        ),false);
        $data['penturgor'] = $this->elementhelper->paramstocombo($this->crud->gets('penturgor',['kdpenturgor','urpenturgor']),array(
            'key'=>'kdpenturgor','val'=>'urpenturgor'
        ),false);
        $data['penlesi'] = $this->elementhelper->paramstocombo($this->crud->gets('penlesi',['kdpenlesi','urpenlesi']),array(
            'key'=>'kdpenlesi','val'=>'urpenlesi'
        ),false);

        $data['kelamin'] = $this->elementhelper->paramstocombo($this->crud->gets('tblkelamin',['kdkelamin','jnskelamin']),array(
            'key'=>'kdkelamin','val'=>'jnskelamin'
        ));
        $data['discharge'] = $this->elementhelper->paramstocombo($this->crud->gets('tbldischarge',['kddischarge ','adadischarge']),array(
            'key'=>'kddischarge','val'=>'adadischarge'
        ));
        $data['penkemasan'] = $this->elementhelper->paramstocombo($this->crud->gets('penkemas',['kdpenkemas','urpenkemas']),array(
            'key'=>'kdpenkemas','val'=>'urpenkemas'
        ));
        $data['penlabel'] = $this->elementhelper->paramstocombo($this->crud->gets('penlabel',['kdpenlabel','urpenlabel']),array(
            'key'=>'kdpenlabel','val'=>'urpenlabel'
        ));
        $data['pensegel'] = $this->elementhelper->paramstocombo($this->crud->gets('pensegel',['kdpensegel','urpensegel']),array(
            'key'=>'kdpensegel','val'=>'urpensegel'
        ));
        $data['penkonsistensi'] = $this->elementhelper->paramstocombo($this->crud->gets('penkonsistensi',['kdpenkonsistensi','urpenkonsistensi']),array(
            'key'=>'kdpenkonsistensi','val'=>'urpenkonsistensi'
        ));
        $data['penwarna'] = $this->elementhelper->paramstocombo($this->crud->gets('penwarna',['kdpenwarna','urpenwarna']),array(
            'key'=>'kdpenwarna','val'=>'urpenwarna'
        ));
        $data['penbau'] = $this->elementhelper->paramstocombo($this->crud->gets('penbau',['kdpenbau','urpenbau']),array(
            'key'=>'kdpenbau','val'=>'urpenbau'
        ));
        $data['penrasa'] = $this->elementhelper->paramstocombo($this->crud->gets('penrasa',['kdpenrasa','urpenrasa']),array(
            'key'=>'kdpenrasa','val'=>'urpenrasa'
        ));
        $data['penpH'] = $this->elementhelper->paramstocombo($this->crud->gets('penpH',['kdpenpH','urpenpH']),array(
            'key'=>'kdpenpH','val'=>'urpenpH'
        ));
        $data['penkondisiumum'] = $this->elementhelper->paramstocombo($this->crud->gets('penkondisiumum',['kdpenkondisiumum','urpenkondisiumum']),array(
            'key'=>'kdpenkondisiumum','val'=>'urpenkondisiumum'
        ));
        $this->load->view('rincian/list',$data);
    }
    function get_datas(){
        $id = $this->uri->segment(3);
        $urt = $this->uri->segment(4);
        $objs = $this->mrincian->getme(array('a.id'=>$id,'a.urt'=>$urt));
        echo '{"data":'.json_encode($objs['res']).'}';
        //echo $objs['sql'];
    }
    function get(){
        $params = $this->input->post();
        echo json_encode($this->mrincian->getme(array('urtx'=>$params['urtx'])));
    }
    function save(){
        $params = $this->input->post();
        echo json_encode($this->mrincian->create($params));
    }
    function update(){
        $params = $this->input->post();
        echo json_encode($this->mrincian->update($params));
    }
    function laporan(){
        $this->load->view('rincian/laporan');
    }
    function showreport(){
        $this->load->view('rincian/laporan2');
    }
    function rreport(){
        //$header = $this->mrincian->getheaderbyurtx($this->uri->segment(3));
        $parent = $this->mrincian->getparent($this->uri->segment(3));
        $header = $this->mheader->getCustom(array('a.id'=>$parent));
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $data['header'] = $header['res'][0];
        $butiranak = $this->msubbutir->getwithtext(
            array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir)
        );
        $data['butiranak'] = $butiranak['res'][0];

        $this->load->view('rincian/rpt',$data);
    }
    function xlsreport(){
        $parent = $this->mrincian->getparent($this->uri->segment(3));
        $header = $this->mheader->getCustom(array('a.id'=>$parent));
        $rincian = $this->mrincian->getme(array('a.urt'=>$this->uri->segment(3)));
        $data['rincian'] = $rincian['res'];
        $data['header'] = $header['res'][0];
        $butiranak = $this->msubbutir->getwithtext(
            array('kdbutir'=>$header['res'][0]->kdbutir,'kdsubutir'=>$header['res'][0]->kdsubutir)
        );
        $data['butiranak'] = $butiranak['res'][0];

        $this->load->view('rincian/xls',$data);
    }
    function remove(){
        echo json_encode($this->mrincian->remove($this->input->post()));
    }
    function tgopstoamount(){
        $params = $this->input->post();
        $params['pelaksana'] = $_SESSION['user'];
        echo json_encode($this->mrincian->tgopstoamount($params));
    }
    function tgopstoamountdetail(){
        $kdbutirs = $this->input->post();
        $params['pelaksana'] = $_SESSION['user'];
        $params['kdbutirs'] = $kdbutirs['kdbutirs'];//array('D2022','D2033','D2035');
        echo json_encode($this->mrincian->tgopstoamountdetail($params));
    }
    function duplicate(){
        $urtx = $this->uri->segment(3);
        echo json_encode($this->mrincian->duplicate($urtx));
    }
}