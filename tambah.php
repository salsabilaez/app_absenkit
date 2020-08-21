<?php
include 'koneksi.php';

if(isset($_POST['btntambah'])){
    $no_absen = $_POST['inputno'];
    $nama = $_POST['inputnama'];
    $kelas = $_POST['inputkelas'];
    $jenis_kelamin = $_POST['inputjenis_kelamin'];
    $jurusan = $_POST['inputjurusan'];
    $mapel = $_POST['inputmapel'];
    $tanggal = $_POST['inputtanggal'];
    $keterangan = $_POST['inputketerangan'];

    $query = "INSERT INTO 
    absensi SET no_absen='$no_absen', nama='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan',
    mapel='$mapel', tanggal='$tanggal', keterangan='$keterangan'";
    mysqli_query($koneksi, $query);
    header('location:halaman_admin.php');
}
?>