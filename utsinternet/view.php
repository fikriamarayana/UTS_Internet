<?php
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

    <title>View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details 
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
                                
                                    <div class="mb-3">
                                        <label>NPSN</label>
                                        <p class="form-control">
                                            <?=$tbdata['npsn'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>STATUS</label>
                                        <p class="form-control">
                                            <?=$tbdata['st'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>BENTUK PENDIDIKAN</label>
                                        <p class="form-control">
                                            <?=$tbdata['b_pendidikan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>NAMA SEKOLAH</label>
                                        <p class="form-control">
                                            <?=$tbdata['n_sekolah'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>SK PENDIRIAN</label>
                                        <p class="form-control">
                                            <?=$tbdata['sk_pendirian'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>TANGGAL PENDIRIAN</label>
                                        <p class="form-control">
                                            <?=$tbdata['tgl_pendirian'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>SK IZIN OPERASIONAL</label>
                                        <p class="form-control">
                                            <?=$tbdata['sk_izin_operasional'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>TANGGAL IZIN OPERASIONAL</label>
                                        <p class="form-control">
                                            <?=$tbdata['tgl_izin_operasional'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ALAMAT</label>
                                        <p class="form-control">
                                            <?=$tbdata['alamat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>RT</label>
                                        <p class="form-control">
                                            <?=$tbdata['rt'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>RW</label>
                                        <p class="form-control">
                                            <?=$tbdata['rw'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DUSUN</label>
                                        <p class="form-control">
                                            <?=$tbdata['dusun'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DESA</label>
                                        <p class="form-control">
                                            <?=$tb_data['DESA'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>KECAMATAN</label>
                                        <p class="form-control">
                                            <?=$tbdata['kecamatan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>KABUPATEN</label>
                                        <p class="form-control">
                                            <?=$tbdata['kabupaten'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>PROVINSI</label>
                                        <p class="form-control">
                                            <?=$tbdata['provinsi'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>KODE POS</label>
                                        <p class="form-control">
                                            <?=$tbdata['kode_pos'];?>
                                        </p>
                                    </div>
                                    

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