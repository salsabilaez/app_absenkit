<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$mapel = $_POST['mapel'];
$hari_tanggal = $_POST['hari_tanggal'];

mysqli_query($host, "INSERT INTO user VALUES('','$nama','$alamat','$pekerjaan')");

header("location:index.php?pesan=input");
?>