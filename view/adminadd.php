<?php

include 'config.php';

error_reporting(0);

session_start();


if (!isset($_SESSION['username']) | !isset($_SESSION['is_admin'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $desc = $_POST['desc'];
    $gas = $_POST['gmbr'];
    $image = $_FILES['gmbr']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    $jml = $_POST['jml'];
    $jenis = $_POST['jenis'];
    echo "<script>alert('Woops! Belum diisi.')</script>";
    $sql = "INSERT INTO game (nama_game, desc_game, gambar, jml_point, jenis_point)
                    VALUES ('$nama', '$desc', '$gas', '$jml', '$jenis')";
    $result = mysqli_query($conn, $sql);
    echo "<script type='text/javascript'>window.location = 'login.php';</script>";
} else {
    echo "<script>alert('Woops! Belum diisi.')</script>";
}
