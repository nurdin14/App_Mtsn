<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Rekap Kas SPP</title>
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
            <h1>Laporan Kas SPP</h1>
            <p>Asrama Tahfidz "Ar-Rahman"</p>
            <p>MTs Negeri 5 Majalengka</p>
        </div>
        <div class="imageSekolah">
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="Logo Sekolah">
        </div>
    </div>
    <table border="1">
        <tr>
            <th colspan="7">Periode <?= $tgl_start . " S/D " . $tgl_end ?></th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
        </tr>
        <?php
        $no = 1;
        $tPemasukan = 0;
        $tPengeluaran = 0;

        foreach ($rekap as $r) :
            $tPemasukan += $r['pemasukan'];
            $tPengeluaran += $r['pengeluaran'];
            $sisa = $tPemasukan - $tPengeluaran;
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $r['tgl'] ?></td>
                <td><?= $r['ket'] ?></td>
                <td><?= $r['pemasukan'] ?></td>
                <td><?= $r['pengeluaran'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><b>Total</b></td>
            <td><b>Rp.<?= number_format($tPemasukan, 0, ',', ',') ?></b></td>
            <td><b>Rp.<?= number_format($tPengeluaran, 0, ',', ',') ?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b>Sisa Saldo Akhir</b></td>
            <td colspan="2"><b>Rp.<?= number_format($sisa, 0, ',', ',') ?><b></td>
        </tr>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>