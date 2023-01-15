<?php
Class Mheader extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function get($condition){
        return ($this->crud->get('header',array('id','urt','kdbutir','kdsubutir','dasar','pelaksana','pemberi','lokasi','mulai','selesai','ringkasan'),$condition));
    }
    function getCustom($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . '=' . $val);
        }
        $sql = 'select a.id,a.urt,a.kdbutir,a.kdsubutir,b.butiranak,';
        $sql.= 'a.dasar,a.pelaksana,e.fnme namapelaksana,e.jbtn jbtnpelaksana,c.fnme pemberi,c.jbtn,';
        $sql.= 'a.lokasi,h.pelayanan namaunit,date_format(a.mulai,"%d %b %Y")mulai,date_format(a.selesai,"%d %b %Y")selesai,a.ringkasan, ';
        $sql.= 'case when nops is null then "" else nops end nops,';
        $sql.= 'case when tgops is null then "" else tgops end tgops,f.ak,f.nmbutir,';
        $sql.= 'case when g.rgnm is null then "" else g.rgnm end rgnm, ';
        $sql.= 'count(d.id) jmlsubutir ';
        $sql.= 'from header a ';
        $sql.= 'left outer join butiranak b on b.kdbutir=a.kdbutir and b.kdsubutir=a.kdsubutir ';
        $sql.= 'left outer join progev.pegwdata c on c.unip=a.pemberi ';
        $sql.= 'left outer join rincian01 d on d.urt=a.urt ';
        $sql.= 'left outer join progev.pegwdata e on e.unip=a.pelaksana ';
        $sql.= 'left outer join butir f on f.kdbutir = a.kdbutir ';
        $sql.= 'left outer join tbldaerah g on g.rgkd=a.lokasi ';
        $sql.= 'left outer join progev.tblpelayanan h on h.kdupt=a.lokasi ';
        $sql.= 'where ' . implode(' and ',$condition) . ' ';
        $sql.= 'group by a.urt ';
        $sql.= 'order by a.id,a.urt desc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),'cnt'=>$que->num_rows(),'sql'=>$sql
        );
    }
    function create($obj){
        return $this->crud->create('header',array(
            'id'=>$obj['id'],
            'dasar'=>$obj['dasar'],
            'kdbutir'=>$obj['kdbutir'],
            'kdsubutir'=>$obj['kdsubutir'],
            'pelaksana'=>$obj['pelaksana'],
            'lokasi'=>$obj['lokasi'],
            'pemberi'=>$obj['pemberi'],
            'mulai'=>$obj['awal'],
            'selesai'=>$obj['akhir'],
            'ringkasan'=>$obj['ringkasan']
        ));
    }
    function remove($params){
        return $this->crud->remove('header',$params);
    }
    function save($params){
        return $this->crud->create('header',$params);
    }
    function getparent($urt){
        $sql = 'select id from capaian where urt = ' . $urt . ' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $result = $que->result();
        if($que->num_rows()>0){
            return $result[0]->id;
        }
        return false;
    }
    function update($params,$condition){
        return $this->crud->update('header',$params,$condition);
    }
    function getdashboard($params){
        $sql = 'select hdr.kdbutir,case when jan.nops is null then 0 else jan.nops end  jan,';
        $sql.= 'case when feb.nops is null then 0 else feb.nops end feb,';
        $sql.= 'case when mar.nops is null then 0 else mar.nops end mar,';
        $sql.= 'case when apr.nops is null then 0 else apr.nops end apr,';
        $sql.= 'case when may.nops is null then 0 else may.nops end may,';
        $sql.= 'case when jun.nops is null then 0 else jun.nops end jun, ';
        $sql.= 'case when jul.nops is null then 0 else jul.nops end jul,';
        $sql.= 'case when ags.nops is null then 0 else ags.nops end ags,';
        $sql.= 'case when sep.nops is null then 0 else sep.nops end sep,';
        $sql.= 'case when okt.nops is null then 0 else okt.nops end okt,';
        $sql.= 'case when nop.nops is null then 0 else nop.nops end nop,';
        $sql.= 'case when des.nops is null then 0 else des.nops end des ';
        $sql.= 'from ';
        $sql.= '(select distinct kdbutir from header where pelaksana="'.$params['pelaksana'].'") hdr ';
        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="01" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') jan on jan.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="02" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') feb on feb.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="03" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') mar on mar.kdbutir=hdr.kdbutir ';


        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="04" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') apr on apr.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="05" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') may on may.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="06" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') jun on jun.kdbutir=hdr.kdbutir ';


        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="07" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') jul on jul.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="08" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') ags on ags.kdbutir=hdr.kdbutir ';


        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="09" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') sep on sep.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="10" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') okt on okt.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="11" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') nop on nop.kdbutir=hdr.kdbutir ';

        $sql.= 'left outer join ';
        $sql.= '(';
        $sql.= 'select a.kdbutir,count(nops)nops from header a left outer join rincian01 b on b.kdsubutir=a.kdsubutir ';
        $sql.= 'where date_format(tgops,"%m")="12" ';
        $sql.= 'and pelaksana="'.$params['pelaksana'].'" ';
        $sql.= 'group by a.kdbutir ';
        $sql.= ') des on des.kdbutir=hdr.kdbutir ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),'cnt'=>$que->num_rows(),'sql'=>$sql
        );
    }
}
