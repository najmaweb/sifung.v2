<?php



$mpdf = new \Mpdf\Mpdf();
$html = '<html>';
$html.= '<head>';
$html.= '</head>';
$html.= '<body>';
$html.= '<table width=100%>';
$html.= '<thead>';
$html.= '<tr>';
$html.= '<th>NO</th>';
$html.= '<th>NO</th>';
$html.= '<th>TGL</th>';
$html.= '<th>JENIS</th>';
$html.= '<th rowspan=2>DOKUMEN</th>';
$html.= '<th rowspan=2>PRESEN</th>';
$html.= '</tr>';

$html.= '<tr>';
$html.= '<th>URUT</th>';
$html.= '<th>OPS</th>';
$html.= '<th>OPS</th>';
$html.= '<th>KEGIATAN</th>';
$html.= '</tr>';

$html.= '</thead>';

$html.= '<tbody>';
$html.= '<tr>';
$html.= '<td>NO</td>';
$html.= '<td>Ne</td>';
$html.= '</tr>';
$html.= '</tbody>';

$html.= '</table>';
$html.= '</body>';
$html.= '</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
