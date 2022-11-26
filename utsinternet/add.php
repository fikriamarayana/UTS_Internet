<html>
<head>
	<title>Add Data</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$npsn = mysqli_real_escape_string($mysqli, $_POST['npsn']);
	$status = mysqli_real_escape_string($mysqli, $_POST['status']);
	$bentuk_pendidikan = mysqli_real_escape_string($mysqli, $_POST['bentuk_pendidikan']);
	$nama_sekolah = mysqli_real_escape_string($mysqli, $_POST['nama_sekolah']);
	$sk_pendirian = mysqli_real_escape_string($mysqli, $_POST['sk_pendirian']);
	$tgl_pendirian = mysqli_real_escape_string($mysqli, $_POST['tgl_pendirian']);
	$sk_izin_operasional = mysqli_real_escape_string($mysqli, $_POST['sk_izin_operasional']);
	$tgl_izin_operasional = mysqli_real_escape_string($mysqli, $_POST['tgl_izin_operasional']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$rt = mysqli_real_escape_string($mysqli, $_POST['rt']);
	$rw = mysqli_real_escape_string($mysqli, $_POST['rw']);
	$dusun = mysqli_real_escape_string($mysqli, $_POST['dusun']);
	$desa = mysqli_real_escape_string($mysqli, $_POST['desa']);
	$kecamatan = mysqli_real_escape_string($mysqli, $_POST['kecamatan']);
	$kabupaten = mysqli_real_escape_string($mysqli, $_POST['kabupaten']);
	$provinsi = mysqli_real_escape_string($mysqli, $_POST['provinsi']);
	$kode_pos = mysqli_real_escape_string($mysqli, $_POST['kode_pos']);
		
	
		// if all the fields are filled (not empty) 
		
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO tabel_sekolah (npsn, status, bentuk_pendidikan, nama_sekolah, sk_pendirian, tgl_pendirian, sk_izin_operasional, tgl_izin_operasional, alamat, 
		rt, rw, dusun, desa, kecamatan, kabupaten, provinsi, kode_pos) 
		VALUES('$npsn','$status','$bentuk_pendidikan', '$nama_sekolah', '$sk_pendirian', '$tgl_pendirian', '$sk_izin_operasional', '$tgl_izin_operasional', '$alamat', 
		'$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kabupaten', '$provinsi', '$kode_pos')
		
		");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	
}
?>
</body>
</html>
