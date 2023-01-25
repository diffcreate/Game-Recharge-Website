<?php
include 'config.php';

error_reporting(0);

session_start();



if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO contact (nama, email, comment)
    VALUES ('$nama', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Selamat, Pengisian form telah berhasil!')</script>";
        $nama = "";
        $email = "";
        $comment = "";
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

    <title>RexStore</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style-contact.css">
</head>

<body style="background-color: #262626;">
    <div class="card" style="background-color: #262626;">
        <strong>Silahkan Isi Form Komentar ini</strong>
        <form action="" method="POST">
            <h1>Contact us</h1>
            <label>Email</label><br>
            <input class="box1" type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>" required><br>
            <label>Nama</label><br>
            <input class="box1" type="text" name="nama" placeholder="Your Name" value="<?php echo $nama; ?>" required><br>
            <label>Note</label><br>
            <textarea cols="72" rows="5" name="comment" style="background-color:#30475e;" value="<?php echo $comment; ?>" required></textarea>

            <button class="btn btn-lg btn-outline-warning btn-login text-uppercase fw-bold mb-2" type="submit" name="submit">Submit</button>
            <button onclick="window.location.href = ' index.php ' " class="btn btn-lg btn-outline-warning btn-login text-uppercase fw-bold mb-2" type="button">Back</button>

        </form>

    </div>

</body>

</html>