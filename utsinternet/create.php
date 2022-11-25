<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Data
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">

                            <div class="mb-3">
                                <label>NPSN</label>
                                <input type="text" name="npsn" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STATUS</label>
                                <select class="form-control" name="status" id="status">
                                    <option selected>--</option>
                                    <option value="TK">Negeri</option>
                                    <option value="SD">Swasta</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>BENTUK PENDIDIKAN</label>
                                <select class="form-control" name="bentuk_pendidikan" id="bentuk_pendidikan">
                                    <option selected>--</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMk">SMk</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>NAMA SEKOLAH</label>
                                <input type="text" name="n_sekolah" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>SK PENDIRIAN</label>
                                <input type="text" name="sk_pendirian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>TANGGAL PENDIRIAN</label>
                                <input type="date" name="tgl_pendirian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>SK IZIN OPERASIONAL</label>
                                <input type="text" name="sk_izin_operasional" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>TANGGAL IZIN OPERASIONAL</label>
                                <input type="date" name="tgl_izin_operasional" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>RT</label>
                                <input type="text" name="rt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>RW</label>
                                <input type="text" name="rw" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DUSUN</label>
                                <input type="text" name="dusun" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DESA</label>
                                <input type="text" name="desa" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>KECAMATAN</label>
                                <input type="text" name="kecamatan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>KABUPATEN</label>
                                <input type="text" name="kabupaten" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PROVINSI</label>
                                <input type="text" name="provinsi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>KODE POS</label>
                                <input type="text" name="kode_pos" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>