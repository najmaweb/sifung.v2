alter table rincian01 add column jmlkemasan varchar(50) after tindaklanjut;
alter table rincian01 add column jnskemasan varchar(50) after jmlkemasan; 
alter table rincian01 add column kemasan varchar(50) after jnskemasan;
alter table rincian01 add column segel varchar(50) after kemasan;
alter table rincian01 add column label varchar(50) after segel;
alter table rincian01 add column konsistensi varchar(50) after label;
alter table rincian01 add column warna varchar(50) after konsistensi;
alter table rincian01 add column bau varchar(50) after warna;
alter table rincian01 add column rasa varchar(50) after bau;
alter table rincian01 add column temperatur varchar(50) after rasa;
alter table rincian01 add column ph varchar(50) after temperatur;
alter table rincian01 add column kondisiumum varchar(50) after ph;
alter table rincian01 add column nilaikondisiumum varchar(50) after kondisiumum;
alter table rincian01 add column nilaikemasan varchar(50) after nilaikondisiumum;
alter table rincian01 add column nilaisegel varchar(50) after nilaikemasan;
alter table rincian01 add column nilailabel varchar(50) after nilaisegel;
alter table rincian01 add column nilaikonsistensi varchar(50) after nilailabel;
alter table rincian01 add column nilaiwarna varchar(50) after nilaikonsistensi;
alter table rincian01 add column nilaibau varchar(50) after nilaiwarna;
alter table rincian01 add column nilairasa varchar(50) after nilaibau;
alter table rincian01 add column nilaitemperatur varchar(50) after nilairasa;
alter table rincian01 add column nilaiph varchar(50) after nilaitemperatur;