<?php

include '../config.php';

error_reporting(0);

session_start();


if (isset($_FILES['berkas']) | $_FILES['berkas'] != null) {
    $file = $_FILES["berkas"];

    $file_name = $file["name"];
    $file_tmp = $file["tmp_name"];

    // ambil tgl sekarang
    $current_date = date('Y-m-d-h-i-s');

    // ambil ekstensi file nya
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    // buat nama file baru
    $new_file_name = $current_date .  'game.' . $file_ext;

    // atur ke target save
    $move = "../../assets/game/" . $new_file_name;

    // save
    move_uploaded_file($file_tmp, $move);
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
        $sql = "INSERT INTO game (nama_game, desc_game, gambar, jml_point, jenis_point, rl_nama )
                    VALUES ('$disp', '$desc', '$new_file_name', '$jml', '$jenis', '$nama')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Berhasil ditambahkan')</script>";
            echo "<script type='text/javascript'>window.location.href = '../admin.php';</script>";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Tolong isi data.')</script>";
    }
}
