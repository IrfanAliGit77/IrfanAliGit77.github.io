<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING))
?>
<!DOCTYPE html>
<html>
  
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Tentang Kami</title>
</head>

<body>
  <div class="container-xxl">

    <!-- Bagian header -->
    <nav class="navbar navbar-light" id="header">
      <div class="container-fluid">
        <img src="images/kemkominfo.png" class="img-fluid" alt="..." width="100px">
        <!-- <a class="navbar-brand">Navbar</a> -->
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- Bagian navbar -->
    <nav class="navbar navbar-expand-lg" id="menuBar">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="visiMisi.php">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="struktur.php">Struktur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="ruangLingkup.php">Ruang Lingkup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homeCURD.php">Data Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.php">Tentang</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="jadwal.php">Jadwal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://202.89.117.140/">List Pelatihan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&su=Isikan+judul+anda+secara+mandiri!&to=bpptik@kominfo.go.id&body=Tuliskan+pesan+anda+secara+mandiri+tepat+disini!">Daftarkan Email</a></li>
          </ul>
        </li>
          </ul>
          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>

    <div class="row" id="content">
      <div class="col">
        <p>
        <h3>
          <center>BPPTIK</center>
        </h3>
        <hr>
        <br><br><img id="bpp" src="images/bpp.png" class="img-fluid" alt="..." width="250px">
        <img id="bnsp" src="images/bnsp.png" class="img-fluid" alt="..." width="250px"><br><br><br>

       <?php
       echo "&emsp;Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK) adalah Unit Pelaksana Teknis Balitbang SDM yang berada dibawah naungan Kementerian Komunikasi & Informatika Republik Indonesia."."<br><br>";


        echo "&emsp;Pembangunan BPPTIK sendiri didasarkan pada Record of Discussions Between  Koica Of The  Republic of Korea And The Ministry of Communication and Information Technology of The Government of The Republic of Indonesia on The Project For The Establishment of A Korea-Indonesia ICT Training Center,  yang ditanda tangani pada tanggal 12 Juli 2007 dan juga Persetujuan Menteri Keuangan tentang Grant dengan Register Nomor : 70751901 Tanggal  14   Juli 2008. Berdasarkan pada dua keputusan tersebut, KOICA memberikan bantuan dalam bentuk grant US$ 8.900.000 yang diimplementasikan pada proyek selama 2 tahun (2007-2009)."."<br><br>";

        
        echo "&emsp;Peletakan batu pertama dilakukan pada tanggal 7 Mei 2007 oleh Muhammad Nuh (pada waktu itu menjabat sebagai Menteri Kominfo) dan Duta Besar Korea saat itu Mr. Kim Hoyoung. Pembangunan berlangsung selama 2 tahun dan serah terima gedung dari KOICA ke Pemerintah Indonesia/Balitbang SDM KemKominfo dilakukan pada Juli 2009. Pada tanggal 31 Mei 2011, Menteri Kominfo Tifatul Sembiring meresmikan fasilitas negara ini untuk dipergunakan dan dimanfaatkan secara luas bagi industri dan masyarakat yang membutuhkan pelayanan serta pelatihan dalam lingkup Teknologi Informasi dan Komunikasi. BPPTIK bertanggung jawab langsung dibawah satuan kerja Badan Penelitian & Pengembangan Sumber Daya Manusia Kementerian Kominfo yang dikepalai oleh Aizirman Djusan."."<br><br>";
       
        echo "&emsp;Gedung beserta sebagian besar peralatan di BPPTIK merupakan hibah dari KOICA (Korean International Cooperation Agency) yang merupakan badan resmi dari Korea untuk misi bantuan dan kerjasama bagi negara-negara berkembang.";
        ?>

        <hr>

      </div>
    </div>

    <div class="row" id="sidebar">
      <div class="col">
        <a href="jadwal.php">
        <img src="images/ikonJadwal.png" class="img-fluid" alt="..." width="300px">
      </a>
      </div>
    </div>

    <div class="row" id="sidebar">
      <div class="col">
         <a href="http://202.89.117.140/">
        <img src="images/ikonPelatihan.png" class="img-fluid" alt="..." width="300px">
      </a>
      </div>
    </div>

    <div class="row" id="sidebar2">
      <div class="col">
        <b>Newsletter</b>
        <br><br>
        <center>Daftarkan e-mail Anda ke Newsletter BPPTIK untuk mendapatkan update dari kami:</center><br>
        <form action="" method="post">
        <p><input class="form-control" type="email" name="email" placeholder="Email valid" size="30" required /></p>
        </form>
        <a href="mailto:bpptik@kominfo.go.id?subject=Isikan%20judul%20anda%20secara%20mandiri%21&body=Tuliskan%20pesan%20anda%20secara%20mandiri%20tepat%20disini%21">
        <center><button type="submit" name="kirim" class="btn btn-primary">Daftar</button><br></center><br>
        </a>
        Setelah mendaftar Newsletter, jangan lupa segera buka e-mail Anda untuk mengaktivasikan Newsletternya. (Catatan:
        jika e-mail dari kami tidak ada di inbox e-mail Anda, mohon periksa pada folder bulk/spam e-mail Anda)
      </div>
    </div>
    <br><br>
    <div class="row" id="footer">
      <div class="col">
        <center>Copyright © 2021 Muh. Irfan Ali. All Rights Reserved</center>
      </div>
    </div>

  </div>

</body>

</html>