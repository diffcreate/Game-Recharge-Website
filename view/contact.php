<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

include('koneksi.php');
$query = mysqli_query($conn, "SELECT * FROM game");

?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">

<body>

    <body>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <!-- <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th> -->
            </tr>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['gambar']); ?>" /> </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>