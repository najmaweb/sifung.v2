<?php
Class Pujipdf2 extends Fpdf {


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
function narasikegiatan($c,$rinci,$initheight = 25){
    $xkeg = 40;
    if($c%2===1){
        $this->SetXY($xkeg,100);
    }else{
        $this->SetXY($xkeg,$initheight);
    }

    $this->cell(17,5,"Jenis Kegiatan");
    $this->cell(15,5,":".$rinci->PPK);

    if($c%2===1){
        $this->SetXY($xkeg,105);
    }else{
        $this->SetXY($xkeg,$initheight+5);
    }
    $this->cell(17,5,"Media Pembawa");
    $this->cell(15,5,":".$rinci->nipem);

    if($c%2===1){
        $this->SetXY($xkeg,110);
    }else{
        $this->SetXY($xkeg,$initheight+10);
    }
    $this->cell(17,5,"Jumlah Total");
    $this->cell(15,5,":".$rinci->jmltotal);

    if($c%2===1){
        $this->SetXY($xkeg,115);
    }else{
        $this->SetXY($xkeg,$initheight+15);
    }
    $this->cell(17,5,"Asal");
    $this->cell(15,5,":".$rinci->asal);

    if($c%2===1){
        $this->SetXY($xkeg,120);
    }else{
        $this->SetXY($xkeg,$initheight+20);
    }
    $this->cell(17,5,"Tujuan");
    $this->cell(15,5,":".$rinci->tujuan);

    if($c%2===1){
        $this->SetXY($xkeg,125);
    }else{
        $this->SetXY($xkeg,$initheight+25);
    }
    $this->cell(17,5,"Pemilik");
    $this->cell(15,5,":".$rinci->pemilik);
}
function narasiDokumen($c,$rinci,$initheight = 25){
    $xdok = 80;
    if($c%2===1){
        $this->SetXY($xdok,100);
    }else{
        $this->SetXY($xdok,$initheight);
    }
    $this->cell(15,5,is_null($rinci->dok1)?"":$rinci->dok1);
    $this->cell(15,5,is_null($rinci->dstat1)?"":$rinci->dstat1);

    if($c%2===1){
        $this->SetXY($xdok,105);
    }else{
        $this->SetXY($xdok,$initheight+5);
    }
    $this->cell(15,5,is_null($rinci->dok2)?"":$rinci->dok2);
    $this->cell(15,5,is_null($rinci->dstat2)?"":$rinci->dstat2);

    if($c%2===1){
        $this->SetXY($xdok,110);
    }else{
        $this->SetXY($xdok,$initheight+10);
    }
    $this->cell(15,5,is_null($rinci->dok3)?"":$rinci->dok3);
    $this->cell(15,5,is_null($rinci->dstat3)?"":$rinci->dstat3);

    if($c%2===1){
        $this->SetXY($xdok,115);
    }else{
        $this->SetXY($xdok,$initheight+15);
    }
    $this->cell(15,5,is_null($rinci->dok4)?"":$rinci->dok4);
    $this->cell(15,5,is_null($rinci->dstat4)?"":$rinci->dstat4);
}
function narasiPresenKlinis($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(140,100);
    }else{
        $this->SetXY(140,$initheight);
    }
    $this->cell(15,5,"Jumlah Periksa");
    $this->cell(15,5,is_null($rinci->jmlhewan)?"":":".$rinci->jmlhewan);

    if($c%2===1){
        $this->SetXY(140,105);
    }else{
        $this->SetXY(140,$initheight+5);
    }
    $this->cell(15,5,"Jenis Kelamin");
    $this->cell(15,5,is_null($rinci->jnskelamin)?"":":".$rinci->jnskelamin);

    if($c%2===1){
        $this->SetXY(140,110);
    }else{
        $this->SetXY(140,$initheight+10);
    }
    $this->cell(15,5,"Warna Bulu");
    $this->cell(15,5,is_null($rinci->bulukulit)?"":":".$rinci->bulukulit);

    if($c%2===1){
        $this->SetXY(140,115);
    }else{
        $this->SetXY(140,$initheight+15);
    }
    $this->cell(15,5,"Kondisi Umum");
    $this->cell(15,5,is_null($rinci->kondisi)?"":":".$rinci->kondisi);

    if($c%2===1){
        $this->SetXY(140,120);
    }else{
        $this->SetXY(140,$initheight+20);
    }
    $this->cell(15,5,"Nafsu Makan Minum");
    $this->cell(15,5,is_null($rinci->nafsu)?"":":".$rinci->nafsu);

    if($c%2===1){
        $this->SetXY(140,125);
    }else{
        $this->SetXY(140,$initheight+25);
    }
    $this->cell(15,5,"Discharge");
    $this->cell(15,5,is_null($rinci->adadischarge)?"":":".$rinci->adadischarge);

    if($c%2===1){
        $this->SetXY(140,130);
    }else{
        $this->SetXY(140,$initheight+30);
    }
    $this->cell(15,5,"Keterangan");
    $this->cell(15,5,is_null($rinci->keterangan)?"":":".$rinci->keterangan);
}
function narasiPresenOrganoleptik($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(140,100);
    }else{
        $this->SetXY(140,$initheight);
    }
    $this->cell(15,5,"Jumlah Kemasan");
    $this->cell(15,5,is_null($rinci->jmlkemasan)?"":":".$rinci->jmlkemasan);

    if($c%2===1){
        $this->SetXY(140,105);
    }else{
        $this->SetXY(140,$initheight+5);
    }
    $this->cell(15,5,"Jenis Kemasan");
    $this->cell(15,5,is_null($rinci->jnskemasan)?"":":".$rinci->jnskemasan);

    if($c%2===1){
        $this->SetXY(140,110);
    }else{
        $this->SetXY(140,$initheight+10);
    }
}
function narasiKlinis($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(175,100);
    }else{
        $this->SetXY(175,$initheight);
    }
    $this->cell(15,5,"Suhu");
    $this->cell(15,5,is_null($rinci->suhu)?"":":".$rinci->suhu);

    if($c%2===1){
        $this->SetXY(175,105);
    }else{
        $this->SetXY(175,$initheight+5);
    }
    $this->cell(15,5,"Pulsus");
    $this->cell(15,5,is_null($rinci->pulsus)?"":":".$rinci->pulsus);

    if($c%2===1){
        $this->SetXY(175,110);
    }else{
        $this->SetXY(175,$initheight+10);
    }
    $this->cell(15,5,"Respirasi");
    $this->cell(15,5,is_null($rinci->respirasi)?"":":".$rinci->respirasi);

    if($c%2===1){
        $this->SetXY(175,115);
    }else{
        $this->SetXY(175,$initheight+15);
    }
    $this->cell(15,5,"Limfo");
    $this->cell(15,5,is_null($rinci->limfo)?"":":".$rinci->limfo);

    if($c%2===1){
        $this->SetXY(175,120);
    }else{
        $this->SetXY(175,$initheight+20);
    }
    $this->cell(15,5,"Turgor");
    $this->cell(15,5,is_null($rinci->turgor)?"":":".$rinci->turgor);

    if($c%2===1){
        $this->SetXY(175,125);
    }else{
        $this->SetXY(175,$initheight+25);
    }
    $this->cell(15,5,"Mukosa");
    $this->cell(15,5,is_null($rinci->mukosa)?"":":".$rinci->mukosa);

    if($c%2===1){
        $this->SetXY(175,130);
    }else{
        $this->SetXY(175,$initheight+30);
    }
    $this->cell(15,5,"Lesi");
    $this->cell(15,5,is_null($rinci->lesi)?"":":".$rinci->lesi);
}

function narasiPenilaianKlinis($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(195,100);
    }else{
        $this->SetXY(195,$initheight+5);
    }
    $this->cell(15,5,"Suhu");
    $this->cell(15,5,is_null($rinci->urpensuhu)?"":":".$rinci->urpensuhu);

    if($c%2===1){
        $this->SetXY(195,105);
    }else{
        $this->SetXY(195,$initheight+10);
    }
    $this->cell(15,5,"Pulsus");
    $this->cell(15,5,is_null($rinci->urpenpulsus)?"":":".$rinci->urpenpulsus);

    if($c%2===1){
        $this->SetXY(195,110);
    }else{
        $this->SetXY(195,$initheight+15);
    }
    $this->cell(15,5,"Respirasi");
    $this->cell(15,5,is_null($rinci->urpenrespirasi)?"":":".$rinci->urpenrespirasi);

    if($c%2===1){
        $this->SetXY(195,115);
    }else{
        $this->SetXY(195,$initheight+20);
    }
    $this->cell(15,5,"Limfoglandula");
    $this->cell(15,5,is_null($rinci->urpenlimfo)?"":":".$rinci->urpenlimfo);

    if($c%2===1){
        $this->SetXY(195,120);
    }else{
        $this->SetXY(195,$initheight+25);
    }
    $this->cell(15,5,"Turgor Kulit");
    $this->cell(15,5,is_null($rinci->urpenturgor)?"":":".$rinci->urpenturgor);

    if($c%2===1){
        $this->SetXY(195,125);
    }else{
        $this->SetXY(195,$initheight+30);
    }
    $this->cell(15,5,"Mukosa");
    $this->cell(15,5,is_null($rinci->urpenmukosa)?"":":".$rinci->urpenmukosa);

    if($c%2===1){
        $this->SetXY(195,130);
    }else{
        $this->SetXY(195,$initheight+35);
    }
    $this->cell(15,5,"Lesi");
    $this->cell(15,5,is_null($rinci->urpenlesi)?"":":".$rinci->urpenlesi);
}
function penetapanDiagnosaKlinis($c,$rinci,$initheight = 25){
    $this->SetFont('Times','',7);
    if($c%2===1){
        $this->SetXY(215,130);
    }else{
        $this->SetXY(215,$initheight);
    }
    $this->Cell(20,5,"Diagnosa akhir");
    $this->Cell(30,5,is_null($rinci->diagnosa)?"":$rinci->diagnosa);
    if($c%2===1){
        $this->SetXY(215,100);
    }else{
        $this->SetXY(215,$initheight+20);
    }
    $this->Cell(20,5,"Tindak Lanjut");
    $this->Cell(30,5,is_null($rinci->tindaklanjut)?"":$rinci->tindaklanjut);
}
function penetapanDiagnosaOrganoleptik($c,$rinci,$initheight = 25){
    $this->SetFont('Times','',7);
    if($c%2===1){
        $this->SetXY(215,130);
    }else{
        $this->SetXY(215,$initheight);
    }
    $this->Cell(20,5,"Diagnosa akhir");
    $this->Cell(30,5,is_null($rinci->diagnosa)?"":$rinci->diagnosa);
    if($c%2===1){
        $this->SetXY(215,100);
    }else{
        $this->SetXY(215,$initheight+20);
    }
    $this->Cell(20,5,"Tindak Lanjut");
    $this->Cell(30,5,is_null($rinci->tindaklanjut)?"":$rinci->tindaklanjut);
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
function narasiOrganoleptik($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(175,100);
    }else{
        $this->SetXY(175,$initheight);
    }
    $this->cell(15,5,"Keutuhan Kemasan");
    $this->cell(15,5,is_null($rinci->kemasan)?"":":".$rinci->kemasan);

    if($c%2===1){
        $this->SetXY(175,105);
    }else{
        $this->SetXY(175,$initheight+5);
    }
    $this->cell(15,5,"Keutuhan Segel");
    $this->cell(15,5,is_null($rinci->segel)?"":":".$rinci->segel);

    if($c%2===1){
        $this->SetXY(175,110);
    }else{
        $this->SetXY(175,$initheight+10);
    }
    $this->cell(15,5,"Label");
    $this->cell(15,5,is_null($rinci->label)?"":":".$rinci->label);

    if($c%2===1){
        $this->SetXY(175,115);
    }else{
        $this->SetXY(175,$initheight+15);
    }
    $this->cell(15,5,"Konsistensi");
    $this->cell(15,5,is_null($rinci->konsistensi)?"":":".$rinci->konsistensi);

    if($c%2===1){
        $this->SetXY(175,120);
    }else{
        $this->SetXY(175,$initheight+20);
    }
    $this->cell(15,5,"Warna");
    $this->cell(15,5,is_null($rinci->warna)?"":":".$rinci->warna);

    if($c%2===1){
        $this->SetXY(175,125);
    }else{
        $this->SetXY(175,$initheight+25);
    }
    $this->cell(15,5,"Bau");
    $this->cell(15,5,is_null($rinci->bau)?"":":".$rinci->bau);

    if($c%2===1){
        $this->SetXY(175,130);
    }else{
        $this->SetXY(175,$initheight+30);
    }
    $this->cell(15,5,"Rasa");
    $this->cell(15,5,is_null($rinci->rasa)?"":":".$rinci->rasa);
}
function narasiPenilaianOrganoleptik($c,$rinci,$initheight = 25){
    if($c%2===1){
        $this->SetXY(195,100);
    }else{
        $this->SetXY(195,$initheight+5);
    }
    $this->cell(15,5,"Keutuhan Kemasan");
    $this->cell(15,5,is_null($rinci->nilaikemasan)?"":":".$rinci->nilaikemasan);

    if($c%2===1){
        $this->SetXY(195,105);
    }else{
        $this->SetXY(195,$initheight+10);
    }
    $this->cell(15,5,"Keutuhan Segel");
    $this->cell(15,5,is_null($rinci->nilaisegel)?"":":".$rinci->nilaisegel);

    if($c%2===1){
        $this->SetXY(195,110);
    }else{
        $this->SetXY(195,$initheight+15);
    }
    $this->cell(15,5,"Kecukupan Label");
    $this->cell(15,5,is_null($rinci->nilailabel)?"":":".$rinci->nilailabel);

    if($c%2===1){
        $this->SetXY(195,115);
    }else{
        $this->SetXY(195,$initheight+20);
    }
    $this->cell(15,5,"Konsistensi");
    $this->cell(15,5,is_null($rinci->nilaikonsistensi)?"":":".$rinci->nilaikonsistensi);

    if($c%2===1){
        $this->SetXY(195,120);
    }else{
        $this->SetXY(195,$initheight+25);
    }
    $this->cell(15,5,"Warna");
    $this->cell(15,5,is_null($rinci->nilaiwarna)?"":":".$rinci->nilaiwarna);

    if($c%2===1){
        $this->SetXY(195,125);
    }else{
        $this->SetXY(195,$initheight+30);
    }
    $this->cell(15,5,"Bau");
    $this->cell(15,5,is_null($rinci->nilaibau)?"":":".$rinci->nilaibau);

    if($c%2===1){
        $this->SetXY(195,130);
    }else{
        $this->SetXY(195,$initheight+35);
    }
    $this->cell(15,5,"Rasa");
    $this->cell(15,5,is_null($rinci->nilairasa)?"":":".$rinci->nilairasa);
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