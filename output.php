<?php
session_start();
if ($_SESSION["nisn"] === null){
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/smk.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Antrian Ambil-PIN di SMKN 1 Pungging | ARKASI</title>
</head>
<body>
<div class="container-fluid" style="padding:0;">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #082b59;">
      <div class="container">
        <a class="navbar-brand" href="/index.html" style="height:50px;">
          <img src="img/smk.png" alt="logo smk" height="50px" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><b>Home</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><b>Profil Sekolah</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li><a class="dropdown-item" href="#">Identitas Sekolah</a></li>
                <li><a class="dropdown-item" href="#">Visi, Misi & Tujuan Sekolah</a></li>
                <li><a class="dropdown-item" href="#">Pimpinan</a></li>
                <li><a class="dropdown-item" href="#">Akreditasi Kompetensi Keahlian</a></li>
                <li><a class="dropdown-item" href="#">Prestasi</a></li>
                <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><b>Kompetensi Keahilan</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Teknik Otomotif</a></li>
                <li><a class="dropdown-item" href="#">Teknik Mesin</a></li>
                <li><a class="dropdown-item" href="#">Teknik Pengelasan</a></li>
                <li><a class="dropdown-item" href="#">Teknik Komputer Jaringan & Telekomunikasi</a></li>
                <li><a class="dropdown-item" href="#">Teknik Ketenaga Listrikan</a></li>
                <li><a class="dropdown-item" href="#">Desain Komunikasi Visual</a></li>
                <li><a class="dropdown-item" href="#">Broadcasting & Perfilman</a></li>
                <li><a class="dropdown-item" href="#">Pemasaran</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><b>PPDB-SMK</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Nomor Antrian Ambil PIN</a></li>
                <li><a class="dropdown-item" href="#">Jadwal</a></li>
                <li><a class="dropdown-item" href="#">Jumlah Pagu</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/loginvsga/e-kopsis/index.html"><b>e-Kopsis</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Pengumuman</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 p-3 mt-1">
          <div class="container border border-3" style="background-color: #f1c40f; border-radius: 5px; stroke: 50px; text-align: center;">
            <h5 class="text-light mt-3 mb-2"><strong>NOMOR ANTRIAN ANDA<br></strong></h5>
            <h2 class="text-danger mb-3"><strong><?php echo "".$_SESSION["noAntri"]."";?></strong></h2>
          </div>
          <table class="table table-borderless" style="text-align: center;"> 
          <tr>
              <th>NPSN</th>
              <td scope="col">:</td>
              <td scope="col"><?php echo $_SESSION["npsn"]; ?></td>
              <th>NISN</th>
              <td scope="col">:</td>
              <td scope="col"><?php echo $_SESSION["nisn"]; ?></td>
            </tr>
          </table>
          <a href="logout.php"><button id="logout" type="button">Log out</button></a>
      </div>
        <div class="col-sm-8 p-3">
            <span><strong>Jadwal Ambil PIN</strong></span>
              <table class="table mt-1">
                <thead class="text-white" style="background-color: #082b59;">
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Antrian</th>
                  </tr>
                  </thead>
                  <tr>
                    <td>1</td>
                    <td>Kamis</td>
                    <td>02 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>1-50 <br> 51-100</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jumat</td>
                    <td>03 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 11.00 WIB</td>
                    <td>101-150 <br> 150-180</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Senin</td>
                    <td>06 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>181-230 <br> 231-280</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Selasa</td>
                    <td>07 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>281-330 <br> 331-380</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Rabu</td>
                    <td>08 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>381-430 <br> 431-480</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Kamis</td>
                    <td>09 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>481-530 <br> 531-580</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Jumat</td>
                    <td>10 Juni 2022</td>
                    <td>07.00 - 09.30 WIB <br> 09.31 - 12.00 WIB</td>
                    <td>581-630 <br> 631-660</td>
                  </tr>
              </table>
            </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
