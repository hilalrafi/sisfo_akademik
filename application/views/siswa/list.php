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

        .custom-button {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            text-align: center;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>SD NEGERI 2 KARANGBENER KUDUS</h1>
    <p align="center">Alamat : JL. RAYA KARANGBENER, KARANGBENER, BAE, KUDUS, Telp : 085878210098</p>
    <hr>
    <p align="center">
        <b>
            NILAI SISWA <br>
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
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($report_siswa as $report) :
                $mapel = $this->Model_mapel->getById($report->mapel_id);
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td class="custom-text-left"><?= $mapel->nama_mapel ?></td>
                    <td><?= $report->nilai_tugas ?></td>
                    <td><?= $report->nilai_uts ?></td>
                    <td><?= $report->nilai_uas ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <a href="<?= base_url('auth/cari') ?>" class="custom-button">Kembali</a>
</body>

</html>