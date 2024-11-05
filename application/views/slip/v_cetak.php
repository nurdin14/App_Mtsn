<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Pembayaran</title>
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

        .footer {
            text-align: center;
            margin-bottom: 20px;
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

        .info,
        .tanda-tangan {
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
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

        .tanda-tangan div {
            width: 33%;
            display: inline-block;
            text-align: center;
            vertical-align: top;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="imageAsrama">
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="Logo Asrama">
        </div>
        <div class="text-content">
            <h1>Rekap Pembayaran Terhutang</h1>
            <p>Santri Asrama Tahfidz "Ar-Rahman"</p>
            <p>MTs Negeri 5 Majalengka</p>
        </div>
        <div class="imageSekolah">
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="Logo Sekolah">
        </div>
    </div>
    <hr style="border: 1px solid black;">
    <hr style="border: 1px solid black; margin-top:-0.3%">
    <div class="info">
        <p>Nama: <?= $santri['nama'] ?></p>
        <p>Status Santri: <?= $santri['status'] ?></p>
        <p>Kelas: <?= $santri['kelas'] ?></p>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>SPP</th>
                <th>Uang Makan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $jumlahSpp = 0; // Inisialisasi variabel
            $jumlahMakan = 0; // Inisialisasi variabel

            foreach ($slip as $s) :
                $jumlahSpp += $s['spp'];
                $jumlahMakan += $s['uang_makan'];
                $total = $jumlahSpp + $jumlahMakan; // Total dihitung setiap baris, sebaiknya dihitung setelah loop

                $tanggl = $s['bulan'];
                $dateObject = new DateTime($tanggl);
                $months = [
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember'
                ];


                $monthNumber = $dateObject->format('n');

                $monthName = $months[$monthNumber];

                $year = $dateObject->format('Y');

                $formattedDate = $monthName . ' ' . $year;
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($formattedDate); ?></td>
                    <td>Rp. <?= number_format($s['spp'], 0, ',', ','); ?></td>
                    <td>Rp. <?= number_format($s['uang_makan'], 0, ',', ','); ?></td>
                    <td><?= htmlspecialchars($s['keterangan']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Jumlah</th>
                <th>Rp. <?= number_format($jumlahSpp, 0, ',', ','); ?></th>
                <th>Rp. <?= number_format($jumlahMakan, 0, ',', ','); ?></th>
                <th></th>
            </tr>
            <tr>
                <th colspan="4">Total</th>
                <th>Rp. <?= number_format($jumlahSpp + $jumlahMakan, 0, ',', ','); ?></th>
            </tr>
        </tfoot>
    </table>

    <div class="tanda-tangan">
        <div>
            <p>Talaga,
                <?php
                $tanggl = date('Y-m-d'); // Format yang benar untuk tanggal saat ini
                $dateObject = new DateTime($tanggl);

                $months = [
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember'
                ];

                $monthNumber = $dateObject->format('n'); // Mendapatkan nomor bulan
                $monthName = $months[$monthNumber]; // Mendapatkan nama bulan

                $year = $dateObject->format('Y'); // Mendapatkan tahun
                $day = $dateObject->format('j'); // Mendapatkan tanggal hari

                $bulan = $day . ' ' . $monthName . ' ' . $year; // Format lengkap tanggal
                echo $bulan; // Menampilkan tanggal lengkap
                ?>

            </p>
            <p>Pimpinan Asrama,</p>
            <br><br>
            <p style="margin-top:5%;">(<?= $pimpinan['nama'] ?>)</p>
        </div>
        <div>
            <p>Bendahara,</p>
            <br><br>
            <br><br>
            <p>(<?= $bendahara['nama'] ?>)</p>
        </div>
        <div>
            <p>Mengetahui,</p>
            <p>Penanggung Jawab Asrama,</p>
            <br><br>
            <p>(<?= $penanggung['nama'] ?>)</p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>