<?php

include 'config.php';

error_reporting(0);

session_start();


if (isset($_FILES['berkas'])) {
    $file_name = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];
    $file_type = $_FILES['berkas']['type'];

    move_uploaded_file($file_tmp, "../assets/game" . $file_name);;
}
if (isset($_POST['submit'])) {
    $disp = $_POST['disp'];
    $nama = $_POST['nama'];
    $desc = $_POST['desc'];
    $jml = $_POST['jml'];
    $jenis = $_POST['jenis'];
    $sql = "SELECT * FROM game WHERE nama_game='$nama'";
    $result = mysqli_query($conn, $sql);

    if (!$result->num_rows > 0) {

        echo "<script>alert('Woops! Belum diisi.')</script>";
        $sql = "INSERT INTO game (nama_game, desc_game, gambar, jml_point, jenis_point, rl_nama )
                    VALUES ('$disp', '$desc', '$file_name', '$jml', '$jenis', '$nama')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Berhasil ditambahkan')</script>";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Tolong isi data.')</script>";
    }
}
