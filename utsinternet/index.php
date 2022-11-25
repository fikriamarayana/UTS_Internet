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

    <title>CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-24">
                <div class="card">
                    <div class="card-header">
                        <h4> Details
                            <a href="create.php" class="btn btn-primary float-end">Add data</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NPSN</th>
                                    <th>Status</th>
                                    <th>Bentuk Pendidikan</th>
                                    <th>Nama Sekolah</th>
                                    <th>SK Pendirian</th>
                                    <th>Tanggal Pendirian</th>
                                    <th>SK Izin OperasionalL</th>
                                    <th>Tanggal Izin Operasional</th>
                                    <th>Alamat</th>
                                    <th>Rt</th>
                                    <th>Rw</th>
                                    <th>Dusun</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Provinsi</th>
                                    <th>Kode Pos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tbdata";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $tbdata)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $tbdata['npsn']; ?></td>
                                                <td><?= $tbdata['st']; ?></td>
                                                <td><?= $tbdata['b_pendidikan']; ?></td>
                                                <td><?= $tbdata['n_sekolah']; ?></td>
                                                <td><?= $tbdata['sk_sekolah']; ?></td>
                                                <td><?= $tbdata['tgl_pendirian']; ?></td>
                                                <td><?= $tbdata['sk_izin_operasional']; ?></td>
                                                <td><?= $tbdata['tgl_izin_operasional']; ?></td>
                                                <td><?= $tbdata['alamat']; ?></td>
                                                <td><?= $tbdata['rt']; ?></td>
                                                <td><?= $tbdata['rw']; ?></td>
                                                <td><?= $tbdata['dusun']; ?></td>
                                                <td><?= $tbdata['desa']; ?></td>
                                                <td><?= $tbdata['kecamatan']; ?></td>
                                                <td><?= $tbdata['kabupaten']; ?></td>
                                                <td><?= $tbdata['provinsi']; ?></td>
                                                <td><?= $tbdata['kode_pos']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?= $tbdata['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $tbdata['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$tbdata['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>