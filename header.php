<?php
    include 'koneksi.php';
    date_default_timezone_set("Asia/Jakarta");

    $identitas = mysqli_query($conn,"SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
    $d = mysqli_fetch_object($identitas);
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
	<title> <?= $d->nama ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel ="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/bfstvy4qx6zru9lrxv61jglhe0mii4x636ivwuq2jjf0wn35/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
    selector: 'keterangan',
    });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

	<!-- box menu mobile -->
	<div class="box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">
			<li><a href="index.php">Beranda</a></li>
			<li><a href="tentang-kami.php">Tentang Kami</a></li>
			<li><a href="jadwal-paket-umroh.php">Jadwal Paket Umroh</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a href="informasi.php">Informasi</a></li>
			<li><a href="kontak.php">Kontak</a></li>
		</ul>
	</div>

	<!-- bagian header -->
	<div class="header">

		<div class="container">

			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width="70">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>
			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentang-kami.php">Tentang Kami</a></li>
				<li><a href="jadwal-paket-umroh.php">Jadwal Paket Umroh</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="informasi.php">Informasi</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>

			<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>

	</div>