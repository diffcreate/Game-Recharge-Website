<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
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
    <title>Document</title>
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
        <a href="#" class="link" id="menu">Home</a>
        </li>
        <li class="nav-item">
        <a href="#" class="link" id="menu" >Contact</a>
        </li>
        <li class="nav-item">
        <a href="#" class="link"  id="menu" >Register</a>
        <li class="nav-item">
         <a href="login.php" class="link"  id="menu" >Login</a>
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
          <div class="card d-flex justify-content-center w-100 h-100" style="top: 20px; background-color:#e8eaeb;" id = "kartu_keterangan">

            <img src="../assets/game/mlbb.jpg" class="card-img-top m-auto" alt="..." style = "width : 150px; height : 150px ;">
              <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
        </div>
             </div>
    <div class="col ">

      <div class="card w-100" style="top: 20px;" id = "form">



      <div class="card-body" style= "padding-left:7px">

      
        <div class="mb-3">
          <span class="input-group-text" id="basic-addon1" style= "background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/email.png" class="card-img-top" alt="#" style ="width: 25px; height: 27px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your Emai" aria-label="Username" aria-describedby="basic-addon1"></span>
        </div>
        <div class="mb-3">

          <span class="input-group-text" id="basic-addon1" style= "background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/id.png" class="card-img-top" alt="#" style ="width: 25px; height: 27px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your Id game" aria-label="Username" aria-describedby="basic-addon1"></span>
          
        </div>

        <div class="mb-3">
          <span class="input-group-text" id="basic-addon1" style= "background-color: white; border : hidden; margin-right: 20px;"><img src="../assets/logo/contact.png" class="card-img-top" alt="#" style ="width: 25px; height: 25px; margin-right : 15px"><input type="text" class="form-control" placeholder="Your" aria-label="Username" aria-describedby="basic-addon1"></span>
          
        </div>

          </div>
      </div>
      <div class="card w-100" style=" top: 30px" id = "keterangan diamond">
            <div class="card-body">
            <p>Pilih Jumlah Diamond Anda</p>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;" id="top-up">500 Diamond</button>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">1000 Diamond</button> 
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">3000 Diamond</button>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">5000 Diamond</button>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">10000 Diamond</button>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">50000 Diamond</button>
            <button type="button" class="btn btn-outline-warning w-25"style = "margin-top :10px;">100000 Diamond</button>
            </div>
      </div>


          <div class="card w-100" style=" top: 45px" id = "keterangan diamond">
            <div class="card-body">
              <p>Pilih Merode Pembayaran Anda</p>
            
              <div class="dropdown" style>
              <button class="btn btn-outline-warning w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="float: left; text-align: left;">
              <img src="../assets/logo/contact.png" class="card-img-top" alt="#" style ="width: 25px; height: 25px; margin-right : 15px"> E-Wallet
              </button>
              </div>

              <div class="dropdown" style> 
                <button class="btn btn-outline-warning w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="float: left; text-align: left;">
                <img src="../assets/logo/contact.png" class="card-img-top" alt="#" style ="width: 25px; height: 25px; margin-right : 15px"> M-banking
                </button>
              </div>

              <div class="dropdown" style>
                <button class="btn btn-outline-warning w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" style="float: left; text-align: left;">
                <img src="../assets/logo/contact.png" class="card-img-top" alt="#" style ="width: 25px; height: 25px; margin-right : 15px"> Pembayaran Via Operator
                </button>
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
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company, Inc</p>
  </footer>
</div>
</body>
</html>