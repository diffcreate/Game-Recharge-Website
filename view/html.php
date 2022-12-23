<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    echo "<script type='text/javascript'>alert('Anda harus login');
    window.location.href = 'halaman.php'</script>";
}?>
<?php include 'config.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Halaman Web</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="script.js"></script>
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href=''>UNIPAN</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#Top Up">Top Up</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a id="loginpopup" class="tbl-biru" href="logout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper" id="test123">
  
            <!--untuk home-->
            <section id="home">
                <img src="https://img.freepik.com/free-vector/colourful-illustration-programmer-working_23-2148281410.jpg?w=740&t=st=1667483635~exp=1667484235~hmac=90b0dc553edc09b573612d9b2c30ed995e01cc9ac1c0e4e39ab923b99d0ee73d">
                <div class="kolom">
                    <p class="deskripsi">Mau di tulis apa disini wkwk</p>
                    <h2>Bingung Mau nulis apa</h2>
                    <p>pengertian apa wkwk.</p>
                        <p><a href="" class="tbl-biru">Pelajari lebih lanjut</a></p>
                </div>
            </section>

            <!--untuk Top Up-->>
            <section id="Top Up">
                <div class="kolom">
                    <p class="deskripsi">Top Up disini</p>
                    <h2>Bisa disini</h2>
                    <p>Terimakasih atas pembeliannya</p>
                    <p><a href="" class="tbl-biru">Pelajari lebih lanjut</a></p>
                </div>
                <img src="https://img.freepik.com/free-vector/hand-holding-phone-with-digital-wallet-service-sending-money-payment-transaction-transfer-through-mobile-app-flat-illustration_74855-20589.jpg?w=740&t=st=1667483237~exp=1667483837~hmac=4d05b18bf57ed8202db897d55241daafc1f59ca4aa0a80000f8bacbf5bfd4127">

            </section>

        </div>

        <div id="contact">
            <div class="footer">
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Hubungi dibawah ini</p>
                </div>
                <div class="footer-section">
                    <h3>Whatsaap</h3>
                    <p>Hubungi dibawah ini</p>
                </div>
                <div class="footer-section">
                    <h3>Email</h3>
                    <p>Hubungi dibawah ini</p>
                </div>
            </div>
        </div>
    </body>
</html>

