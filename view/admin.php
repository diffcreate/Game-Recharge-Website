<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username']) | !isset($_SESSION['is_admin'])) {
  header("Location: index.php");
}


?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">
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
          <a href="#" class="link" id="menu">Contact</a>
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

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden" id="registerbox">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5 ">
            <a class="card-title text-center mb-5 fw-light fs-5" style="color:Black;">ADMIN</a>
            <a class="card-title text-center mb-5 fw-light fs-5" style="color:Black;" href="lihatpesanadmin.php">| CONTACT
              US</a>

            <form method="POST" action="database/adminadd.php" enctype="multipart/form-data">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="disp" required autofocus>
                <label for="floatingInputUsername">Nama Display</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="nama" required autofocus>
                <label for="floatingInputUsername">Nama Game</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="Game ini ....." name="desc">
                <label for="floatingInputUsername">Deskripsi Game</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="Ex 5000" name="jml">
                <label for="floatingInputUsername">Jumlah point</label>
              </div>

              <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis">
                  <option selected>Pilih...</option>
                  <option value="Gems">Gems</option>
                  <option value="Coin">Coin</option>
                  <option value="Diamond">Diamond</option>
                </select>
              </div>

              <div class="form-floating mb-3">
                <input required type="file" name="berkas" id="berkas" class="mt-4">
              </div>
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-outline-warning btn-login fw-bold text-uppercase" type="submit" name="submit" value="submit">SUBMIT</button>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>