<?php
function createHeader($fpdf){
    $fpdf->AddPage();
    $fpdf->setXY(10,10);
    $fpdf->SetFont("Times","b",7);
    $fpdf->SetAutoPageBreak(true);
    $fpdf->Cell(8,8,"No.","0","0","C");
    $fpdf->Cell(10,8,"No.","0","0","C");
    $fpdf->Cell(10,8,"Tgl.","0","0","C");
    $fpdf->Cell(30,8,"Jenis","0","0","C");
    $fpdf->Cell(30,8,"Dokumen","0","0","C");
    $fpdf->Cell(30,8,"Presen","0","0","C");
    $fpdf->Cell(30,8,"Klinis","0","0","C");
    $fpdf->Cell(30,8,"Penilaian","0","0","C");
    $fpdf->Cell(60,8,"Penetapan","0","1","C");



    $fpdf->setXY(10,13);
    $fpdf->SetFont("Times","b",7);
    $fpdf->SetAutoPageBreak(true);
    $fpdf->Cell(8,8,"Urut","0","0","C");
    $fpdf->Cell(10,8,"Ops","0","0","C");
    $fpdf->Cell(10,8,"Ops","0","0","C");
    $fpdf->Cell(30,8,"Kegiatan","0","0","C");
    $fpdf->Cell(30,8,"","0","0","C");
    $fpdf->Cell(30,8,"","0","0","C");
    $fpdf->Cell(30,8,"","0","0","C");
    $fpdf->Cell(30,8,"Klinis","0","0","C");
    $fpdf->Cell(60,8,"Diagnosa","0","1","C");


    $fpdf->SetFont("Times","",7);
}
    $fpdf = new Pujipdf2("L");
    $c = 1;
    $X = 110;$Y = 30;
    $sd = new Sifungdate();
    $fpdf->SetDisplayMode(140,"single");
 
 
 
    $title = 'Laporan Hasil Pelaksanaan Kegiatan';
    $fpdf->SetTitle($title);
    $desc = $butiranak->butiranak;
    $desc.= "\n";
    $desc.= "Angka Kredit " . $header->ak;
    $data = array(
        array("1.","Uraian Kegiatan (UK)",":",$desc),
        array("2.","Pelaksana",":",$header->namapelaksana . ' / '. $header->pelaksana . ' / '. $header->jbtnpelaksana),
        array("3.","Dasar Pelaksanaan",":",''),
        array("","a. No dan Tgl Surat Tugas",":",$header->dasar),
        array("","b. Pemberi Tugas",":",is_null($header->pemberi)?'':$header->pemberi.' ('.$header->jbtn.') '),
        array("4.","Pelaksanaan",":",""),
        array("","a. Lokasi",":",is_null($header->namaunit)?'':$header->namaunit),
        array("","b. Waktu",":",$header->mulai . ' - ' . $header->selesai),
        array("","c. Jam",":","Jam kerja sesuai jadwal tugas"),
        array("5.","Hasil Pelaksanaan",":",$header->ringkasan),
    );
    $fpdf->AddPage();
    $fpdf->headerSetting();
    $fpdf->PageHeader(''.$header->kdbutir.' / '.$header->pelaksana.' / '.$header->id);
    $fpdf->Ln();
    $fpdf->PageHead('LAPORAN HASIL PELAKSANAAN KEGIATAN');
    $fpdf->PageHead('PEJABAT FUNGSIONAL DOKTER HEWAN KARANTINA');
    $fpdf->Ln();
    $fpdf->ImprovedTable($data);

    
    foreach($rincian as $rinci){
        //$fpdf->SetXY(10,$Y*$c);
        $fpdf->SetFont("Times","",7);
        if($c%2===1){
            createHeader($fpdf);
            $fpdf->SetXY(10,25);
        }else{
            $fpdf->SetXY(10,100);
        }
        $fpdf->Cell(8,5,$c++,"0","0","C");
        $fpdf->Cell(10,5,$rinci->nops,"0","0","C");
        $fpdf->Cell(10,5,$sd->mysqltoid($rinci->tgops),"0","0","C");
        $fpdf->narasikegiatan($c,$rinci);
        $fpdf->narasiDokumen($c,$rinci);
        $fpdf->narasiPresen($c,$rinci);
        $fpdf->narasiKlinis($c,$rinci);
        $fpdf->narasiPenilaianKlinis($c,$rinci);
        $fpdf->penetapanDiagnosa($c,$rinci);
    }
    $fpdf->Output();
?>
