<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}




?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/style/all.min.css">

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden" id="registerbox">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5 ">
                        <a class="card-title text-center mb-5 fw-light fs-5" style="color:Black;">ADMIN</a>
                        <a class="card-title text-center mb-5 fw-light fs-5" style="color:Black;" href="contact.php">|
                            CONTACT
                            US</a>
                        <?php
                        $contact = mysqli_query($conn, "SELECT * from contact");
                        $no = 1;


                        echo "<table class='table table-striped table-hover'>";
                        echo "<tr>
                        <th>NOMOR</th>
                        <th>EMAIL</th>
                        <th>TEXT</th>";

                        foreach ($contact as $row) {

                            echo "<tr>
                            <td>$no</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['text'] . "</td>
                        </tr>";
                            $no++;
                        }
                        echo "</table>";
                        ?>




                    </div>
                </div>
            </div>
        </div>
    </div>
</body>