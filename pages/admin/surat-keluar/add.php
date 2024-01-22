<?php
session_start();

if (!isset($_SESSION['nama'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../e-arsip/index.php'>";
} else {

?>

    <div class="container-fluid py-4">
        <div class="row mt-4 justify-content-center">
            <div class="col-10">
                <div class="card mb-4">
                    <div class=" position-relative mt-n4 mx-3 ps-0  ">
                        <div class="bg-gradient-info shadow border-radius-lg pt-3 pb-3 ">
                            <h3 class=" text-white text-capitalize text-center py-1 ">Tambah Surat Keluar </h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!-- <hr class="horizontal dark"> -->
                        <div class="content-wrapper">
                            <section>
                                <div class="container py-4">
                                    <div class="row">
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
                                                        <div class="col-md-4">
                                                            <div class="input-group input-group-dynamic">
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <label class="form-label">Nomor Surat</label>
                                                                    <input class="form-control" aria-label="Nomor Surat" type="text" name="no_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group input-group-dynamic">
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <label class="form-label">Sifat Surat</label>
                                                                    <input class="form-control" aria-label="Sifat Surat" type="text" name="sifat_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group input-group-dynamic">
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <label class="form-label">Tujuan Surat</label>
                                                                    <input class="form-control" aria-label="Tujuan Surat" type="text" name="tujuan_surat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group input-group-dynamic">
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <label class="form-label">Perihal</label>
                                                                    <input class="form-control" aria-label="Perihal" type="text" name="perihal" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Tanggal</label>
                                                            <div class="input-group input-group-dynamic">
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <input class="form-control" aria-label="Tanggal" type="date" name="tgl" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-dynamic">
                                                                <label>FIle Surat</label>
                                                                <div class="input-group input-group-dynamic mb-4">
                                                                    <input class="form-control" aria-label="Foto " type="file" name="file" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                                <em class="text-danger text-sm text-italic">*Upload
                                                                    berkas pendukung (PDF, maksimal 2Mb)</em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col ms-4">
                                                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                                                    <input type="reset" class="btn btn-danger" value="Reset" name="reset">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    if (isset($_POST['simpan'])) {
        $no_surat = $_POST['no_surat'];
        $sifat_surat = $_POST['sifat_surat'];
        $tujuan_surat = $_POST['tujuan_surat'];
        $tgl = $_POST['tgl'];
        $perihal = $_POST['perihal'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadedsSuratFile = $_FILES['file'];

            if ($uploadedsSuratFile['error'] === 4) {
                $surat = '';
            } else {
                $uploadedsSuratFilePath = upload($uploadedsSuratFile, '../pdf/e-arsip/');
                if ($uploadedsSuratFilePath) {
                    $surat = $uploadedsSuratFilePath;
                } else {
                    echo "Gagal mengunggah file surat";
                }
            }
            echo "Data berhasil diperbarui.";
        }

        $simpan = $link->query("INSERT INTO surat_keluar VALUES (
            '', 
            '$no_surat',
            '$sifat_surat',
            '$tujuan_surat',
            '$tgl',
            '$perihal',
            '$surat'
            )");
        if ($simpan) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=data_suratKeluar'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=tambah_suratKeluar'>";
        }
    }
}


function upload($file, $targetDir)
{
    $fileName = basename($file['name']);
    $targetPath = $targetDir . $fileName;
    $fileExtension = pathinfo($targetPath, PATHINFO_EXTENSION);
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'pdf', 'JPG');
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