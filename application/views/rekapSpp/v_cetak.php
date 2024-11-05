<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Spp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
            text-transform: uppercase;
        }

        .header p {
            margin: 0;
            font-size: 27px;
            font-weight: 600;
        }

        .header .imageAsrama,
        .header .imageSekolah {
            width: 100px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="imageAsrama">
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="Logo Asrama">
        </div>
        <div class="text-content">
            <h1>Rekapitulasi Pendapatan</h1>
            <p>Asrama Tahfidz "Ar-Rahman"</p>
            <p>MTs Negeri 5 Majalengka</p>
        </div>
        <div class="imageSekolah">
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="Logo Sekolah">
        </div>
    </div>
    <table border="1">
        <tr>
            <th colspan="7">Periode <?= $bln_start . " S/D " . $bln_end ?></th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Nama Santri</th>
            <th>Kelas</th>
            <th>SPP</th>
            <th>Bulan</th>
            <th>Tanggal Pembayaran</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $no = 1;
        $jPembayaran = 0;
        $jTunggakan = 0;
        $jPendapatan = 0;
        $ket = "";

        foreach ($rekap as $r) :

            if ($r['keterangan'] == "Belum Lunas") {
                $jTunggakan += $r['spp'];
            } else if ($r['keterangan'] == "Lunas") {
                $jPembayaran += $r['spp'];
            }
            $jPendapatan = $jPembayaran + $jTunggakan;

            if($r['keterangan'] == "Belum Lunas") {
                $ket = "Tidak Memadai";
            } else if($r['keterangan'] == "Lunas") {
                $ket = "Memadai";
            }
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $r['nama'] ?></td>
                <td><?= $r['kelas'] ?></td>
                <td><?= $r['spp'] ?></td>
                <td><?= $r['bulan'] ?></td>
                <td><?= $r['tgl'] ?></td>
                <td><?= $r['keterangan'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="font-weight: 700;">Jumlah Pembayaran</td>
            <td colspan="4" style="font-weight: 700;">Rp.<?= number_format($jPembayaran, 0, ',', ',') ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: 700;">Jumlah Tunggakan</td>
            <td colspan="4" style="font-weight: 700;">Rp.<?= number_format($jTunggakan, 0, ',', ',') ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: 700;">Jumlah Pendapatan</td>
            <td colspan="4" style="font-weight: 700;">Rp.<?= number_format($jPendapatan, 0, ',', ',') ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: 700;">Keterangan</td>
            <td colspan="4" style="font-weight: 700;"><?= $ket; ?></td>
        </tr>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>