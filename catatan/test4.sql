select a.id,a.urt,urtx,b.kdbutir,b.kdsubutir,butiranak,nops,tgops,date_format(tgops,"%d %b %Y")tgopsid,pemilik,nipem,o.kdnafsu,o.nafsu,a.penampakan,n.presen,a.kondisi,a.bulukulit,a.discharge,a.keterangan, a.dok1,a.dok2,a.dok3,a.dok4,a.stat1,a.stat2,a.stat3,a.stat4,case stat1 when "0" then "tidak absah" when "1" then "absah" end dstat1,case stat2 when "0" then "tidak absah" when "1" then "absah" end dstat2,case stat3 when "0" then "tidak absah" when "1" then "absah" end dstat3,case stat4 when "0" then "tidak absah" when "1" then "absah" end dstat4,a.pulsus,a.nilaipulsus,a.suhu,a.nilaisuhu,a.respirasi,a.nilairespirasi,a.nilailimfo,a.nilaimukosa,a.nilaiturgor,a.nilailesi,a.mukosa,a.limfo,a.turgor,a.lesi,a.diagnosa,a.tindaklanjut,a.jmlhewan,q.kdturgor,q.turgor mediaturgor,a.raba,p.sentuh,m.kdriwayat,m.riwayat,a.angkutan,k.angkut,a.kondisiangkutan,l.sikon,a.media,a.pemilik,a.jmltotal, a.ketklinis,a.jnsPPK,PPK,a.tujuan kdtujuan,case length(a.tujuan) when 2 then i.urneg when 5 then j.rgnm end tujuan,a.asal kdasal,case length(a.asal) when 2 then g.urneg when 5 then h.rgnm end asal, catatan,e.nipem,e.suhu mediasuhu,e.pulsus mediapulsus,e.respirasi mediarespirasi,f.nmbutir,a.kesimpulan, a.tmst,kdrekam,r.rekam ,s.jnskelamin,t.adadischarge, pensuhu.urpensuhu,penpulsus.urpenpulsus,penrespirasi.urpenrespirasi,penlimfo.urpenlimfo,penmukosa.urpenmukosa,penturgor.urpenturgor,penlesi.urpenlesi, tblstatdok1.sikonstatus sikonstatus1,tblstatdok2.sikonstatus sikonstatus2,tblstatdok3.sikonstatus sikonstatus3,tblstatdok4.sikonstatus sikonstatus4 from 
rincian01 a 
left outer join header b on b.urt = a.urt 
left outer join butiranak c on c.kdbutir = b.kdbutir and c.kdsubutir=b.kdsubutir 
left outer join jenisPPK d on d.jnsPPK=a.jnsPPK 
left outer join media e on e.kdpem=a.media 
left outer join butir f on f.kdbutir = b.kdbutir 
left outer join tblnegara g on g.kdneg=a.asal 
left outer join tbldaerah h on h.rgkd=a.asal 
left outer join tblnegara i on i.kdneg=a.tujuan 
left outer join tbldaerah j on j.rgkd=a.tujuan 
left outer join tbljnsangkut k on k.kdangkut=a.angkutan 
left outer join tblsikonangkut l on l.kdsikon = a.kondisiangkutan 
left outer join tblriwayat m on m.kdriwayat=a.riwayat 
left outer join tblpresen n on n.kdpresen=a.penampakan 
left outer join tblnafsu o on o.kdnafsu=a.nafsu 
left outer join tblsentuh p on p.kdsentuh=a.raba 
left outer join tblturgor q on q.kdturgor=a.turgor 
left outer join tblrekam r on r.kdrekam=a.rekam 
left outer join tblkelamin s on s.kdkelamin=a.kelamin 
left outer join tbldischarge t on t.kddischarge=a.discharge 
left outer join pensuhu on pensuhu.kdpensuhu=a.nilaisuhu 
left outer join penpulsus on penpulsus.kdpenpulsus=a.nilaipulsus 
left outer join penrespirasi on penrespirasi.kdpenrespirasi=a.nilairespirasi 
left outer join penlimfo on penlimfo.kdpenlimfo=a.nilailimfo 
left outer join penmukosa on penmukosa.kdpenmukosa=a.nilaimukosa 
left outer join penturgor on penturgor.kdpenturgor=a.nilaiturgor 
left outer join penlesi on penlesi.kdpenlesi=a.nilailesi 
left outer join tblstatdok tblstatdok1 on tblstatdok1.kdstatus=a.stat1 
left outer join tblstatdok tblstatdok2 on tblstatdok2.kdstatus=a.stat2 
left outer join tblstatdok tblstatdok3 on tblstatdok3.kdstatus=a.stat3 
left outer join tblstatdok tblstatdok4 on tblstatdok4.kdstatus=a.stat4 
where a.id=25 and a.urt=13 order by a.id,a.urt,a.urtx desc



























select a.id,a.urt,urtx,b.kdbutir,b.kdsubutir,butiranak,nops,tgops from 
rincian01 a 
left outer join header b on b.urt = a.urt 
left outer join butiranak c on c.kdbutir = b.kdbutir and c.kdsubutir=b.kdsubutir 
left outer join jenisPPK d on d.jnsPPK=a.jnsPPK 
left outer join media e on e.kdpem=a.media 
left outer join butir f on f.kdbutir = b.kdbutir 
left outer join tblnegara g on g.kdneg=a.asal 
left outer join tbldaerah h on h.rgkd=a.asal 
left outer join tblnegara i on i.kdneg=a.tujuan 
left outer join tbldaerah j on j.rgkd=a.tujuan 
left outer join tbljnsangkut k on k.kdangkut=a.angkutan 
left outer join tblsikonangkut l on l.kdsikon = a.kondisiangkutan 
left outer join tblriwayat m on m.kdriwayat=a.riwayat 
left outer join tblpresen n on n.kdpresen=a.penampakan 
left outer join tblnafsu o on o.kdnafsu=a.nafsu 
left outer join tblsentuh p on p.kdsentuh=a.raba 
left outer join tblturgor q on q.kdturgor=a.turgor 
left outer join tblrekam r on r.kdrekam=a.rekam 
left outer join tblkelamin s on s.kdkelamin=a.kelamin 
left outer join tbldischarge t on t.kddischarge=a.discharge 
left outer join pensuhu on pensuhu.kdpensuhu=a.nilaisuhu 
left outer join penpulsus on penpulsus.kdpenpulsus=a.nilaipulsus 
left outer join penrespirasi on penrespirasi.kdpenrespirasi=a.nilairespirasi 
left outer join penlimfo on penlimfo.kdpenlimfo=a.nilailimfo 
left outer join penmukosa on penmukosa.kdpenmukosa=a.nilaimukosa 
left outer join penturgor on penturgor.kdpenturgor=a.nilaiturgor 
left outer join penlesi on penlesi.kdpenlesi=a.nilailesi 
left outer join tblstatdok tblstatdok1 on tblstatdok1.kdstatus=a.stat1 
left outer join tblstatdok tblstatdok2 on tblstatdok2.kdstatus=a.stat2 
left outer join tblstatdok tblstatdok3 on tblstatdok3.kdstatus=a.stat3 
left outer join tblstatdok tblstatdok4 on tblstatdok4.kdstatus=a.stat4 
where a.id=25 and a.urt=13 order by a.id,a.urt,a.urtx desc