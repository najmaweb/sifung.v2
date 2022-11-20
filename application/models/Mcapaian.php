<?php
Class Mcapaian extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        return $this->crud->gets('capaian',array('id','pelaksana','kdbutir','target','awal','akhir'));
    }
    function get($condition){
        return $this->crud->get('capaian',array('id','pelaksana','kdbutir','target','awal','akhir'),$condition);
    }
    function get2($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . ' = ' . $val);
        }
        $sql = 'select id,pelaksana,kdbutir,nmbutir,kdnmbutir,target,awal,akhir,awalen,akhiren,bnyrincian,cast(100*(bnyrincian/target) as decimal(4,2))persentase,ak*bnyrincian total from ';
        $sql.= '(select a.id,a.pelaksana,a.kdbutir ,b.nmbutir,concat(a.kdbutir,"-",b.nmbutir)kdnmbutir,a.target,date_format(a.awal,"%d/%m/%Y")awal,date_format(a.akhir,"%d/%m/%Y") akhir, ';
        $sql.= 'date_format(a.awal,"%m/%d/%Y")awalen,date_format(a.akhir,"%m/%d/%Y") akhiren,b.ak, ';
        $sql.= 'count(d.urt)bnyrincian ';
        $sql.= 'from capaian a  ';
        $sql.= 'left outer join  butir b on b.kdbutir=a.kdbutir ';
        $sql.= 'left outer join header c on c.kdbutir=a.kdbutir and a.id=c.id ';
        $sql.= 'left outer join rincian01 d on d.urt = c.urt ';
        $sql.= 'where ' . implode(' and ' ,$condition) . ' ';
        $sql.= 'group by a.kdbutir)A ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function get2b($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key . ' = ' . $val);
        }
        $sql = 'select id,pelaksana,kdbutir,nmbutir,kdnmbutir,target,awal,akhir,awalen,akhiren,bnyheader,cast(100*(bnyheader/target) as decimal(4,2))persentase,ak*bnyheader total from ';
        $sql.= '(select a.id,a.pelaksana,a.kdbutir ,b.nmbutir,concat(a.kdbutir,"-",b.nmbutir)kdnmbutir,a.target,date_format(a.awal,"%d/%m/%Y")awal,date_format(a.akhir,"%d/%m/%Y") akhir, ';
        $sql.= 'date_format(a.awal,"%m/%d/%Y")awalen,date_format(a.akhir,"%m/%d/%Y") akhiren,b.ak, ';
        $sql.= 'count(c.id)bnyheader ';
        $sql.= 'from capaian a  ';
        $sql.= 'left outer join  butir b on b.kdbutir=a.kdbutir ';
        $sql.= 'left outer join header c on c.kdbutir=a.kdbutir and a.id=c.id ';
        
        $sql.= 'where ' . implode(' and ' ,$condition) . ' ';
        $sql.= 'group by a.kdbutir)A ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function get3($conditions){
        $condition = array();
        foreach($conditions as $key=>$val){
            array_push($condition,$key.'='.$val);
        }
        $sql = 'SELECT kdbutir,datediff(akhir,awal)x FROM `capaian` WHERE ' . implode(" and ",$condition);
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),'res'=>$que->result()
        );
    }
    function create($obj){
        return $this->crud->create('capaian',array(
            'pelakasana'=>$obj['pelakasana'],
            'kdbutir'=>$obj['kdbutir'],
            'target'=>$obj['target'],
            'periode'=>$obj['periode'],
        ));
    }
    function remove($params){
        return $this->crud->remove('capaian',$params);
    }
    function save($params){
        return $this->crud->create('capaian',$params);
    }
    function update($params,$conditions){
        return $this->crud->update('capaian',$params,$conditions);
    }
}