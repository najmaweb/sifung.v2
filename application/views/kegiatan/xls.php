<html>
    <head>
        <?php
            if(1==1){
                header("Content-Type: application/vnd.ms-excel; charset=utf-8");
                header("Content-Disposition: attachment;filename=kegiatan.xls");
                header("Cache-Control: private",false);
            }
		?>
    </head>
    <body>
        <?php $sd = new Sifungdate();?>
        <table>
            <thead>
                <tr>
                    <th colspan=14>Laporan Hasil Pelaksanaan Kegiatan</th>
                </tr>
                <tr>
                    <th colspan=14>Pejabat Pelaksana Dokter Hewan Karantina</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td><td>Uraian Kegiatan</td><td><?php echo $butiranak->butiranak;?></td>
                </tr>
                <tr>
                    <td colspan=2></td><td>Angka Kredit : <?php echo $header->ak;?></td>
                </tr>
                <tr>
                    <td>2.</td><td>Pelaksana</td><td><?php echo $header->namapelaksana . '/'. $header->pelaksana . '/'. $header->jbtnpelaksana;?></td>
                </tr>
                <tr>
                    <td>3.</td><td>Dasar Pelaksanaan</td><td></td>
                </tr>
                <tr>
                    <td></td><td style="text-align:left">a. Nomor dan Surat Tugas</td><td><?php echo $header->dasar;?></td>
                </tr>
                <tr>
                    <td></td><td style="text-align:left">b. Pemberi Tugas</td><td><?php echo $header->pemberi;?></td>
                </tr>
                <tr>
                    <td>4.</td><td>Pelaksanaan</td><td></td>
                </tr>
                <tr>
                    <td></td><td style="text-align:left">a. Lokasi</td><td><?php echo $header->namaunit?></td>
                </tr>
                <tr>
                    <td></td><td style="text-align:left">b. Waktu</td><td><?php echo $header->mulai . ' - ' . $header->selesai;?></td>
                </tr>
                <tr>
                    <td></td><td style="text-align:left">c. Jam</td><td>Jam kerja sesuai dengan jadwal tugas</td>
                </tr>
                <tr>
                    <td>5.</td><td>Hasil Pelaksanaan</td><td><?php echo $header->ringkasan;?></td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr style="text-align:center;font-weight:bold">
                    <td>No. Urut</td>
                    <td>No. Operasional</td>
                    <td>Tgl. Operasional</td>
                    <td>Jenis Kegiatan</td>
                    <td>Media Pembawa</td>
                    <td>Jumlah</td>
                    <td>Asal</td>
                    <td>Tujuan</td>
                    <td>Pemilik</td>
                    <td>Dokumen</td>
                    <td>Presen</td>
                    <td>Klinis</td>
                    <td>Penilaian Klinis</td>
                    <td>Penetapan Diagnosa</td>
                </tr>
                <?php $c = 1;?>
                <?php foreach($rincian as $rinci){?>
                <tr>
                    <td><?php echo $c++;?></td>
                    <td style="text-align:center"><?php echo $rinci->nops;?></td>
                    <td style="text-align:center"><?php echo $rinci->tgopsid;?></td>
                    <td><?php echo $rinci->PPK;?></td>
                    <td><?php echo $rinci->nipem;?></td>
                    <td><?php echo $rinci->jmlhewan;?></td>
                    <td><?php echo $rinci->asal;?></td>
                    <td><?php echo $rinci->tujuan;?></td>
                    <td><?php echo $rinci->pemilik;?></td>
                    <td>
                        <?php echo isset($rinci->dok1)?$rinci->dok1.':'. $rinci->sikonstatus1:'';?><br style="mso-data-placement:same-cell;" />
                        <?php echo isset($rinci->dok2)?$rinci->dok2.':'.$rinci->sikonstatus2:'';?><br style="mso-data-placement:same-cell;" />
                        <?php echo isset($rinci->dok3)?$rinci->dok3.':'.$rinci->sikonstatus3:'';?><br style="mso-data-placement:same-cell;" />
                        <?php echo isset($rinci->dok4)?$rinci->dok4.':'.$rinci->sikonstatus4:'';?><br style="mso-data-placement:same-cell;" />
                    </td>
                    <td>Jml Periksa: <?php echo $rinci->jmltotal;?><br style="mso-data-placement:same-cell;" />
                        Jns Kelamin: <?php echo $rinci->jnskelamin;?><br style="mso-data-placement:same-cell;" />
                        Warna Bulu: <?php echo $rinci->bulukulit;?><br style="mso-data-placement:same-cell;" />
                        Kondisi Umum: <?php echo $rinci->kondisi;?><br style="mso-data-placement:same-cell;" />
                        Nafsu Makan & Minum: <?php echo $rinci->nafsu;?><br style="mso-data-placement:same-cell;" />
                        Discharge:  <?php echo $rinci->adadischarge;?><br style="mso-data-placement:same-cell;" />
                        Keterangan: <?php echo $rinci->keterangan;?><br style="mso-data-placement:same-cell;" />
                    </td>
                    <td>Suhu:  <?php echo $rinci->suhu;?><br style="mso-data-placement:same-cell;" />
                    Pulsus:  <?php echo $rinci->pulsus;?><br style="mso-data-placement:same-cell;" />
                    Respirasi: <?php echo $rinci->respirasi;?><br style="mso-data-placement:same-cell;" />
                    Limfoglandula:  <?php echo $rinci->limfo;?><br style="mso-data-placement:same-cell;" />
                    Turgor  <?php echo $rinci->turgor;?><br style="mso-data-placement:same-cell;" />
                    Mukosa:  <?php echo $rinci->mukosa;?><br style="mso-data-placement:same-cell;" />
                    Lesi:  <?php echo $rinci->lesi;?><br style="mso-data-placement:same-cell;" />
                    Keterangan: 
                    </td>
                    <td>Suhu:  <?php echo $rinci->urpensuhu;?><br style="mso-data-placement:same-cell;" />
                    Pulsus:  <?php echo $rinci->urpenpulsus;?><br style="mso-data-placement:same-cell;" />
                    Respirasi:  <?php echo $rinci->urpenrespirasi;?><br style="mso-data-placement:same-cell;" />
                    Limfoglandula:  <?php echo $rinci->urpenlimfo;?><br style="mso-data-placement:same-cell;" />
                    Mukosa:  <?php echo $rinci->urpenmukosa;?><br style="mso-data-placement:same-cell;" />
                    Turgor:  <?php echo $rinci->urpenturgor;?><br style="mso-data-placement:same-cell;" />
                    Lesi:  <?php echo $rinci->urpenlesi;?><br style="mso-data-placement:same-cell;" />
                    </td>
                    <td>Diagnosa Akhir:  <?php echo $rinci->diagnosa;?><br style="mso-data-placement:same-cell;" />
                    Tindak Lanjut:  <?php echo $rinci->tindaklanjut;?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>