<?php
        //require('fpdf.php');
    
        $pdf = new FPDF('P');
        $pageWidth = $pdf->GetPageWidth();
        $pageCenter = $pdf->GetPageWidth()/2;
        $numPos = 1;
        $pdf->AddPage();
        $pdf->SetFont('Arial','',10);

        $pdf->setXY($pageWidth-50,1);
        $pdf->Cell(45,10,'Formulir D10005a/Agus/1',1,0,'R');
        $pdf->SetFont('Arial','B',10);

        $pdf->setXY($pageCenter,15);
        $pdf->Cell(10,10,'LAPORAN HASIL PEMERIKSAAN KEGIATAN',0,0,'C');
        $pdf->setXY($pageCenter,20);
        $pdf->Cell(10,10,'PEJABAT FUNGSIONAL DOKTER HEWAN KARANTINA PERTAMA',0,0,'C');
        $pdf->setXY($numPos,25);
        $pdf->Cell(5,10,'1',0,0,'L');
        $pdf->Cell(5,10,'  Uraian Kegiatan (UK)',0,0,'L');
        $pdf->Cell(5,10,'  Melakukan tindakan pemeriksaan klinis hewan dan organoleptik, penilaian hasil pemeriksaan klinis hewan dan organoleptik dan menetapkan diagnosa
        Angka kredit : 0.003',0,0,'L');
        $pdf->Output();
        ?>
