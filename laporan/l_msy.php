<?php

include "../db/koneksi.php";

$no = 1;
if (isset($_POST['cetak7'])) {
    /* $kec = $_POST['jenis']; */
    $tgl1 = $_POST['tgl1'];
    $tgl2 = $_POST['tgl2'];

    $sql = mysqli_query($link, "SELECT * FROM news WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' ORDER BY tanggal ");
    $label = 'LAPORAN DATA BERITA KEGIATAS KANTOR KECAMATAN   <br> Tanggal : ' . tgl($tgl1) . ' s/d ' . tgl($tgl2);
    /* $label = 'LAPORAN DATA BARANG MASUK <br> JENIS : ' . $kec; */
} else {
    $sql = mysqli_query($link, "SELECT * FROM masyarakat  ");
    $label = 'LAPORAN DATA DIRI MASYARAKAT ';
}

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
function tgl($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <style>
        a {
            color: var(--bs-link-color);
            text-decoration: none;
        }

        a:hover {
            color: var(--bs-link-hover-color);
            text-decoration: none;
        }

        .badge {
            --bs-badge-padding-x: 0.9em;
            --bs-badge-padding-y: 0.55em;
            --bs-badge-font-size: 0.75em;
            --bs-badge-font-weight: 700;
            --bs-badge-color: #000;
            --bs-badge-border-radius: 0.45rem;
            display: inline-block;
            padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
            font-size: var(--bs-badge-font-size);
            font-weight: var(--bs-badge-font-weight);
            line-height: 1;
            color: var(--bs-badge-color);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: var(--bs-badge-border-radius);
        }

        .badge:hover {
            color: var(--bs-highlight-bg);
            text-decoration: none;
        }

        .badge:empty {
            display: none;
        }

        .btn-success,
        .btn.bg-gradient-success {
            box-shadow: 0 3px 3px 0 rgba(76, 175, 80, 0.15),
                0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.15);
        }

        .btn-success:hover,
        .btn.bg-gradient-success:hover {
            background-color: #4caf50;
            border-color: #4caf50;
            box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.4),
                0 4px 23px 0 rgba(76, 175, 80, 0.15), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
        }

        .btn-success .btn.bg-outline-success,
        .btn.bg-gradient-success .btn.bg-outline-success {
            border: 1px solid #4caf50;
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle,
        .btn.bg-gradient-success:not(:disabled):not(.disabled).active,
        .btn.bg-gradient-success:not(:disabled):not(.disabled):active,
        .show>.btn.bg-gradient-success.dropdown-toggle {
            color: color-yiq(#4caf50);
            background-color: #4caf50;
        }

        .btn-success.focus,
        .btn-success:focus,
        .btn.bg-gradient-success.focus,
        .btn.bg-gradient-success:focus {
            color: #fff;
        }

        .btn-outline-success {
            box-shadow: none;
        }

        .btn-outline-success:hover:not(.active) {
            background-color: transparent;
            opacity: 0.75;
            box-shadow: none;
            color: #4caf50;
        }
    </style>

    <link rel="icon" type="image/png" href="<?php echo "../image/bjm.png" ?>">
    <title>Laporan Data Diri Masyarakat</title>
</head>

<body>
    <img src="../image/bjm.png" alt="Logo" align="left" width="90" height="120">
    <p align="center"><b>
            <br>
            <font size="5">Pelayanan Terpadu <br> Kecamatan Banjarmasin Timur </font><br>
            <font size="2">Jl. Manggis No.20, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan
                70236, Indonesia </font><br>
            <br>
            <hr size="3px" color="black">
        </b></p>

    <h3>
        <center>
            <?php echo $label ?>
        </center>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="1" cellpadding="6" width="100%">
                    <thead style="background-color: #5F9EA0">
                        <tr>

                            <th style="text-align: center; font-size: 18px; width:3%;">
                                No.
                            </th>
                            <th style="text-align: center; font-size: 18px; width:10%;">
                                NIK</th>
                            <th style="text-align: center; font-size: 18px; width:17%;">
                                Nama Lengkap</th>
                            <th style="text-align: center; font-size: 18px; width:10%;">
                                Tempat Lahir</th>
                            <th style="text-align: center; font-size: 18px; width:10%;">
                                Tanggal Lahir</th>
                            <th style="text-align: center; font-size: 18px; width:25%;">
                                Alamat</th>
                            <th style="text-align: center; font-size: 18px; width:7%;">
                                Agama</th>
                            <th style="text-align: center; font-size: 18px; width:9%;">
                                Jenis Kelamin</th>
                            <th style="text-align: center; font-size: 18px; width:17%;">
                                No Telepon</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td align="center"><?php echo $no++; ?></td>
                                <td align="center"><?= $data['no_ktp']; ?></td>
                                <td align="left"><?= $data['nama']; ?></td>
                                <td align="center"><?= $data['tmpt_lhr']; ?></td>
                                <td align="center"><?= tgl($data['tgl_lhr']) ?></td>
                                <td align="left"><?= $data['alamat']; ?></td>
                                <td align="center"><?= $data['agama']; ?></td>
                                <td align="center"><?= $data['jk']; ?></td>
                                <td align="center"><?= $data['no_tlp']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <br>
    <br>

    <br>
    <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Banjarmasin, <?php echo date('d') . ' ' . $bln[date('m')] . ' ' . date('Y') ?><br>
            Mengetahui,<br>
            Camat<br>
            <br><br>
            <br><br>
            <u><b>Drs. Hj. Rusdiana, M.AP </b></u><br>
            <b>NIP. 196709071990 2 001</b><br>
        </h5>
    </div>



</body>

</html>