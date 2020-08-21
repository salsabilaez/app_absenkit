<?php

include 'koneksi.php';

if(isset($_POST['hapus'])){
    $id = $_POST['id'];
    $sqlhapusagenda = mysqli_query($koneksi,"DELETE FROM absensi WHERE id = '$id'");
    header('location:halaman_admin.php');
    echo '<script>alert("hapus peminjaman berhasil!")</script>';
}

?>