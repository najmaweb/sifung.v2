<?php
define('FPDF_FONTPATH','application/libraries/font');
function createNarration($rinci){
    $text = '';
    $text.= '<table>';
    $text.= '<tr>';
    $text.= "<td>Kegiatan diawali dengan identifikasi data sebagai berikut :</td>";
    $text.= "</tr><tr>";
    $text.= "<td>- Nipem: ".$rinci->nipem." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Pemilik: ".$rinci->pemilik." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- ".$rinci->PPK." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Asal: ".$rinci->asal." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Tujuan: ".$rinci->tujuan." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Alat Angkut: ".$rinci->angkut." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Kondisi Alat Angkut: ".$rinci->sikon." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Riwayat Kesehatan: ".$rinci->riwayat." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>Hasil Anamnesa sebagai berikut: </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Ciri-ciri: ".$rinci->sikon." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Jumlah diperiksa: ".$rinci->jmlhewan." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Kondisi: ".$rinci->presen." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Nafsu makan/minum: ".$rinci->nafsu." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>Selanjutnya dilakukan pemeriksaan klinis: </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Suhu: ".$rinci->suhu." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Palpasi/Auskultasi/Perkusi: ".$rinci->sentuh." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Turgor kulit/mukosa: ".$rinci->turgor." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>Pemeriksaan lanjutan: </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Rekam medis/laboratorium: ".$rinci->rekam." </td>";
    $text.= "</tr><tr>";
    $text.= "<td>Hasil diagnosa: </td>";
    $text.= "</tr><tr>";
    $text.= "<td>- "."Kesimpulan: ".$rinci->kesimpulan." </td>";
    $text.= '</tr>';
    $text.= '</table>';
    return $text;
}
?>
<html>
    <header>
    <?php
    if(1==1){
		header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment;filename=rincian.xls");
		header("Cache-Control: private",false);
    }
		?>
    </header>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan=3>Laporan Hasil Pelaksanaan Kegiatan</th>
                </tr>
                <tr>
                    <th colspan=3>Pejabat Fungsional Dokter Hewan Karantina</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1.
                    </td>
                    <td>
                        Uraian Kegiatan
                    </td>
                    <td>
                        : <?php echo $butiranak->butiranak;?>
                    </td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        &nbsp; Angka Kredit :<?php echo $header->ak;?>
                    </td>
                </tr>

                <tr>
                    <td>
                        2.
                    </td>
                    <td>
                        Pelaksana
                    </td>
                    <td>
                        : <?php echo $header->namapelaksana . ' / '. $header->pelaksana . ' / '. $header->jbtnpelaksana;?>
                    </td>
                </tr>

                <tr>
                    <td>
                        3.
                    </td>
                    <td>
                        Dasar Pelaksanaan
                    </td>
                    <td>
                        : 
                    </td>
                </tr>
                <tr>
                    <td></td><td>a. Nomor dan Tgl Surat Tugas</td>
                    <td>
                        :<?php echo $header->dasar;?>
                    </td>
                </tr>
                <tr>
                    <td></td><td>b. Pemberi Tugas</td>
                    <td>
                        :<?php echo $header->pemberi.' ('.$header->jbtn.')';?>
                    </td>
                </tr>


                <tr>
                    <td>
                        4.
                    </td>
                    <td>
                        Pelaksanaan
                    </td>
                    <td>
                        : 
                    </td>
                </tr>
                <tr>
                    <td></td><td>a. Lokasi</td>
                    <td>
                        :<?php echo $header->namaunit;?>
                    </td>
                </tr>
                <tr>
                    <td></td><td>b. Waktu</td>
                    <td>
                        :<?php echo $header->mulai . ' - ' . $header->selesai;?>
                    </td>
                </tr>
                <tr>
                    <td></td><td>c. Jam</td>
                    <td>
                        :Jam kerja sesuai dengan jadwal tugas
                    </td>
                </tr>

                <tr>
                    <td>
                        5.
                    </td>
                    <td>
                        Hasil Pelaksanaan
                    </td>
                    <td>
                        : <?php echo $header->ringkasan;?>
                    </td>
                </tr>

            </tbody>
        </table>
        <table>
        <thead><th>No</th><th>Tgl Ops</th><th>No Ops</th><th>Rincian</th></thead>
            <tbody>
                <?php $i=0;?>
                <?php foreach($rincian as $rinci){?>
                    <?php
                        if(!is_null($rinci->nops)){
                            $rincinops = $rinci->nops;
                        }else{
                            $rincinops = "";
                        }   
                        $i++;                     
                    ?>
                <tr>
                    <td>
                    <?php echo $i;?>
                    </td>
                    <td>
                        <?php echo $rinci->tgops;?>
                    </td>
                    <td>
                        <?php echo $rincinops;?>
                    </td>
                    <td>
                        <?php echo createNarration($rinci);?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>