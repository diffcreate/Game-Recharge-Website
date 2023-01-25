<?php
// mengambil file koneksi.php
include_once("../config.php");

// mengambil id dari url
$id_kon = $_GET['id_k'];

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($conn, "DELETE FROM contact WHERE id_cp='$id_kon'");

// Setelah berhasil dihapus redirect ke index.php
header("Location:../lihatpesanadmin.php");
