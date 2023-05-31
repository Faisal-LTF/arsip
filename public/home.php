<?php

session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../aev/index.php'>";
} else {

    include '../layouts/header.php';
    include '../layouts/sidebar.php';
    include '../db/koneksi.php';

    $id = $_SESSION['id_user'];
?>
<?php
    error_reporting(0);
    switch ($_GET['page']) {
        default:

            include "../public/dashboard.php";
            break;

            // START ADMIN PAGE
            //PORTAL BERITA

        case "data_berita";
            include "../admin/news/data.php";
            break;
        case "tambah_berita";
            include "../admin/news/add.php";
            break;
        case "edit_berita";
            include "../admin/news/edit.php";
            break;
        case "hapus_berita";
            include "../admin/news/delete.php";
            break;

            // PEGAWAI
        case "data_pegawai";
            include "../admin/pegawai/data.php";
            break;
        case "tambah_pegawai";
            include "../admin/pegawai/add.php";
            break;
        case "detailPegawai";
            include "../admin/pegawai/detail.php";
            break;

            // PROFILE
        case "data_profile";
            include "../admin/profile/data.php";
            break;

            // GOLONGAN
        case "data_golongan";
            include "../admin/golongan/data.php";
            break;
        case "edit_golongan";
            include "../admin/golongan/edit.php";
            break;
        case "hapus_golongan";
            include "../admin/golongan/delete.php";
            break;

            // JABATAN
        case "data_jabatan";
            include "../admin/jabatan/data.php";
            break;
        case "edit_jabatan";
            include "../admin/jabatan/edit.php";
            break;
        case "hapus_jabatan";
            include "../admin/jabatan/delete.php";
            break;


            // USERS
        case "data_user";
            include "../admin/user/data.php";
            break;
        case "tambah_user";
            include "../admin/user/add.php";
            break;
        case "edit_user";
            include "../admin/user/edit.php";
            break;
        case "edit_user_password";
            include "../admin/user/edit_password.php";
            break;
        case "hapus_user";
            include "../admin/user/delete.php";
            break;
            // END ADMIN PAGE

            // START  PAGAWAI PAGE

            // PEGAWAI
        case "dataPegawai";
            include "../pegawai/pegawai/data.php";
            break;
        case "tambahPegawai";
            include "../pegawai/pegawai/add.php";
            break;
        case "editPegawai";
            include "../pegawai/pegawai/edit.php";
            break;
        case "hapusPegawai";
            include "../pegawai/pegawai/delete.php";
            break;

            // END PEGAWAI PAGE

    }
?>

<?php
    include '../layouts/footer.php';
}
?>