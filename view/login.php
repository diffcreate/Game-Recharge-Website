<?php

include 'database/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: database/berhasil_login.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM usertb WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['is_admin'] = $row['is_admin'];
    header("Location: database/berhasil_login.php");
  } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- AWAL NAVBAR -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">

  <script src="script.js"></script>


  <title>RexStore</title>
</head>

<body>


  <div class="container-fluid ps-md-0 align-center">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-2 col-lg-3 "></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-center py-5">
          <div class="container" id="loginbox">
            <div class="row" id="rowloginbox">
              <div class="col-md-9 col-lg-8 mx-auto" id="colloginbox">
                <h3 class="login-heading mb-4" style="color: black;">Log in</h3>

                <!-- Sign In Form -->
                <form method="POST" action="">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $email; ?>" required>
                    <label for="floatingInput" style="color: black;">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    <label for="floatingPassword" style="color: black;">Password</label>
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" style="color: orange;" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Remember password
                    </label>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-outline-danger btn-login text-uppercase fw-bold mb-2" name="submit" value="submit">Accept</button>
                    <div class="d-grid">
                      <button onclick="window.location.href = ' index.php ' " class="btn btn-lg btn-outline-danger btn-login text-uppercase fw-bold mb-2" type="button">Back</button>
                    </div>
                    <div class="text-center">
                      <a class="small link-danger" href="#">Forgot password?</a>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>