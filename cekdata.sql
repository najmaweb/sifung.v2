--TAB 1 UMUM
select id,urt,urtx,kdsubutir,nops,tgops from rincian01 where urtx=25;
select jnsPPK,media,jmltotal,asal,tujuan,pemilik from rincian01 where urtx=25;

--TAB 2 DOKUMEN
select dok1,dok2,dok3,dok4,stat1,stat2,stat3,stat4 from rincian01 where urtx=25;

--TAB 3 PRESEN
select jmlhewan,kelamin,bulukulit,nafsu,kondisi,discharge from rincian01 where urtx=25;

--TAB 4 KLINIS
select keterangan,suhu,pulsus,respirasi,limfo,mukosa,lesi,turgor from rincian01 where urtx=25;
--TAB 5 NILAI KLINIS
select nilaisuhu,nilaipulsus,nilairespirasi,nilailimfo,nilaimukosa,nilaiturgor,nilailesi,ketklinis from rincian01 where urtx=25;
-- ketklinis adalah keterangan

--TAB 6 DIAGNOSA
select diagnosa,tindaklanjut from rincian01 where urtx=25;



--TAB 4 ORGANOLEPTIK
select konsistensi,jmlkemasan,jnskemasan,kemasan,segel,label,warna,bau,rasa,temperatur,ph,kondisiumum from rincian01 where urtx=25;
--TAB 5 NILAI ORGANOLEPTIK
select nilaikondisiumum,nilaikemasan,nilaisegel,nilailabel,nilaikonsistensi,nilaiwarna,nilaibau,nilairasa,nilaitemperatur from rincian01 where urtx=25;
select nilaiph,tmst,riwayat,raba,catatan,rekam,kesimpulan,angkutan,kondisiangkutan,penampakan from rincian01 where urtx=25;

