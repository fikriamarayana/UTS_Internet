<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $tbdata_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM tbdata WHERE id='$tbdata_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $tbdata_id = mysqli_real_escape_string($con, $_POST['tbdata_id']);

    $npsn = mysqli_real_escape_string($con, $_POST['npsn']);
    $st = mysqli_real_escape_string($con, $_POST['st']);
    $b_pendidikan = mysqli_real_escape_string($con, $_POST['b_pendidikan']);
    $n_sekolah = mysqli_real_escape_string($con, $_POST['n_sekolah']);
    $sk_pendirian = mysqli_real_escape_string($con, $_POST['sk_pendirian']);
    $tgl_pendirian = mysqli_real_escape_string($con, $_POST['tgl_pendirian']);
    $sk_izin_operasional = mysqli_real_escape_string($con, $_POST['sk_izin_operasional']);
    $tgl_izin_operasional = mysqli_real_escape_string($con, $_POST['tgl_izin_operasional']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $rt = mysqli_real_escape_string($con, $_POST['rt']);
    $rw = mysqli_real_escape_string($con, $_POST['rw']);
    $dusun = mysqli_real_escape_string($con, $_POST['desun']);
    $desa = mysqli_real_escape_string($con, $_POST['desa']);
    $kecamatan = mysqli_real_escape_string($con, $_POST['kecamatan']);
    $kabupaten = mysqli_real_escape_string($con, $_POST['kabupaten']);
    $provinsi= mysqli_real_escape_string($con, $_POST['provinsi']);
    $kode_pos = mysqli_real_escape_string($con, $_POST['kode_pos']);

    $query = "UPDATE tbdata SET npsn='$npsn', st='$st', b_pendidikan='$b_pendidikan', n_sekolah='$n_sekolah', 
    sk_pendirian='$sk_pendirian', tgl_pendirian='$tgl_pendirian', sk_izin_operasional='$sk_izin_operasional', 
    tgl_izin_operasional='$tgl_izin_operasional', almat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kecamatan='$kecamatan', 
    kabupaten='$kabupaten', provinsi='$provinsi', kode_pos='$kode_pos' WHERE id='$tbdata_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $npsn = mysqli_real_escape_string($con, $_POST['npsn']);
    $st = mysqli_real_escape_string($con, $_POST['st']);
    $b_pendidikan = mysqli_real_escape_string($con, $_POST['b_pendidikan']);
    $n_sekolah = mysqli_real_escape_string($con, $_POST['n_sekolah']);
    $sk_pendirian = mysqli_real_escape_string($con, $_POST['sk_pendirian']);
    $tgl_pendirian = mysqli_real_escape_string($con, $_POST['tgl_pendirian']);
    $sk_izin_operasional = mysqli_real_escape_string($con, $_POST['sk_izin_operasional']);
    $tgl_izin_operasional = mysqli_real_escape_string($con, $_POST['tgl_izin_operasional']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $rt = mysqli_real_escape_string($con, $_POST['rt']);
    $rw = mysqli_real_escape_string($con, $_POST['rw']);
    $dusun = mysqli_real_escape_string($con, $_POST['desun']);
    $desa = mysqli_real_escape_string($con, $_POST['desa']);
    $kecamatan = mysqli_real_escape_string($con, $_POST['kecamatan']);
    $kabupaten = mysqli_real_escape_string($con, $_POST['kabupaten']);
    $provinsi= mysqli_real_escape_string($con, $_POST['provinsi']);
    $kode_pos = mysqli_real_escape_string($con, $_POST['kode_pos']);

    $query = "UPDATE tbdata SET npsn='$npsn', st='$st', b_pendidikan='$b_pendidikan', n_sekolah='$n_sekolah', 
    sk_pendirian='$sk_pendirian', tgl_pendirian='$tgl_pendirian', sk_izin_operasional='$sk_izin_operasional', 
    tgl_izin_operasional='$tgl_izin_operasional', almat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kecamatan='$kecamatan', 
    kabupaten='$kabupaten', provinsi='$provinsi', kode_pos='$kode_pos' WHERE id='$tbdata_id' ";
    $query_run = mysqli_query($con, $query);

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Created";
        header("Location: create.php");
        exit(0);
    }
}

?>