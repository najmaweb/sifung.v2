<?php
Class Mrincian extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('rincian01',array('id','urt','urtx','kdbutir','kdbutiranak','butiranak','pemilik','media'));
    }
    function get($condition){
        return $this->crud->get('rincian01',array('id','urt','urtx','kdbutir','kdbutiranak','butiranak','pemilik','media'),$condition);
    }
    function getme($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'='.$val);
        }
        $sql = 'select a.id,a.urt,urtx,b.kdbutir,b.kdsubutir,butiranak,nops,tgops,date_format(tgops,"%d %b %Y")tgopsid,pemilik,nipem,o.kdnafsu,o.nafsu,a.penampakan,n.presen,a.kondisi,a.bulukulit,a.discharge,a.keterangan, ';
        $sql.= 'a.dok1,a.dok2,a.dok3,a.dok4,a.stat1,a.stat2,a.stat3,a.stat4,';
        $sql.= 'case stat1 when "0" then "tidak absah" when "1" then "absah" end dstat1,';
        $sql.='case stat2 when "0" then "tidak absah" when "1" then "absah" end dstat2,';
        $sql.='case stat3 when "0" then "tidak absah" when "1" then "absah" end dstat3,';
        $sql.='case stat4 when "0" then "tidak absah" when "1" then "absah" end dstat4,';
        $sql.= 'a.pulsus,a.nilaipulsus,a.suhu,a.nilaisuhu,a.respirasi,a.nilairespirasi,a.nilailimfo,a.nilaimukosa,a.nilaiturgor,a.nilailesi,a.mukosa,a.limfo,a.turgor,a.lesi,a.diagnosa,a.tindaklanjut,';
        $sql.= 'a.jmlhewan,q.kdturgor,q.turgor mediaturgor,a.raba,p.sentuh,m.kdriwayat,m.riwayat,a.angkutan,k.angkut,a.kondisiangkutan,l.sikon,a.media,a.pemilik,a.jmltotal, a.ketklinis,';
        $sql.= 'a.jmlkemasan,a.jnskemasan,';
        $sql.= 'a.jnsPPK,PPK,a.tujuan kdtujuan,case length(a.tujuan) when 2 then i.urneg when 5 then j.rgnm end tujuan,';
        $sql.= 'a.asal kdasal,case length(a.asal) when 2 then g.urneg when 5 then h.rgnm end asal, ';
        $sql.= 'catatan,e.nipem,e.suhu mediasuhu,e.pulsus mediapulsus,e.respirasi mediarespirasi,f.nmbutir,a.kesimpulan, a.tmst,';
        $sql.= 'kdrekam,r.rekam ,s.jnskelamin,t.adadischarge, ';
        $sql.= 'pensuhu.urpensuhu,penpulsus.urpenpulsus,penrespirasi.urpenrespirasi,penlimfo.urpenlimfo,penmukosa.urpenmukosa,penturgor.urpenturgor,penlesi.urpenlesi, ';
        $sql.= 'tblstatdok1.sikonstatus sikonstatus1,tblstatdok2.sikonstatus sikonstatus2,tblstatdok3.sikonstatus sikonstatus3,tblstatdok4.sikonstatus sikonstatus4, ';
        $sql.= 'kemasan,label,warna,rasa,segel,konsistensi,bau,temperatur, ';
        $sql.= 'nilaikemasan,nilaisegel,nilailabel,nilaitemperatur,nilaikondisiumum,nilaiph,ph,nilaikonsistensi,nilaiwarna,nilaibau,nilairasa,kondisiumum, ';
        $sql.= 'penkemas.urpenkemas,pensegel.urpensegel,penkonsistensi.urpenkonsistensi,penwarna.urpenwarna,penlabel.urpenlabel, ';
        $sql.= 'penbau.urpenbau,penrasa.urpenrasa,penpH.urpenpH,pensuhu.urpensuhu,penkondisiumum.urpenkondisiumum,pentemperatur.urpentemperatur ';
        $sql.= 'from rincian01 a ';
        $sql.= 'left outer join header b on b.urt = a.urt ';
        $sql.= 'left outer join butiranak c on c.kdbutir = b.kdbutir and c.kdsubutir=b.kdsubutir ';
        $sql.= 'left outer join jenisPPK d on d.jnsPPK=a.jnsPPK ';
        $sql.= 'left outer join media e on e.kdpem=a.media ';
        $sql.= 'left outer join butir f on f.kdbutir = b.kdbutir ';
        $sql.= 'left outer join tblnegara g on g.kdneg=a.asal ';
        $sql.= 'left outer join tbldaerah h on h.rgkd=a.asal ';
        $sql.= 'left outer join tblnegara i on i.kdneg=a.tujuan ';
        $sql.= 'left outer join tbldaerah j on j.rgkd=a.tujuan ';
        $sql.= 'left outer join tbljnsangkut k on k.kdangkut=a.angkutan ';
        $sql.= 'left outer join tblsikonangkut l on l.kdsikon = a.kondisiangkutan ';
        $sql.= 'left outer join tblriwayat m on m.kdriwayat=a.riwayat ';
        $sql.= 'left outer join tblpresen n on n.kdpresen=a.penampakan ';
        $sql.= 'left outer join tblnafsu o on o.kdnafsu=a.nafsu ';
        $sql.= 'left outer join tblsentuh p on p.kdsentuh=a.raba ';
        $sql.= 'left outer join tblturgor q on q.kdturgor=a.turgor ';
        $sql.= 'left outer join tblrekam r on r.kdrekam=a.rekam ';
        $sql.= 'left outer join tblkelamin s on s.kdkelamin=a.kelamin ';
        $sql.= 'left outer join tbldischarge t on t.kddischarge=a.discharge ';
        $sql.= 'left outer join pensuhu on pensuhu.kdpensuhu=a.nilaisuhu ';
        $sql.= 'left outer join penpulsus on penpulsus.kdpenpulsus=a.nilaipulsus ';
        $sql.= 'left outer join penrespirasi on penrespirasi.kdpenrespirasi=a.nilairespirasi ';
        $sql.= 'left outer join penlimfo on penlimfo.kdpenlimfo=a.nilailimfo ';
        $sql.= 'left outer join penmukosa on penmukosa.kdpenmukosa=a.nilaimukosa ';
        $sql.= 'left outer join penturgor on penturgor.kdpenturgor=a.nilaiturgor ';
        $sql.= 'left outer join penlesi on penlesi.kdpenlesi=a.nilailesi ';
        $sql.= 'left outer join tblstatdok tblstatdok1 on tblstatdok1.kdstatus=a.stat1 ';
        $sql.= 'left outer join tblstatdok tblstatdok2 on tblstatdok2.kdstatus=a.stat2 ';
        $sql.= 'left outer join tblstatdok tblstatdok3 on tblstatdok3.kdstatus=a.stat3 ';
        $sql.= 'left outer join tblstatdok tblstatdok4 on tblstatdok4.kdstatus=a.stat4 ';

        $sql.= 'left outer join pentemperatur on pentemperatur.kdpentemperatur=nilaitemperatur ';
        $sql.= 'left outer join penkemas on penkemas.kdpenkemas=nilaikemasan ';
        $sql.= 'left outer join pensegel on pensegel.kdpensegel=nilaisegel ';
        $sql.= 'left outer join penlabel on penlabel.kdpenlabel=nilailabel ';
        $sql.= 'left outer join penkonsistensi on penkonsistensi.kdpenkonsistensi=nilaikonsistensi ';
        $sql.= 'left outer join penwarna on penwarna.kdpenwarna=nilaiwarna ';
        $sql.= 'left outer join penbau on penbau.kdpenbau=nilaibau ';
        $sql.= 'left outer join penrasa on penrasa.kdpenrasa=nilairasa ';
        $sql.= 'left outer join penpH on penpH.kdpenpH=nilaiph ';
        $sql.= 'left outer join penkondisiumum on penkondisiumum.kdpenkondisiumum=nilaikondisiumum ';
        $sql.= 'where ' . implode(' and ',$condition) . ' ';
        $sql.= 'order by a.id,a.urt,a.urtx desc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result(),'sql'=>$sql
        );
    }
    function create($obj){
        return $this->crud->create('rincian01',$obj);
    }
    function remove($params){
        return $this->crud->remove('rincian01',$params);
    }
    function save($params){
        return $this->crud->create('rincian01',$params);
    }
    function getparent($urt){
        $sql = 'select id from header where urt = ' . $urt . ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result[0]->id;
        }
        return false;
    }
    function getheaderbyurtx($urtx){
        $sql = 'select id,urt from rincian01 where urtx = ' . $urtx . ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result[0];
        }
        return false;
    }
    function update($params){
        return $this->crud->update('rincian01',$params,array('urtx'=>$params['urtx']));
    }
    function tgopstoamount($params){
        $sql = 'SELECT a.tgops,count(urtx)cnt ';
        $sql.= 'FROM rincian01 a left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana = "' . $params['pelaksana'] . '" ';
        $sql.= 'GROUP by a.tgops';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result;
        }
        return false;
    }
    function tgopstoamountdetail($params){
        $arrbutir = array();
        foreach($params['kdbutirs'] as $key=>$val){
            array_push($arrbutir,$val.'.cnt cnt'.$val);
        }
        $sql = 'select A.tgops,'.implode(',',$arrbutir).' from ';
        $sql.= '(select distinct tgops from rincian01 a ';
        $sql.= 'left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana="'.$params['pelaksana'].'")A ';
        foreach($params['kdbutirs'] as $kdbutir){
        $sql.= 'left outer join ';
        $sql.= '(SELECT a.tgops,count(urtx)cnt ';
        $sql.= 'FROM rincian01 a left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana = "' . $params['pelaksana'] . '" ';
        $sql.= 'and b.kdbutir = "' . $kdbutir . '" ';
        $sql.= 'GROUP by b.kdbutir,a.tgops ) ' . $kdbutir . ' ';
        $sql.= 'on '.$kdbutir.'.tgops=A.tgops ';
        }
        //echo $sql;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result;
        }
        return false;
    }



    function tgopstoamountdetail_($params){
        $sql = 'select A.tgops,B.cnt cntA,C.cnt cntB from ';
        $sql.= '(select distinct tgops from rincian01 a ';
        $sql.= 'left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana="'.$params['pelaksana'].'")A ';
        $sql.= 'left outer join ';
        $sql.= '(SELECT a.tgops,count(urtx)cnt ';
        $sql.= 'FROM rincian01 a left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana = "' . $params['pelaksana'] . '" ';
        $sql.= 'and b.kdbutir = "' . $params['kdbutir'] . '" ';
        $sql.= 'GROUP by b.kdbutir,a.tgops )B ';
        $sql.= 'on B.tgops=A.tgops ';
        $sql.= 'left outer join ';
        $sql.= '(SELECT b.kdbutir,a.tgops,count(urtx)cnt ';
        $sql.= 'FROM rincian01 a left outer join header b on b.urt=a.urt ';
        $sql.= 'where b.pelaksana = "' . $params['pelaksana'] . '" ';
        $sql.= 'and b.kdbutir = "' . $params['kdbutir2'] . '" ';
        $sql.= 'GROUP by a.tgops)C ';
        $sql.= 'on A.tgops=C.tgops';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result;
        }
        return false;
    }
    function duplicate($urtx){
        $sql = "insert into rincian01 ";

        $sql.= "( id, urt, kdsubutir, nops, tgops, jnsPPK, media, jmltotal, asal, tujuan, pemilik, ";
        $sql.= "dok1, dok2, dok3, dok4, stat1, stat2, stat3, stat4, jmlhewan, kelamin, ";
        $sql.= "bulukulit, kondisi, nafsu, discharge, keterangan, suhu, pulsus, respirasi, limfo, mukosa, turgor, lesi, ketklinis, ";
        $sql.= "nilaisuhu, nilaipulsus, nilairespirasi, nilailimfo, nilaimukosa, nilaiturgor, nilailesi, ";
        $sql.= "diagnosa, tindaklanjut, jmlkemasan, jnskemasan, kemasan, segel, label, konsistensi, warna, bau, rasa, temperatur, ph, kondisiumum, ";
        $sql.= "nilaikondisiumum, nilaikemasan, nilaisegel, nilailabel, nilaikonsistensi, nilaiwarna, nilaibau, nilairasa, nilaitemperatur, nilaiph, ";
        $sql.= "tmst, riwayat, raba, catatan, rekam, kesimpulan, angkutan, kondisiangkutan, penampakan ) ";

        $sql.= "SELECT id, urt, kdsubutir, nops, tgops, jnsPPK, media, jmltotal, asal, tujuan, pemilik, ";
        $sql.= "dok1, dok2, dok3, dok4, stat1, stat2, stat3, stat4, jmlhewan, kelamin, ";
        $sql.= "bulukulit, kondisi, nafsu, discharge, keterangan, suhu, pulsus, respirasi, limfo, mukosa, turgor, lesi, ketklinis, ";
        $sql.= "nilaisuhu, nilaipulsus, nilairespirasi, nilailimfo, nilaimukosa, nilaiturgor, nilailesi, ";
        $sql.= "diagnosa, tindaklanjut, jmlkemasan, jnskemasan, kemasan, segel, label, konsistensi, warna, bau, rasa, temperatur, ph, kondisiumum, ";
        $sql.= "nilaikondisiumum, nilaikemasan, nilaisegel, nilailabel, nilaikonsistensi, nilaiwarna, nilaibau, nilairasa, nilaitemperatur, nilaiph, ";
        $sql.= "tmst, riwayat, raba, catatan, rekam, kesimpulan, angkutan, kondisiangkutan, penampakan FROM rincian01 ";
        $sql.= "where urtx= '".$urtx."'";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'sql'=>$sql,'res'=>'ok'
        );
    }
}