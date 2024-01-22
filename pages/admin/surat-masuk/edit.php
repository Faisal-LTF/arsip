<?php
session_start();
include "../db/koneksi.php";

if (!isset($_SESSION['nama'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../e-arsip/index.php'>";
} else {

    $id = $_GET['id'];
    $query = $link->query("SELECT * FROM surat_masuk WHERE id_suratMasuk = '$id'");
    $data = $query->fetch_array();



?>

    <div class="container-fluid px-2 px-md-2">
        <div class="card card-body mx-3 mx-md-2 mt-3 ">
            <div class="row gx-4 justify-content-center">
                <div class="col-auto my-auto ">
                    <div class=" h-100 ">
                        <h5 class=" mb-1 ">
                            Edit Data Surat Masuk
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class=" container-fluid py-4"> -->
        <div class="container py-3 ">
            <section>
                <div class="col-lg-12 mx-auto d-flex justify-content-center flex-column">
                    <form data-toggle="validator" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                if ($status) {
                                ?>

                                    <div class="alert alert-danger alert-dismissible">
                                        <button class="close" type="button" data-dismiss="alert" ariahidden="true">&times;
                                        </button>
                                        <h4><i class="icon fa fa-close">Gagal! </i></h4>
                                        <?php echo $status; ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="col-lg-12 ">
                                    <div class="card">
                                        <div class="col-lg-4 ms-sm-auto  mt-4">
                                            <div class="nav-wrapper position-relative end-7">
                                                <ul class="nav  nav-pills nav-fill p-2" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                                            <i class="material-icons text-lg position-relative">skip_next</i>
                                                            <span class="ms-1">Surat Masuk</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="ta" href="javascript:;" role="ta" aria-selected="false"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <p class="text-uppercase text-sm">Informasi Surat Masuk</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label text-bold">Nomor Surat</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Nomor Surat" type="text" name="no_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['no_surat'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-bold">Sifat Surat</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Sifat Surat" type="text" name="sifat_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['sifat_surat'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-bold">Asal Surat</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Asal Surat" type="text" name="asal_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['asal_surat'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label text-bold">Perihal</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Perihal" type="text" name="perihal" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['perihal'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label text-bold">Nomor Rak</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Nomor Rak" type="text" name="no_rak" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['no_rak'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label text-bold">Tanggal</label>
                                                    <div class="input-group input-group-dynamic">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <input class="form-control" aria-label="Tanggal" type="date" name="tgl" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required value="<?= $data['tgl'] ?>">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="input-group input-group-dynamic ">
                                                        <label class="text-bold">File Surat</label>
                                                        <div class="input-group input-group-dynamic mb-2">
                                                            <input class="form-control" aria-label="Berkas" type="file" name="file" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" accept=".pdf,.PDF,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <input name="file_lama" type="hidden" class="form-control input-sm" value="<?= $data['file'] ?>">
                                                        <?php
                                                        $file_lama = $data['file'];
                                                        $fileName = !empty($file_lama) ? basename($file_lama) : '';
                                                        ?>
                                                        <div class="mt-2">
                                                            <?php if (!empty($fileName)) : ?>
                                                                <strong>File Saat Ini:</strong> <?= $fileName ?>
                                                                <!-- <a href="javascript:void(0)" class="text-danger" onclick="deleteFile()"><i class="ti ti-x"></i></a> -->
                                                                <input name="file_lama" type="hidden" class="form-control input-sm" value="<?= $file_lama ?>">
                                                                <input name="deleteFile" type="hidden" value="1">
                                                            <?php else : ?>
                                                                <span>Tidak ada file yang diunggah</span>
                                                                <input name="file_lama" type="hidden" class="form-control input-sm" value="">
                                                            <?php endif; ?> <br>
                                                            <em class="text-danger text-sm text-italic">*Upload berkas pendukung
                                                                (PDF, maksimal 2Mb)</em>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary" value="Edit" name="edit">
                                                        <input type="reset" class="btn btn-danger" value="Reset" name="reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </section>
        </div>

    <?php
    if (isset($_POST['edit'])) {
        $no_surat = $_POST['no_surat'];
        $sifat_surat = $_POST['sifat_surat'];
        $asal_surat = $_POST['asal_surat'];
        $tgl = $_POST['tgl'];
        $perihal = $_POST['perihal'];
        $no_rak = $_POST['no_rak'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadedFile = $_FILES['file'];
            $file_lama = $_POST['file_lama'];

            if ($uploadedFile['error'] === 4) {
                $file = $file_lama;
            } else {
                $uploadedFilePath = upload($uploadedFile, '../pdf/e-arsip/');
                if ($uploadedFilePath) {
                    $file = $uploadedFilePath;
                } else {
                    echo "Gagal mengunggah file surat_pernyataan.";
                }
            }
            echo "Data berhasil diperbarui.";
        }


        $edit = $link->query("UPDATE surat_masuk SET 
no_surat = '$no_surat',
sifat_surat = '$sifat_surat',
asal_surat = '$asal_surat',
tgl = '$tgl', 
perihal = '$perihal', 
no_rak = '$no_rak', 
file = '$file'

WHERE id_suratMasuk = '$id'");

        if ($edit) {
            echo "<script>alert('Data berhasil diedit')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=data_suratMasuk'>";
        } else {
            echo "<script>alert('Data anda gagal diedit. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=edit_suratMasuk'>";
        }
    }
}




function upload($file, $targetDir)
{
    $fileName = basename($file['name']);
    $targetPath = $targetDir . $fileName;
    $fileExtension = pathinfo($targetPath, PATHINFO_EXTENSION);
    $allowedExtensions = array('jpg', 'jpeg', 'JPG', 'png', 'pdf');
    if (in_array($fileExtension, $allowedExtensions)) {
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            return $targetPath;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

    ?>