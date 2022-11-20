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
        $sql.= 'a.lokasi,h.namaunit,date_format(a.mulai,"%d %b %Y")mulai,date_format(a.selesai,"%d %b %Y")selesai,a.ringkasan, nops,tgops,f.ak,f.nmbutir,g.rgnm, ';
        $sql.= 'count(a.id) jmlsubutir ';
        $sql.= 'from header a ';
        $sql.= 'left outer join butiranak b on b.kdbutir=a.kdbutir and b.kdsubutir=a.kdsubutir ';
        $sql.= 'left outer join progev.pegwdata c on c.unip=a.pemberi ';
        $sql.= 'left outer join rincian01 d on d.urt=a.urt ';
        $sql.= 'left outer join progev.pegwdata e on e.unip=a.pelaksana ';
        $sql.= 'left outer join butir f on f.kdbutir = a.kdbutir ';
        $sql.= 'left outer join tbldaerah g on g.rgkd=a.lokasi ';
        $sql.= 'left outer join progev.tblupt h on h.kdupt=c.kdupt ';
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
}
