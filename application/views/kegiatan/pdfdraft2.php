<?php
function createNarration($pdf,$rinci){
    $text = "Kegiatan diawali dengan identifikasi data sebagai berikut :\n";
    $pdf->SetFont('Courier','BI',14);
    $text.= "- ".$rinci->nipem." \n";
    $pdf->SetFont('Arial','',14);
    $text.= "- "."<b>Pemilik</b>: ".$rinci->pemilik." \n";
    $text.= "- ".$rinci->PPK." \n";
    $text.= "- "."Asal: ".$rinci->asal." \n";
    $text.= "- "."Tujuan: ".$rinci->tujuan." \n";
    $text.= "- "."Alat Angkut: ".$rinci->angkut." \n";
    $text.= "- "."Kondisi Alat Angkut: ".$rinci->sikon." \n";
    $text.= "- "."Riwayat Kesehatan: ".$rinci->riwayat." \n\n";
    $text.= "Hasil Anamnesa sebagai berikut: \n";
    $text.= "- "."Ciri-ciri: ".$rinci->sikon." \n";
    $text.= "- "."Jumlah diperiksa: ".$rinci->jmlhewan." \n";
    $text.= "- "."Kondisi: ".$rinci->presen." \n";
    $text.= "- "."Nafsu makan/minum: ".$rinci->nafsu." \n\n";
    $text.= "Selanjutnya dilakukan pemeriksaan klinis: \n";
    $text.= "- "."Suhu: ".$rinci->suhu." \n";
    $text.= "- "."Palpasi/Auskultasi/Perkusi: ".$rinci->sentuh." \n";
    $text.= "- "."Turgor kulit/mukosa: ".$rinci->turgor." \n\n";
    $text.= "Pemeriksaan lanjutan: \n";
    $text.= "- "."Rekam medis/laboratorium: ".$rinci->rekam." \n";
    $text.= "Hasil diagnosa: \n";
    $text.= "- "."Kesimpulan: ".$rinci->kesimpulan." \n";
    return $text;
}
$pdf = new Fpdfmulticell("L");
$sd = new Sifungdate();
$ww = new Wordwrap("L");
$pdf->AddPage('L');
$pdf->headerSetting();
$pdf->PageHeader(''.'1234'.' / '.'Budi Pepe'.' / '.'1234');
$pdf->Ln();
$pdf->PageHead('LAPORAN HASIL PELAKSANAAN KEGIATAN');
$pdf->PageHead('PEJABAT FUNGSIONAL DOKTER HEWAN KARANTINA');
$pdf->Ln();
$data = array(
    array("1.","Uraian Kegiatan (UK)",":",'descripo'),
    array("2.","Pelaksana",":",'Buddy' . ' / '. 'Pelaksana' . ' / '. 'Dokter'),
    array("3.","Dasar Pelaksanaan",":",''),
    array("","a. No dan Tgl Surat Tugas",":",'dassar'),
    array("","b. Pemberi Tugas",":",'hehe'),
    array("4.","Pelaksanaan",":",""),
    array("","a. Lokasi",":",'surabaya'),
    array("","b. Waktu",":",'17 Agustus 1945' . ' - ' . '17 Agustus 2022'),
    array("","c. Jam",":","Jam kerja sesuai jadwal tugas"),
    array("5.","Hasil Pelaksanaan",":",'oke'),
);
$pdf->ImprovedTable($data,"L");
$i = 1;
/*$rinciarray = array();
foreach($rincian as $rinci){
    if(!is_null($rinci->nops)){
        $rincinops = $rinci->nops;
    }else{
        $rincinops = "";
    }
//    print_r(array($i,$rinci->tgops,$rincinops,createNarration($pdf,$rinci)));
    //$pdf->Row(array($i,$rinci->tgops,$rincinops,createNarration($pdf,$rinci)));
    array_push($rinciarray,array($rinci->nops,$sd->mysqltoid($rinci->tgops),"2222",$rinci->kesimpulan));
    $i+=1;
}*/
$pdf->SetFont('Arial','',14);
//Table with 20 rows and 4 columns
$pdf->SetWidths(array(10,30,30,110));
//        srand(microtime()*1000000);
//for($i=0;$i<20;$i++)
$i = 1;
//$pdf->butirTable($data);
foreach($rincian as $rinci){
    if(!is_null($rinci->nops)){
        $rincinops = $rinci->nops;
    }else{
        $rincinops = "";
    }
//    $pdf->Row(array($i,$rinci->tgops,$rincinops,createNarration($pdf,$rinci)));
    $data = array(
        array("1.",$sd->mysqltoid($rinci->tgops),":",$rinci->nops)
    );
    $pdf->ImprovedTable1(array(
        $i,$sd->mysqltoid($rinci->tgops),$rinci->nops,createNarration($pdf,$rinci)
    ),"L");
    $i+=1;
}


$pdf->OutPut();