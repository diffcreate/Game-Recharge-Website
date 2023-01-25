<?php
include 'config.php';

session_start();
if (!isset($_SESSION['username'])) {
	header("Location: index.php");
}
header('Refresh:10	; URL=index.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>REXSTORE PAYMENT</title>
	<link rel="stylesheet" type="text/css" href="../style/scoba.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="container" onload="window.print()">
	<div class="shape-blob"></div>
	<div class="shape-blob one"></div>
	<div class="shape-blob three"></div>
	<div class="shape-blob two"></div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<div class="container-sukses">
		<div class="checklist">
			<img src="https://cdn-icons-png.flaticon.com/512/4470/4470331.png" style="width: 105px; height: 105px;">
		</div>

		<div class="checklist-form">
			<h2 class="title-checklist">Terimakasih Sudah Melakukan pembelian</h2>

			<table class="table-checklist" style="width: 400px; height: 350px" ;>
				<tr class="baris1">
					<td class="sel1">Email</td>
					<td class="sel2">:</td>

					<td class="sel3"><?php $sql = mysqli_query($conn, 'SELECT * FROM pembayaran ORDER BY id_pb DESC LIMIT 1');
										while ($data = mysqli_fetch_array($sql)) {
											echo $data['email_pb'];
										} ?></td>
				</tr>
				<tr class="baris3">
					<td class="sel7">Game ID</td>
					<td class="sel8">:</td>
					<td class="sel9"><?php $sql = mysqli_query($conn, 'SELECT * FROM pembayaran ORDER BY id_pb DESC LIMIT 1');
										while ($data = mysqli_fetch_array($sql)) {
											echo $data['gameid_pb'];
										} ?></td>
				</tr>
				<tr class="baris4">
					<td class="sel10">Jumlah</td>
					<td class="sel11">:</td>
					<td class="sel12"><?php $sql = mysqli_query($conn, 'SELECT * FROM pembayaran ORDER BY id_pb DESC LIMIT 1');
										while ($data = mysqli_fetch_array($sql)) {
											echo ($data['jumlah']);
										} ?> Diamonds</td>
				</tr>
			</table>

		</div>
	</div>

	</div>


</body>

</html>