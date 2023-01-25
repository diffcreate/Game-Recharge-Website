<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'Print out pesan contact', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'Daftar support contact', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'Nama', 1, 0);
$pdf->Cell(50, 6, 'Email', 1, 0);
$pdf->Cell(50, 6, 'Pesan', 1, 1);
$pdf->SetFont('Arial', '', 10);
include 'config.php';
$id_k = $_GET['id_k'];
$nama = $_GET['nama'];
$contact = mysqli_query($conn, "select * from contact WHERE id_cp='$id_k'");
while ($row = mysqli_fetch_array($contact)) {
    $pdf->Cell(20, 6, $row['nama'], 1, 0);
    $pdf->Cell(50, 6, $row['email'], 1, 0);
    $pdf->Cell(50, 6, $row['comment'], 1, 0);
}
$pdf->Output();
