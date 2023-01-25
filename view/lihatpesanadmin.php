<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username']) | !isset($_SESSION['is_admin'])) {
    header("Location: index.php");
}
$result = mysqli_query($conn, "SELECT * FROM contact");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>RexStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

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
                        <a href="index.php" class="link" id="menu">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="link" id="menu">Contact</a>
                    </li>
                    <li class="nav-item">
                        <?php session_start();
                        if (isset($_SESSION['username'])) {
                            $checkadmin = $_SESSION['is_admin'];
                            if ($checkadmin == 1) {
                                echo  "<li class='nav-item'>";
                                echo  "<a href='admin.php' class='link' id='menu'>Admin</a>";
                                echo  "</li>";
                                echo  "<li class='nav-item'>";
                                echo  "<a href='logout.php' class='link' id='menu'>Logout</a>";
                                echo  "</li>";
                            } else {
                                echo  "<li class='nav-item'>";
                                echo  "<a href='logout.php' class='link' id='menu'>Logout</a>";
                                echo  "</li>";
                            }
                        } else {
                            echo  "<li class='nav-item'>";
                            echo  " <a href='register.php' class='link' id='menu'>Register</a>";
                            echo  "</li>";
                            echo  "<li class='nav-item'>";
                            echo  "<a href='login.php' class='link' id='menu'>Login</a> ";
                            echo  "</li>";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="top">
        <table class="table table-dark table-hover" width='80%' border=1>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['comment'] . "</td>";
                echo "<td><a href='database/pesanupdate.php?id_k=$user_data[id_cp]'>Edit</a> | <a href='database/deleteadmin.php?id_k=$user_data[id_cp]'>Delete</a> | <a href='print.php?id_k=$user_data[id_cp]&nama=$user_data[nama]'>Print</a></td></tr>";
                $no += 1;
            }
            ?>
        </table>
        <div class="container mw-100 fixed-bottom" style="background-color:#00000020 ;">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 " id="fido">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 " id="fido">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 " id="fido">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 " id="fido">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 " id="fido">About</a></li>
                </ul>
                <p class="text-center" id="fido">© 2022 Company, Inc</p>
            </footer>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>