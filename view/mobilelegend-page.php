<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $gameid = $_POST['gameid'];
  $phone = $_POST['phone'];
  $jml = $_POST['jml'];
  $pemb = $_POST['pemb'];
  $sql = "INSERT INTO pembayaran (email_pb, gameid_pb, phone_pb, jumlah,pembayaran)
    VALUES ('$email', '$gameid', '$phone', '$jml', '$pemb')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Selamat, Pembelian telah berhasil!')</script>";
    $nama = "";
    $email = "";
    $comment = "";
    header("Location: cetak.php");
  } else {
    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">
  <script src="script.js"></script>
  <title>RexStore</title>
</head>

<body>
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

  <!-- content -->
  <div class="container text-center d-flex justify-content-center" style="margin-bottom:10rem ;">
    <div class="row w-100 mw-100 ms-auto" id="tukar">
      <!-- Decription  -->
      <div class="col" style="height:26.34rem;">
        <div class="card d-flex justify-content-center w-100 h-100" style="top: 20px; background-color:#e8eaeb;" id="kartu_keterangan">
          <?php echo "<img src='../assets/game/" . $_GET['GAME'] . "' class='card-img-top m-auto' style=\"width:150px;height:150px'\">" ?>
          <div class="card-body">
            <?php
            $game = $_GET['GAME'];
            $result = mysqli_query($conn, "SELECT * FROM game WHERE gambar = '$game'");
            if ($result->num_rows > 0) {
              while ($user_data = mysqli_fetch_array($result)) {
                echo "<p class='card-text'>" . $user_data['desc_game'] . "</p>";
                echo "</div>";
              }
            }
            ?>
          </div>
        </div>
        <div class="col ">

          <div class="card w-100" style="top: 20px;" id="form">


            <form action=" " method="post">
              <div class="card-body" style="padding-left:7px">


                <div class="mb-3">
                  <span class="input-group-text" id="basic-addon1" style="background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/email.png" class="card-img-top" alt="#" style="width: 25px; height: 27px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your Email" aria-label="Username" aria-describedby="basic-addon1" name="email"></span>
                </div>
                <div class="mb-3">

                  <span class="input-group-text" id="basic-addon1" style="background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/id.png" class="card-img-top" alt="#" style="width: 25px; height: 27px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your Id game" aria-label="Username" aria-describedby="basic-addon1" name="gameid"></span>

                </div>

                <div class="mb-3">
                  <span class="input-group-text" id="basic-addon1" style="background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/contact.png" class="card-img-top" alt="#" style="width: 25px; height: 25px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your Phone Number" aria-label="Username" aria-describedby="basic-addon1" name="phone"></span>

                </div>

              </div>
          </div>
          <div class="card w-100" style=" top: 30px" id="keterangan diamond">
            <div class="card-body">
              <?php
              $game = $_GET['GAME'];
              $result = mysqli_query($conn, "SELECT * FROM game WHERE gambar = '$game' LIMIT 1");
              if ($result->num_rows > 0) {
                while ($user_data = mysqli_fetch_array($result)) {
                  echo "<p class='card-text'>Pilih Jumlah " . $user_data['jenis_point'] . " Anda</p>";
                }
              }
              ?>
              <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <p><input type='radio' name='jml' value='500' /> 500 Diamond</p>
                  </div>
                  <div class="col">
                    <p><input type='radio' name='jml' value='1000' /> 1000 diamond</p>
                  </div>
                  <div class="col">
                    <p><input type='radio' name='jml' value='5000' /> 5000 diamond</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p><input type='radio' name='jml' value='10000' /> 10000 diamond</p>
                  </div>
                  <div class="col">
                    <p><input type='radio' name='jml' value='50000' /> 50000 diamond</p>
                  </div>
                  <div class="col">
                    <p><input type='radio' name='jml' value='100000' /> 100000 diamond</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card w-100" style=" top: 45px" id="keterangan diamond">
            <div class="card-body">
              <p>Pilih Metode Pembayaran Anda</p>

              <div class="dropdown">
                <select class="btn btn-outline-warning dropdown-toggle w-100" data-bs-toggle="dropdown" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="float: left; text-align: left;" name="pemb">
                  <img src="../assets/logo/contact.png" class="card-img-top" alt="#" style="width: 25px; height: 25px; margin-right : 15px"> E-Wallet
                  <option class="dropdown-item" href="#" value='Gopay'>Gopay</a>
                  <option class="dropdown-item" href="#" value='Rex Coin'>Rex Coin</a>
                  <option class="dropdown-item" href="#" value='BANK'>BANK</a>
                </select>
                <button type="submit" class="btn btn-lg btn-outline-warning btn-login text-uppercase fw-bold mb-2 mt-4" name="submit" value="submit">Accept</button>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



    <!-- <footer></footer> -->

    <div class="container mw-100" style="background-color:#00000020 ;">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 " id="x">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 " id="x">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 " id="x">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 " id="x">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 " id="x">About</a></li>
        </ul>
        <p class="text-center" id="x">© 2022 Company, Inc</p>
      </footer>
    </div>
</body>

</html>