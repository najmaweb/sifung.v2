<?php
//require('fpdf.php');
$pdf = new FPDF('P');
class PDF extends FPDF
{
protected $col = 0; // Current column
protected $y0;      // Ordinate of column start

function headerSetting(){
    $this->SetFont('Arial','B',15);
    $this->SetX((210-100));
}
function Header()
{
    // Page header
    global $title;

    $this->SetFont('Arial','B',15);
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    $this->SetLineWidth(1);
//    $this->Cell($w,9,$title,1,1,'C',true);
    $this->Ln(10);
    // Save ordinate
    $this->y0 = $this->GetY();
}

function Footer()
{
    // Page footer
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
    // Set position at a given column
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    // Method accepting or not automatic page break
    if($this->col<2)
    {
        // Go to next column
        $this->SetCol($this->col+1);
        // Set ordinate to top
        $this->SetY($this->y0);
        // Keep on page
        return false;
    }
    else
    {
        // Go back to first column
        $this->SetCol(0);
        // Page break
        return true;
    }
}
function PageHeader($text)
{
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(0,0,0);

    $this->SetFont('Times','B',12);
    $this->Cell(20,6,"Formulir",'LTB',0,'C');
    $this->SetFont('Times','',12);
    $this->Cell(70,6,$text,'RTB',0,'C');
    $this->Ln();
}
function PageHead($text)
{
    $this->SetFillColor(32,178,180);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Times','',14);
    $this->Cell(190,6,$text,'0',0,'C',true);
    $this->Ln();
}

function ImprovedTable($data)
{
    $this->SetFont('Times','',12);
    $w = array(10, 65, 10, 95);
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'',0,'R');
        $this->Cell($w[1],6,$row[1],'',0,'L');
        $this->Cell($w[2],6,$row[2],'',0,'L');
        $this->MultiCell($w[3],6,$row[3],0,'L');
        $this->Ln();
    }
    $this->AddPage();
}
function butirTable($data)
{
    $this->SetFont('Times','',12);
    $this->Ln();
    $w = array(10, 30, 30, 110);
    $this->setFillColor(0,0,255);
    $this->Cell($w[0],6,'NO','1',0,'C');
    $this->Cell($w[1],6,'TANGGAL','1',0,'C');
    $this->Cell($w[2],6,'NO AGENDA','1',0,'C');
    $this->MultiCell($w[3],6,'HASIL/DATA/INFORMASI',1,'C');

    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'1',0,'R');
        $this->Cell($w[1],6,$row[1],'1',0,'C');
        $this->Cell($w[2],6,$row[2],'1',0,'C');
        $this->MultiCell($w[3],6,$row[3],1,'L');
        //$this->Ln();
    }
    $this->AddPage();
}
}

$pdf = new PDF();
$sd = new Sifungdate();
$title = 'Laporan Hasil Pelaksanaan Kegiatan';
$pdf->SetTitle($title);
$desc = $butiranak->butiranak;
$desc.= "\n";
$desc.= "Angka Kredit " . $header->ak;
$data = array(
    array("1.","Uraian Kegiatan (UK)",":",$desc),
    array("2.","Pelaksana",":",$header->namapelaksana . '/'. $header->pelaksana . '/'. $header->jbtnpelaksana),
    array("3.","Dasar Pelaksanaan",":",''),
    array("","a. No dan Tgl Surat Tugas",":",' - / - '),
    array("","b. Pemberi Tugas",":",$header->pemberi.'('.$header->jbtn.')'),
    array("4.","Pelaksanaan",":",""),
    array("","a. Lokasi",":",$header->rgnm),
    array("","b. Waktu",":","-"),
    array("","c. Jam",":","-"),
    array("5.","Hasil Pelaksanaan",":",$header->ringkasan),
);
$pdf->AddPage();
$pdf->headerSetting();
$pdf->PageHeader(''.$header->kdbutir.' / '.$header->pelaksana.' / '.$header->id);
$pdf->Ln();
$pdf->PageHead('LAPORAN HASIL PELAKSANAAN KEGIATAN');
$pdf->PageHead('PEJABAT FUNGSIONAL DOKTER HEWAN KARANTINA PERTAMA');
$pdf->Ln();
$pdf->ImprovedTable($data);
$rinciarray = array();
foreach($rincian as $rinci){
    array_push($rinciarray,array($rinci->nops,$sd->mysqltoid($rinci->tgops),"2222",$rinci->catatan));
}
$pdf->butirTable(
    $rinciarray
);
$pdf->Output();
?>
