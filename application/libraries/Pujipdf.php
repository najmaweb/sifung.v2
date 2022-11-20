<?php
Class Pujipdf extends Fpdf {


    var $widths;
var $aligns;

function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetAligns($a)
{
    //Set the array of column alignments
    $this->aligns=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}

//

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

/*function AcceptPageBreak()
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
}*/
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
    //$this->AddPage();
}
function narasikegiatan($rinci){
    $text = "Jenis Kegiatan: ";
    $text.= $rinci->PPK."\n";
    $text.= "Media Pembawa: ".$rinci->nipem."\n";
    $text.= "Jumlah Total: ".$rinci->jmltotal."\n";
    $text.= "Asal: ".$rinci->asal."\n";
    $text.= "Tujuan: ".$rinci->tujuan."\n";
    $text.= "Pemilik: ".$rinci->pemilik."\n";
    return $text;
}
function narasiPresen($rinci){
    $text = 'Jumlah Periksa: '.$rinci->jmlhewan."\n";
    $text.= 'Jenis Kelamin: '.$rinci->jnskelamin."\n";
    $text.= 'Warna Bulu: '.$rinci->bulukulit."\n";
    $text.= 'Kondisi Umum: '.$rinci->kondisi."\n";
    $text.= 'Nafsu makan & minum:'.$rinci->nafsu."\n";
    $text.= 'Discharge: '.$rinci->adadischarge."\n";
    $text.= 'Keterangan: '.$rinci->keterangan."\n";
    return $text;
}
function narasiKlinis($rinci){
    $text = 'Suhu: '.$rinci->suhu."\n";
    $text.= 'Pulsus: '.$rinci->pulsus."\n";
    $text.= 'Respirasi: '.$rinci->respirasi."\n";
    $text.= 'Limfoglandula: '.$rinci->limfo."\n";
    $text.= 'Turgor Kulit: '.$rinci->turgor."\n";
    $text.= 'Mukosa: '.$rinci->mukosa."\n";
    $text.= 'Lesi: '.$rinci->lesi."\n";
    return $text;
}
function narasiPenilaianKlinis($rinci){
    $text = 'Suhu: '.$rinci->urpensuhu."\n";
    $text.= 'Pulsus: '.$rinci->urpenpulsus."\n";
    $text.= 'Respirasi: '.$rinci->urpenrespirasi."\n";
    $text.= 'Limfoglandula: '.$rinci->urpenlimfo."\n";
    $text.= 'Turgor Kulit: '.$rinci->urpenturgor."\n";
    $text.= 'Mukosa: '.$rinci->urpenmukosa."\n";
    $text.= 'Lesi: '.$rinci->urpenlesi."\n";
    return $text;
}
function narasiDokumen($rinci){
    $text = ''.$rinci->dok1.': '.$rinci->dstat1."\n";
    $text.= ''.$rinci->dok2.': '.$rinci->dstat2."\n";
    $text.= ''.$rinci->dok3.': '.$rinci->dstat3."\n";
    $text.= ''.$rinci->dok4.': '.$rinci->dstat4."\n";
    return $text;
}
function penetapanDiagnosa($rinci){
    $this->SetFont('Times','',7);
    $text = "Diagnosa akhir: ".$rinci->diagnosa."\n";
    $text.= "Tindak Lanjut: ".$rinci->tindaklanjut."";
    return $text;
}
function createNarration(){
    $text = "Kegiatan diawali dengan identifikasi data sebagai berikut :\n";
    $this->SetFont('Times','',7);
    $text.= "- 123456 \n";
    $this->SetFont('Times','',7);
    $text.= "- "."Pemilik: Kusumo \n";
    $text.= "- 2233222 \n";
    $text.= "- "."Asal: SUrabaya \n";
    $text.= "- "."Tujuan: JKerta \n";
    $text.= "- "."Alat Angkut: Bus \n";
    $text.= "- "."Kondisi Alat Angkut: Sehat \n";
    $text.= "- "."Riwayat Kesehatan: Sehat \n\n";
    $text.= "Hasil Anamnesa sebagai berikut: \n";
    $text.= "- "."Ciri-ciri: Merah bulu tebal \n";
    $text.= "- "."Jumlah diperiksa: 1 \n";
    $text.= "- "."Kondisi: Sehat, gemuk \n";
    $text.= "- "."Nafsu makan/minum: normal \n\n";
    $text.= "Selanjutnya dilakukan pemeriksaan klinis: \n";
    $text.= "- "."Suhu: 34 \n";
    $text.= "- "."Palpasi/Auskultasi/Perkusi: Halus \n";
    $text.= "- "."Turgor kulit/mukosa: - \n\n";
    $text.= "Pemeriksaan lanjutan: \n";
    $text.= "- "."Rekam medis/laboratorium: - \n";
    $text.= "Hasil diagnosa: \n";
    $text.= "- "."Kesimpulan: Boleh di disribusikan \n";
    return $text;
}

function butirTable($data)
{
    $this->SetFont('Times','',10);
    $this->Ln();
    $w = array(10, 30, 30, 200);
    $this->setFillColor(0,0,255);
    $this->Cell($w[0],6,'NO','1',0,'C');
    $this->Cell($w[1],6,'TANGGAL','1',0,'C');
    $this->Cell($w[2],6,'NO OPS','1',0,'C');
    $this->MultiCell($w[3],6,'HASIL/DATA/INFORMASI',1,'C');
    $c = 1;

    foreach($data as $row)
    {
        $no = "\n\n\n".$c++."\n\n\n";
        if($c<3){
        $this->Cell($w[0],6,"1",'0','R');
        $this->Cell($w[1],6,$row[1],'1',0,'C');
        $this->Cell($w[2],6,$row[0],'1',0,'C');
        $this->MultiCell($w[3],6,$this->createNarration(),1,'L');
        }//$this->Ln();
    }
    $this->AddPage();
}

    function WordWrap(&$text, $maxwidth)
    {
        $text = trim($text);
        if ($text==='')
            return 0;
        $space = $this->GetStringWidth(' ');
        $lines = explode("\n", $text);
        $text = '';
        $count = 0;
    
        foreach ($lines as $line)
        {
            $words = preg_split('/ +/', $line);
            $width = 0;
    
            foreach ($words as $word)
            {
                $wordwidth = $this->GetStringWidth($word);
                if ($wordwidth > $maxwidth)
                {
                    // Word is too long, we cut it
                    for($i=0; $i<strlen($word); $i++)
                    {
                        $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                        if($width + $wordwidth <= $maxwidth)
                        {
                            $width += $wordwidth;
                            $text .= substr($word, $i, 1);
                        }
                        else
                        {
                            $width = $wordwidth;
                            $text = rtrim($text)."\n".substr($word, $i, 1);
                            $count++;
                        }
                    }
                }
                elseif($width + $wordwidth <= $maxwidth)
                {
                    $width += $wordwidth + $space;
                    $text .= $word.' ';
                }
                else
                {
                    $width = $wordwidth + $space;
                    $text = rtrim($text)."\n".$word.' ';
                    $count++;
                }
            }
            $text = rtrim($text)."\n";
            $count++;
        }
        $text = rtrim($text);
        return $count;
    }   
    function getNextY($text,$width){

        return strlen($text)/$width;
    }
}