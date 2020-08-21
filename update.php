<?php 

include 'koneksi.php';
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $no_absen = $_POST['no_absen'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $mapel = $_POST['mapel'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($koneksi, "UPDATE absensi SET no_absen='$no_absen', nama='$nama', kelas='$kelas',
    jenis_kelamin='$jenis_kelamin', jurusan='$jurusan',mapel='$mapel', tanggal='$tanggal', keterangan='$keterangan'
    WHERE id='$id'");

    header('location:halaman_admin.php');
    echo '<script>alert("edit berhasil!")</script>';
}
?>