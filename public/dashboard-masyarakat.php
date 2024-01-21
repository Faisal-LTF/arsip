<?php
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
    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>
<div class="container-fluid py-2">
    <h4 class="text-center">
        Halaman Dashboard Aplikasi Kecamatan Mandastana
    </h4>
    <div class="row mt-2 align-items-center">
        <div class="col-lg-4 col-md-4">
            <div class="card h-100  mb-4">
                <div class="card-header   pb-0">
                    <h6 align="center">KECAMATAN MANDASTANA</h6>

                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold"></span> Visi - Misi
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block ">
                            <span class="timeline-step">
                                <i class="material-icons text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Visi</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Pelayanan Prima Dan
                                    Berkualitas Bagi Publik.</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-5 ">
                            <span class="timeline-step ">
                                <i class="material-icons text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content mt-3">
                                <h6 class="text-dark text-sm font-weight-bold  ">Misi</h6>
                                <p align="justify" class="text-secondary font-weight-bold text-xs  mb-0">
                                    1.Meningkatkan Kualitas Pelayanan Yang Berorientasi Publik. <br><br>
                                    2.Meningkatkan Kualitas Prasarana Dan Sarana Ruang Pelayanan. <br><br>
                                    3.Mengembangkan Sistem Pelayanan Berbasis Informasi Teknologi. <br><br>
                                    4.Meningkatkan Kualitas Serta Kemampuan Problem Solving Petugas ( PATEN ) Dalam
                                    Memberikan Pelayanan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>