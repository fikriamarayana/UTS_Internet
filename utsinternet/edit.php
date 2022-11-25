<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $tbdata_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM tbdata WHERE id='$tbdata_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $tbdata = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="tbdata_id" value="<?= $tbdata['id']; ?>">

                                    <div class="mb-3">
                                        <label>NPSN</label>
                                        <input type="text" name="npsn" value="<?=$tbdata['npsn'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STATUS</label>
                                        <input type="text" name="st" value="<?=$tbdata['st'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BENTUK PENDIDIKAN</label>
                                        <input type="text" name="b_pendidikan" value="<?=$tbdata['b_pendidikan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>NAMA SEKOLAH</label>
                                        <input type="text" name="n_sekolah" value="<?=$tbdata['n_sekolah'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SK PENDIRIAN</label>
                                        <input type="text" name="sk_pendirian" value="<?=$tbdata['sk_pendirian'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>TANGGAL PENDIRIAN</label>
                                        <input type="text" name="tgl_pendirian" value="<?=$tbdata['tgl_pendirian'];?>" class="form-control">>
                                    </div>
                                    <div class="mb-3">
                                        <label>SK IZIN OPERASIONAL</label>
                                        <input type="text" name="sk_izin_operasional" value="<?=$tbdata['sk_izin_operasional'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>TANGGAL IZIN OPERASIONAL</label>
                                        <input type="text" name="tgl_izin_operasional" value="<?=$tbdata['tgl_izin_operasional'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ALAMAT</label>
                                        <input type="text" name="alamat" value="<?=$tbdata['alamat'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>RT</label>
                                        <input type="text" name="rt" value="<?=$tbdata['rt'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>RW</label>
                                        <input type="text" name="rw" value="<?=$tbdata['rw'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DUSUN</label>
                                        <input type="text" name="dusun" value="<?=$tbdata['dusun'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DESA</label>
                                        <input type="text" name="desa" value="<?=$tbdata['desa'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>KECAMATAN</label>
                                        <input type="text" name="kecamatan" value="<?=$tbdata['kecamatan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>KABUPATEN</label>
                                        <input type="text" name="kabupaten" value="<?=$tbdata['kabupaten'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROVINSI</label>
                                        <input type="text" name="provinsi" value="<?=$tbdata['provinsi'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>KODE POS</label>
                                        <input type="text" name="kode_pos" value="<?=$tbdata['kode_pos'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>