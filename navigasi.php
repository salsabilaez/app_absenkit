<?php 
    session_start();
    include 'koneksi.php';
    $login = mysqli_query($koneksi, "SELECT * FROM user");
    $cek = mysqli_num_rows($login);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary text-light fixed-top ">
  <a class="navbar-brand text-dark" href="#">Halaman <?php echo $_SESSION['level'] = "admin"; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a style="margin-left:100%" class="navbar-brand text-dark" href="#">Absensi Siswa SMK Negeri 9 Semarang <span class="sr-only">(current)</span></a>
      </li>
      <li class="" style="margin-left:160%">
        <a href="logout.php" class="nav-link text-dark">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>