<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
<?php 
    include_once('navigasi.php');
	$id = $_POST['id'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$id'");
    $nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<br><form action="update.php" method="post" style="margin-top:50px">	
    <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="no_absen">No. Absen</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" class="form-control" value="<?php echo $data['no_absen'] ?>" name="no_absen">
                </div>
                <div class="col-sm">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" value="<?php echo $data['kelas'] ?>" name="kelas">
                </div>
                <div class="col-sm">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?php echo $data['jenis_kelamin'] ?>" name="jenis_kelamin">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" value="<?php echo $data['jurusan'] ?>" name="jurusan">
                </div>
                <div class="col-sm">
                    <label for="mapel">Mata Pelajaran</label>
                    <input type="text" class="form-control" value="<?php echo $data['mapel'] ?>" name="mapel">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="tanggal">Hari / Tanggal</label>
                    <input type="text" class="form-control" value="<?php echo $data['tanggal'] ?>" name="tanggal">
                </div>
                <div class="col-sm">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" value="<?php echo $data['keterangan'] ?>" name="keterangan">
                </div>
            </div><br>	
            <div class="row">
            <div class="input-field col s12 text-center">
            <input type="submit" name="edit" value="edit" class="text-primary">
	</form>
	<?php } ?>
</body>
</html>