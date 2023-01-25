<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">
  <script src="script.js"></script>


  <title>RexStore</title>
</head>

<body>
  <!-- AWAL NAVBAR -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <nav class="navbar sticky-top navbar-expand-lg font-light" style="background-color:#262626;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="color:white ;"> <img src="logo.png" alt="" style="width: 60px;height:60px;margin-right:10px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:white ;">
        <span class="navbar-toggler-icon">=</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:white ;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="link" id="menu">Home</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="link" id="menu">Contact</a>
          </li>
          <li class="nav-item">
            <?php session_start();
            if (isset($_SESSION['username'])) {
              $checkadmin = $_SESSION['is_admin'];
              if ($checkadmin == 1) {
                echo  "<li class='nav-item'>";
                echo  "<a href='admin.php' class='link' id='menu'>Admin</a>";
                echo  "</li>";
                echo  "<li class='nav-item'>";
                echo  "<a href='logout.php' class='link' id='menu'>Logout</a>";
                echo  "</li>";
              } else {
                echo  "<li class='nav-item'>";
                echo  "<a href='logout.php' class='link' id='menu'>Logout</a>";
                echo  "</li>";
              }
            } else {
              echo  "<li class='nav-item'>";
              echo  " <a href='register.php' class='link' id='menu'>Register</a>";
              echo  "</li>";
              echo  "<li class='nav-item'>";
              echo  "<a href='login.php' class='link' id='menu'>Login</a> ";
              echo  "</li>";
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- AKHIR NAVBAR -->

  <!-- AWAL CARSOEL -->
  <div class="container mt-5 align-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators" style="height:50px;">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner" style="bottom:29px">
        <div class="carousel-item active">
          <img src="../assets/imgg.jpg" class="d-block img-fluid" alt="Gambar 1">
        </div>
        <div class="carousel-item">
          <img src="../assets/img2.jpg" class="d-block img-fluid" alt="Gambar 2">
        </div>
        <div class="carousel-item">
          <img src="../assets/img3.jpg" class="d-block img-fluid" alt="Gambar 3">
        </div>
        <div class="carousel-item">
          <img src="../assets/img4.jpg" class="d-block img-fluid" alt="Gambar 4">
        </div>
        <div class="carousel-item">
          <img src="../assets/img5.jpg" class="d-block img-fluid" alt="Gambar 5">
        </div>
        <div class="carousel-item">
          <img src="../assets/img6.jpg" class="d-block img-fluid" alt="Gambar 6">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- AKHIR CAROUSEL -->

  <!-- AWAL GAME KATEGORI -->
  <div class="container-xxl mt-4" style="display: flex;flex-wrap: wrap;">
    <div class="container mt-5">
      <h2 class="container mb-3" style="color: white;">TOP UP GAMES </h2>
      <hr color="black">
      <div class="row text-center row-container">

        <!-- Searching -->
        <form class="d-flex" action="" method="GET">
          <input class="form-control me-2 w-25 ms-4" name="cari_kon" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
        <?php if (isset($_GET['cari_kon'])) : ?>
          <?php
          $cari_kon = $_GET['cari_kon'];
          $_SESSION['cari_kon'] = $cari_kon;
          $result = mysqli_query($conn, "SELECT * FROM game WHERE nama_game LIKE '%$cari_kon%' ");
          ?>
          <?php if ($result->num_rows > 0) : ?>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
              echo "<div class='col-lg-2 col-md-3 col-sm-4 col-6'>";
              echo "<div class='menugame'>";
              echo "<a href='#'><img src='../assets/game/" . $user_data['gambar'] . "' class='img-categori mt-4' width='200' height='200'></a>";
              echo "<button type='button' class='btn btn-outline-warning' style='margin-top:15px;  width:180px' onclick='window.location.href = \"" . $user_data['rl_nama'] . "-page.php?GAME=" . $user_data['gambar'] . "\"'>" . $user_data['nama_game'] . "</button>";
              echo "</div>";
              echo "</div>";
            }
            ?>
          <?php else : ?>

          <?php endif; ?>
        <?php else : ?>
          <?php
          $result = mysqli_query($conn, "SELECT * FROM game");
          if ($result->num_rows > 0) {
            while ($user_data = mysqli_fetch_array($result)) {
              echo "<div class='col-lg-2 col-md-3 col-sm-4 col-6'>";
              echo "<div class='menugame'>";
              echo "<a href='#'><img src='../assets/game/" . $user_data['gambar'] . "' class='img-categori mt-4'  width='200' height='200'></a>";
              echo "<button type='button' class='btn btn-outline-warning' style='margin-top:15px;  width:180px' onclick='window.location.href = \"" . $user_data['rl_nama'] . "-page.php?GAME=" . $user_data['gambar'] . "\"'>" . $user_data['nama_game'] . "</button>";
              echo "</div>";
              echo "</div>";
            }
          }
          ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- AKHIR GAME KATEGORI -->

  <!-- AWAL NEWS -->
  <div class="container mt-5">
    <h2 class="container mb-3" style="color:white ;"> NEWS </h2>
    <hr color="black">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style=margin-left:35px>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/news/genshin.jpg" class="d-block " alt="..." style="width: 1200px; height: 670px">
        </div>
        <div class="carousel-item">
          <img src="../assets/news/neural.jpg" class="d-block " alt="..." style="width: 1200px; height: 670px">
        </div>
        <div class="carousel-item">
          <img src="../assets/news/valorantxbox.jpeg" class="d-block " alt="..." style="width: 1200px; height: 670px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
      <div class="col">
        <div class="card">
          <img src="../assets/news/tower.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong> Update Tower of Fantasy Resmi Diumumkan, Ada Konten Apa Saja?</strong></h5>
            <p class="card-text">Level Infinite selaku publisher dan Hotta Studio yang berperan sebagai developer, telah mengonfirmasi akan mendatangkan pembaruan terbesar di game Open World besutannya. Bertajuk Vera, update akan dirilis pada tanggal 20 Oktober mendatang.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../assets/news/roster.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blacklist International Umumkan Roster All-star Filipina untuk DPC 2023</h5>
            <p class="card-text">Impian CEO Tier One Entertainment, Tryke Gutierrez, untuk membentuk tim Dota 2 all-Filipina akhirnya menjadi kenyataan. Blacklist International, divisi esports milik Tier One Satu, telah bermitra dengan Rivalry untuk tim Dota 2 bernama Blacklist Rivalry. </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../assets/news/antimage.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Belum diajak Zeys, Antimage: Season 11 Gua Belum diajak, Nggak Usah Nipu-Nipu Lah!</h5>
            <p class="card-text">Beberapa hari lalu kita mengetahui bahwa Zeys mengeluarkan statement bahwa sang offlaner yakni Antimage tidak akan bermain untuk EVOS Legends untuk MPL Indonesia Season 11 nanti. Namun, usut punya usut hal tersebut ternyata belum ada omongan menurut Antimage.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="../assets/news/antimage.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Belum diajak Zeys, Antimage: Season 11 Gua Belum diajak, Nggak Usah Nipu-Nipu Lah!</h5>
            <p class="card-text">Beberapa hari lalu kita mengetahui bahwa Zeys mengeluarkan statement bahwa sang offlaner yakni Antimage tidak akan bermain untuk EVOS Legends untuk MPL Indonesia Season 11 nanti. Namun, usut punya usut hal tersebut ternyata belum ada omongan menurut Antimage.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container mw-100" style="background-color:#00000020 ;">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 " id="">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 " id="">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 " id="">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 " id="">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 " id="">About</a></li>
      </ul>
      <p class="text-center" id="">© 2022 Company, Inc</p>
    </footer>
  </div>
</body>

</html>