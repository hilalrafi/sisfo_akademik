<?php
function terbilang($nilai)
{
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas",);
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = terbilang($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = terbilang($nilai / 10) . " puluh" . terbilang($nilai % 10);
    } else if ($nilai < 200) {
        $temp = "seratus" . terbilang($nilai - 100);
    }
    return $temp;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - SD N 2 Karangbener</title>
    <style>
        hr {
            border: 2px solid black;
        }

        h1 {
            text-align: center;
        }

        .custom-table-center {
            width: 100%;
            text-align: center;
        }

        .custom-text-left {
            text-align: left;
            padding: 3px;
        }

        .custom-table-left {
            text-align: left;
        }

        .border-custom {
            border: 1px solid black;
            height: 80px;
        }

        .custom-table-bottom {
            width: 100%;
        }
    </style>
</head>

<body onload="window.print();">
    <h1>SD NEGERI 2 KARANGBENER KUDUS</h1>
    <p align="center">Alamat : JL. RAYA KARANGBENER, KARANGBENER, BAE, KUDUS, Telp : 085878210098</p>
    <hr>
    <p align="center">
        <b>
            RAPORT NILAI SISWA <br>
            TAHUN AKADEMIK <?= $tahun_akademik->tahun_akademik ?>
        </b>
    </p>
    <table class="custom-table-left">
        <tr>
            <th>NIS </th>
            <td>: <?= $siswa->nis ?></td>
        </tr>
        <tr>
            <th>Nama </th>
            <td>: <?= $siswa->nama_siswa ?></td>
        </tr>
        <tr>
            <th>Kelas </th>
            <td>: <?= substr($rombel->nama_rombel, 6) ?></td>
        </tr>
        <tr>
            <th>Semester </th>
            <td>: <?= $tahun_akademik->semester ?></td>
        </tr>
    </table>
    <br><br>
    <table border="1" class="custom-table-center">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Mata Pelajaran</th>
                <th rowspan="2">KKM</th>
                <th colspan="2">Nilai</th>
                <th rowspan="2">Deskripsi</th>
            </tr>
            <tr>
                <th>Angka</th>
                <th>Huruf</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $nilai_total = 0;
            foreach ($report_siswa as $report) :
                $mapel = $this->Model_mapel->getById($report->mapel_id);
                $nilai_total += $report->nilai_akhir;
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td class="custom-text-left"><?= $mapel->nama_mapel ?></td>
                    <td>70</td>
                    <td><?= $report->nilai_akhir ?></td>
                    <td>
                        <?php
                            echo terbilang($report->nilai_akhir);
                            ?>
                    </td>
                    <td>
                        <?php
                            if ($report->nilai_akhir < 70) {
                                echo "Belum Tuntas";
                            } else {
                                echo "Tuntas";
                            }
                            ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th colspan="2">Rata-rata</th>
                <td colspan="2"><?= intval($nilai_total / count($report_siswa));  ?></td>
                <td colspan="2"><?= terbilang(intval($nilai_total / count($report_siswa))); ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <span><b>Catatan Wali Kelas</b></span>
    <div class="border-custom">
    </div>
    <br>
    <table class="custom-table-bottom">
        <tr>
            <td>Mengetahui,</td>
            <td>&emsp;&ensp;Orang Tua / Wali</td>
            <td>Kudus,</td>
        </tr>
        <tr>
            <td>Kepala SDN 2 Karangbener Kudus</td>
            <td rowspan="2"></td>
            <td>Wali Kelas</td>
        </tr>
        <tr style="height: 100px;">
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Sutarwanto, S.Pd.SD</td>
            <td>.........................................</td>
            <td>.........................................</td>
        </tr>
        <tr>
            <td><b>NIP : 196301061986081002</b></td>
            <td></td>
            <td><b>NIP : </b></td>
        </tr>
    </table>
</body>

</html>