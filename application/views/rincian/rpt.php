<?php
define('FPDF_FONTPATH','application/libraries/font');
function createNarration($pdf,$rinci){
    $text = "Kegiatan diawali dengan identifikasi data sebagai berikut :\n";
    $pdf->SetFont('Courier','BI',14);
    $text.= "- ".$rinci->nipem." \n";
    $pdf->SetFont('Arial','',14);
    $text.= "- "."Pemilik: ".$rinci->pemilik." \n";
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

$pdf= new Fpdfmulticell();
$sd = new Sifungdate();
$title = 'Laporan Hasil Pelaksanaan Kegiatan';
$pdf->SetTitle($title);
$desc = $butiranak->butiranak;
$desc.= "\n";
$desc.= "Angka Kredit " . $header->ak;
$data = array(
    array("1.","Uraian Kegiatan (UK)",":",$desc),
    array("2.","Pelaksana",":",$header->namapelaksana . ' / '. $header->pelaksana . ' / '. $header->jbtnpelaksana),
    array("3.","Dasar Pelaksanaan",":",''),
    array("","a. No dan Tgl Surat Tugas",":",$header->dasar),
    array("","b. Pemberi Tugas",":",$header->pemberi.' ('.$header->jbtn.') '),
    array("4.","Pelaksanaan",":",""),
    array("","a. Lokasi",":",$header->namaunit),
    array("","b. Waktu",":",$header->mulai . ' - ' . $header->selesai),
    array("","c. Jam",":","Jam kerja sesuai jadwal tugas"),
    array("5.","Hasil Pelaksanaan",":",$header->ringkasan),
);
$pdf->AddPage();
$pdf->headerSetting();
$pdf->PageHeader(''.$header->kdbutir.' / '.$header->pelaksana.' / '.$header->id);
$pdf->Ln();
$pdf->PageHead('LAPORAN HASIL PELAKSANAAN KEGIATAN');
$pdf->PageHead('PEJABAT FUNGSIONAL DOKTER HEWAN KARANTINA');
$pdf->Ln();
$pdf->ImprovedTable($data);
$rinciarray = array();
foreach($rincian as $rinci){
    array_push($rinciarray,array($rinci->nops,$sd->mysqltoid($rinci->tgops),"2222",$rinci->kesimpulan));
}
$pdf->SetFont('Arial','',14);
//Table with 20 rows and 4 columns
$pdf->SetWidths(array(10,30,30,110));
//        srand(microtime()*1000000);
//for($i=0;$i<20;$i++)
$i = 1;
foreach($rincian as $rinci){
    if(!is_null($rinci->nops)){
        $rincinops = $rinci->nops;
    }else{
        $rincinops = "";
    }
    $pdf->Row(array($i,$rinci->tgops,$rincinops,createNarration($pdf,$rinci)));
    $i+=1;
}

$pdf->Output();
?>
