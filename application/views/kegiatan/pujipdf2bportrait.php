<?php



$mpdf = new \Mpdf\Mpdf();
$html = '<html>';
$html.= '<head>';
$html.= '</head>';
$html.= '<body>';
$html.= '<table width=100% id="tblheader" style="font-size:10px;font-family:Times New Roman;">';
$html.= '<thead>';
$html.= '<tr>';
$html.= '<th>NO</th>';
$html.= '<th>NO</th>';
$html.= '<th>TGL</th>';
$html.= '<th>JENIS</th>';
$html.= '<th rowspan=2>DOKUMEN</th>';
$html.= '<th rowspan=2>PRESEN</th>';
$html.= '<th rowspan=2>KLINIS</th>';
$html.= '</tr>';

$html.= '<tr>';
$html.= '<th>URUT</th>';
$html.= '<th>OPS</th>';
$html.= '<th>OPS</th>';
$html.= '<th>KEGIATAN</th>';
$html.= '</tr>';

$html.= '</thead>';

$html.= '<tbody>';
foreach($rincian as $rinci){
$html.= '<tr>';
$html.= '<td rowspan=5 style="vertical-align:top;"> <span style="padding-left:3px;font-style:italic">'.$rinci->urt.'</span></td>';
$html.= '<td rowspan=5 style="vertical-align:top;"> <span style="padding-left:3px;font-style:italic">'.$rinci->nops.'</span></td>';
$html.= '<td rowspan=5 style="vertical-align:top;"> <span style="padding-left:3px;font-style:italic">'.$rinci->tgops.'</span></td>';
$html.= '<td rowspan=5 style="line-height: 14px;vertical-align:top;">';
$html.= 'Jenis Kegiatan: <span style="padding-left:3px;font-style:italic">'.$rinci->PPK.'</span><br />';
$html.= 'Media Pembawa: <span style="padding-left:3px;font-style:italic">'.$rinci->nipem.'</span><br />';
$html.= 'Jumlah Total: <span style="padding-left:3px;font-style:italic">'.$rinci->jmltotal.'</span><br />';

$html.= 'Asal: <span style="padding-left:3px;font-style:italic">'.$rinci->asal.'</span><br />';
$html.= 'Tujuan: <span style="padding-left:3px;font-style:italic">'.$rinci->tujuan.'</span><br />';
$html.= 'Pemilik: <span style="padding-left:3px;font-style:italic">'.$rinci->pemilik.'</span>';
$html.= '</td>';
$html.= '<td rowspan=5 >';
$html.= '</td>';
$html.= '<td rowspan=5 style="vertical-align:top;">';
$html.= 'Jumlah Periksa: <span style="padding-left:3px;font-style:italic">'.$rinci->jmlhewan.'</span><br />';
$html.= 'Jenis Kelamin: <span style="padding-left:3px;font-style:italic">'.$rinci->jnskelamin.'</span><br />';
$html.= '</td>';
$html.= '<td style="vertical-align:top;">';
$html.= 'Keutuhan Kemasan <span style="padding-left:3px;font-style:italic">'.$rinci->kemasan.'</span><br />';
$html.= 'Keutuhan Segel <span style="padding-left:3px;font-style:italic">'.$rinci->segel.'</span><br />';
$html.= 'Label <span style="padding-left:3px;font-style:italic">'.$rinci->label.'</span><br />';
$html.= 'Keutuhan Konsistensi <span style="padding-left:3px;font-style:italic">'.$rinci->konsistensi.'</span><br />';
$html.= 'Warna <span style="padding-left:3px;font-style:italic">'.$rinci->warna.'</span><br />';
$html.= 'Bau <span style="padding-left:3px;font-style:italic">'.$rinci->bau.'</span><br />';
$html.= 'Rasa <span style="padding-left:3px;font-style:italic">'.$rinci->rasa.'</span><br />';
$html.= '</td>';
$html.= '</tr>';
$html.= '<tr>';
$html.= '<th style="padding:5px">';
$html.= 'Penilaian Klinis';
$html.= '</th>';
$html.= '</tr>';
$html.= '<tr>';
$html.= '<td>';
$html.= 'Jumlah Kemasan <span style="padding-left:3px;font-style:italic">'. $rinci->jmlkemasan.'</span><br />';
$html.= 'Jenis Kemasan <span style="padding-left:3px;font-style:italic">'. $rinci->jnskemasan.'</span><br />';
$html.= '</td>';
$html.= '</tr>';
$html.= '<tr>';
$html.= '<th style="padding:5px">';
$html.= 'Penetapan Diagnosa';
$html.= '</th>';
$html.= '</tr>';
$html.= '<tr>';
$html.= '<td>';
$html.= 'Penetapan Diagnosa <span style="padding-left:3px;font-style:italic">'. $rinci->diagnosa.'</span><br />';
$html.= 'Tindak Lanjut <span style="padding-left:3px;font-style:italic">'. $rinci->tindaklanjut.'</span><br />';
$html.= '</td>';
$html.= '</tr>';
}
$html.= '</tbody>';

$html.= '</table>';
$html.= '</body>';
$html.= '</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>