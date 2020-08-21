
<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absenkit</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
<?php include_once('navigasi.php');?>
<br>
<form action="tambah.php" method="post" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="no_absen">No. Absen</label>
                    <input type="text" class="form-control" id="no_absen" name="inputno">
                </div>
                <div class="col-sm">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="inputnama">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="inputkelas">
                </div>
                <div class="col-sm">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="inputjenis_kelamin" required>
                        <option >-pilih-</option>
                        <option value="laki - laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="inputjurusan">
                </div>
                <div class="col-sm">
                    <label for="mapel">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mapel" name="inputmapel">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="inputtanggal">
                </div>
                <div class="col-sm">
                    <label for="keterangan">Keterangan</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inputketerangan" id="keterangan" value="Hadir">
                        <label class="form-check-label" for="keterangan">Hadir</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="margin-left: 50%" name="inputketerangan" id="keterangan" value="Ijin">
                        <label class="form-check-label" for="keterangan">Ijin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="margin-left: 100%" name="inputketerangan" id="keterangan" value="Alpa">
                        <label class="form-check-label" for="keterangan">Alpa</label>
                    </div>
                </div>
            </div><br>
            <div class="row">
            <div class="input-field col s12 text-center">
                <button class="btn btn-outline-primary" type="submit" name="btntambah">TAMBAH</button>
            </div>
        </div>
    </form><br>
    <table style="width:100%;" class="text-center table table-hover table-striped"">
    <thead class="thead-dark">
        <tr>
            <th scope="col">NO.</th>
            <th scope="col">No. Absen</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keterangan</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <TBody>
        <?php
            $nomer = 1;
            $sqlabsensi = mysqli_query($koneksi, "SELECT * FROM absensi");
            while($fetchabsensi = mysqli_fetch_array($sqlabsensi)){
                echo '<tr>';
                echo'<td>'.$nomer++.'</td>';
                echo'<td>'.$fetchabsensi['no_absen'].'</td>';
                echo'<td>'.$fetchabsensi['nama'].'</td>';
                echo'<td>'.$fetchabsensi['kelas'].'</td>';
                echo'<td>'.$fetchabsensi['jenis_kelamin'].'</td>';
                echo'<td>'.$fetchabsensi['jurusan'].'</td>';
                echo'<td>'.$fetchabsensi['mapel'].'</td>';
                echo'<td>'.$fetchabsensi['tanggal'].'</td>';
                echo'<td>'.$fetchabsensi['keterangan'].'</td>';
                echo'
                    <td style="widht:20%;">
                    <input type="hidden" name="id" value="'.$fetchabsensi['id'].'">
                        <form action ="hapus.php" method="post">
                        <input type="hidden" name="id" value="'.$fetchabsensi['id'].'">
                            <button type="submit" name="hapus" class="btn btn-outline-primary">HAPUS</button>
                    </form>
                </td>';
                echo'
                    <td style="widht:20%;">
                    <input type="hidden" name="id" value="'.$fetchabsensi['id'].'">
                        <form action ="edit.php" method="post">
                        <input type="hidden" name="id" value="'.$fetchabsensi['id'].'">
                            <button type="submit" name="edit" class="btn btn-outline-primary">Edit</button>
                    </form>
                </td>';
                echo'</tr>';
            }
        ?>
    </TBody>
    </table>
</body>
<footer class="p-2 bg-primary text-white text-center" style="margin-top:2%;margin-left:-11%;width:121.5%;">
            Copyright@Salsabila Eka Zahra
</footer>
</html>