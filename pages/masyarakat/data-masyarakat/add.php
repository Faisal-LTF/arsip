<?php
session_start();
include "../db/koneksi.php";

if (!isset($_SESSION['nama'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../e-arsip/index.php'>";
} else {

?>

    <div class="container-fluid px-2 px-md-2 col-md-11">
        <div class="card card-body mx-3 mx-md-2 mt-3 ">
            <div class="row gx-4 justify-content-center">
                <div class="col-auto my-auto ">
                    <div class=" h-100 ">
                        <h5 class=" mb-1 ">
                            Tambah Data Masyarakat
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
                                <div class="card ">
                                    <div class="card-body">
                                        <p class="text-uppercase text-sm">Informasi Lengkap</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group input-group-dynamic">
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <select class="form-control" aria-label="Username" name="id_user" required readonly>
                                                            <?php
                                                            $id = $_SESSION['id_user'];
                                                            $sql = "SELECT * FROM users WHERE id_user = '$id'";
                                                            $hasil = mysqli_query($link, $sql);
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                            ?>
                                                                <option value="<?php echo $data['id_user']; ?>" selected>
                                                                    <?php echo $data['username']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">Nama Lengkap :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" type="text" name="nama" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required />
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">NIK : </label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" type="text" name="no_ktp" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required />
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">Tanggal Lahir :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" aria-label="Tanggal Lahir" type="date" name="tgl_lhr" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">Tempat Lahir :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" type="text" name="tmpt_lhr" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required />
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">Jenis Kelamin :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <!-- <label class="form-label">Jenis Kelamin</label> -->
                                                        <select name="jk" class="form-control">
                                                            <option value="">-- PILIH --</option>
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="text-bold">Agama :</label>
                                                <div class="input-group input-group-dynamic">
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" aria-label="agama" type="text" name="agama" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">No Telepon :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" type="text" name="no_tlp" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required />
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group input-group-dynamic">
                                                    <label class="text-bold">Alamat :</label>
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <input class="form-control" aria-label="alamat" type="text" name="alamat" data-minlength="4" data-error="Tidak Boleh Kurang dari 4" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                                                <input type="reset" class="btn btn-danger" value="Reset" name="reset">
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
    if (isset($_POST['simpan'])) {
        $id_user = $_POST['id_user'];
        $noKtp = $_POST['no_ktp'];
        $namaMsy = $_POST['nama'];
        $tempatLahir = $_POST['tmpt_lhr'];
        $tglLahir = $_POST['tgl_lhr'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $jenisKelamin = $_POST['jk'];
        $noTelepon = $_POST['no_tlp'];


        $simpan = $link->query("INSERT INTO masyarakat VALUES (
            '', 
            '$id_user',
            '$noKtp',
            '$namaMsy',
            '$tempatLahir',
            '$tglLahir',
            '$alamat',
            '$agama',
            '$jenisKelamin',
            '$noTelepon'
            )");

        if ($simpan) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=dataMasyarakat'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=?page=tambahMasyarakat'>";
        }
    }
}

    ?>