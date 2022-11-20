<?php
function createHeader($fpdf){
    $fpdf->AddPage();
    $fpdf->SetFont("Times","b",7);
    $fpdf->SetAutoPageBreak(true);
    $fpdf->Cell(10,8,"No.Urut","0","0","C");
    $fpdf->Cell(30,8,"No.\nOperasional","0","0","C");
    $fpdf->Cell(30,8,"Tgl.\nOperasional","0","0","C");
    $fpdf->Cell(30,8,"Jenis Kegiatan","0","0","C");
    $fpdf->Cell(30,8,"Dokumen","0","0","C");
    $fpdf->Cell(30,8,"Presen","0","0","C");
    $fpdf->Cell(30,8,"Klinis","0","0","C");
    $fpdf->Cell(30,8,"Penilaian Klinis","0","0","C");
    $fpdf->Cell(60,8,"Penetapan DIagnosa","0","1","C");
    $fpdf->SetFont("Times","",7);
}
    $fpdf = new Pujipdf("L");
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
        }else{
            $fpdf->SetXY(10,100);
        }
        $fpdf->Cell(10,5,$c++,"0","0","C");
        $fpdf->Cell(30,5,$rinci->nops,"0","0","C");
        $fpdf->Cell(30,5,$sd->mysqltoid($rinci->tgops),"0","0","C");
        $fpdf->MultiCell(30,5,$fpdf->narasikegiatan($rinci),"0","L","0");
        $X_ = 110;
        if($c%2===1){
            $fpdf->SetXY(110,100);
        }else{
            $fpdf->SetXY(110,30);
        }
        $fpdf->MultiCell(30,5,$fpdf->narasiDokumen($rinci),"0","L","0");
        if($c%2===1){
            $fpdf->SetXY(140,100);
        }else{
            $fpdf->SetXY(140,30);
        }
        $fpdf->MultiCell(30,5,$fpdf->narasiPresen($rinci),"0","L","0");
        if($c%2===1){
            $fpdf->SetXY(170,100);
        }else{
            $fpdf->SetXY(170,30);
        }
        $fpdf->MultiCell(30,5,$fpdf->narasiKlinis($rinci),"0","L","0");
        if($c%2===1){
            $fpdf->SetXY(200,100);
        }else{
            $fpdf->SetXY(200,30);
        }
        $fpdf->MultiCell(30,5,$fpdf->narasiPenilaianKlinis($rinci),"0","L","0");
        if($c%2===1){
            $fpdf->SetXY(230,100);
        }else{
            $fpdf->SetXY(230,30);
        }
        $fpdf->MultiCell(60,5,$fpdf->penetapanDiagnosa($rinci),"0","L","0");
        //$Y+=350;
        //$fpdf->SetXY(10,$Y);
    }
    
/*
    $fpdf->SetXY(10,45);
    $fpdf->Cell(10,5,"2","0","0","C");
    $fpdf->Cell(30,5,"123","0","0","C");
    $fpdf->Cell(30,5,"20 Nopember 2022","0","0","C");
    $fpdf->MultiCell(30,5,"Pemeriksaan klinis terhadap 5 ekor kucing yang baru datang dari shanghai China","0","L","0");
    $fpdf->SetXY(110,45);
    $fpdf->Cell(30,5,"foto ayam","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->SetXY(230,45);
    $text2 = "4 ekor kucing boleh di lanjutkan ke daerah, 2 ekor kucing lain harus menjalani perawatan karena sakit";
    $next2 = $fpdf->getNextY($text2,5);
    $fpdf->MultiCell(60,5,$text2." ".$next2,"0","L","0");

    $fpdf->SetXY(10,60);
    $fpdf->Cell(10,5,"3","0","0","C");
    $fpdf->Cell(30,5,"123","0","0","C");
    $fpdf->Cell(30,5,"20 Nopember 2022","0","0","C");
    $fpdf->MultiCell(30,5,"Pemeriksaan klinis terhadap 5 ekor kucing yang baru datang dari shanghai China","0","L","0");
    $fpdf->SetXY(110,60);
    $fpdf->Cell(30,5,"foto ayam","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->Cell(30,5,"bagus","0","0","C");
    $fpdf->SetXY(230,60);
    $text2 = "5 ekor kucing boleh di lanjutkan ke daerah, 2 ekor kucing lain harus menjalani perawatan karena sakit";
    $next2 = $fpdf->getNextY($text2,5);
    $fpdf->MultiCell(60,5,$text2." ".$next2,"0","L","0");
    */
    $fpdf->Output();
?>
