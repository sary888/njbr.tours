<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <title>Document</title>
    <style>
        /* CSS untuk Footer dan Elemen Terkait */
        footer {
            background-color: black;
            padding: 20px;
            border-top: 1px solid #eaeaea;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            text-align: left;
        }

        .contact-logo {
            display: flex;
            align-items: center;
            flex: 2;
        }

        .footer-logo {
            margin-right: 30px; /* Jarak antara logo dan informasi kontak */
        }

        .contact-info {
            flex: 2;
            margin-right: 20px;
        }

        .contact-info div {
            margin-bottom: 10px;
        }

        .contact-info b {
            display: block;
            font-weight: bold;
        }

        .quick-menu {
            flex: 1;
        }

        .quick-menu h3 {
            margin-bottom: 10px;
            font-size: 1.25rem;
        }

        .quick-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .quick-menu ul li {
            margin-bottom: 5px;
        }

        .quick-menu ul li a {
            text-decoration: none;
            color: white;
        }

        .quick-menu ul li a:hover {
            text-decoration: underline;
        }

        .footer-logo img {
            max-width: 150px;
            height: auto;
            margin-right: 20px; /* Spacing between logo and contact info */
        }

        footer p {
            margin-top: 20px;
            text-align: center;
        }

        .nav-menu {
            /* Gaya untuk nav-menu jika diperlukan */
        }
    </style>
</head>
<body>

<!-- Bagian footer -->
<footer>
    <div class="container">
        <!-- Bagian Kontak dan Logo -->
        <div class="footer-content">
            <!-- Bagian Kontak dan Logo -->
            <div class="contact-logo">
                <img src="uploads/identitas/<?= $d->logo ?>" width="150">
                <div class="contact-info">
                    <div><b>Alamat:</b> <?= $d->alamat ?></div>
                    <div><b>Telepon:</b> <?= $d->telepon ?></div>
                    <div><b>Email:</b> <?= $d->email ?></div>
                </div>
            </div>


            <!-- Bagian Quick Menu -->
            <div class="quick-menu">
                <h3>Quick Menu</h3>
                <ul class="footer-menu">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="tentang-kami.php">Tentang Kami</a></li>
                    <li><a href="jadwal-paket-umroh.php">Jadwal Paket Umroh</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <p>&copy; 2024 - <?= $d->nama ?>.</p>
    </div>
</footer>


<!-- Mobile Menu -->
<div class="nav-menu" contextmenu="footer"></div>

<script type="text/javascript">
    var mobileMenu = document.getElementById("mobileMenu");

    function showMobileMenu() {
        mobileMenu.style.display = "block";
    }

    function hideMobileMenu() {
        mobileMenu.style.display = "none";
    }
</script>

</body>
</html>
