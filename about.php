<!DOCTYPE html>
<html>
<!-- 
script php
-->					 
<?php
$konten = "Maju MundurTour & Travel adalah sebuah perusahaan terbatas perjalanan wisata di kota Yogyakarta yang berdiri pada tanggal 1 Januari 2015 didirikan oleh Bapak Aris. Kini perusahaan ini telah berpengalaman selama 3 tahun memiliki 10 karyawan yang berpengalaman dan berkomitmen untuk melayani perjalanan travel dengan aman dan nyaman. Visi: Menjadi perusahaan jasa terpercaya dan berkomitmen untuk menjadi perusahaan pelayanan travel yang aman dan nyaman.Misi:1. Memberikan pelayanan terbaik 2. Membina komunikasi yang baik kepada semua pelanggan 3. Membantu mengurangi angka pengangguran 4. Menggunakan tenaga pekerja yang proffesional 5. Berkomitmen pada standart kerja yang tinggi LEGALISTAS:PT.YOGYAKARTA KARSA PELITA Notaris :Ratu Helda Purnamasari, SH, MKnSk. Kehakiman No.AHU –0067957.AH.01.09. Tahun 2008 tanggal 07 agustus 2014 Surat Izin Kepariwisataan Nomor: 97/DKP/SIO/BR/VIII/2015 Surat Izin Usaha (SIUP) Besarnomor: 967/294/Dinas 04.01/USDAG/XII/2015 Surat Izin Tempat Usaha nomor: 2074/ BPT/2014 Nomor ASITA : K.023/ASITA-R/VIII/2014";
$date   = date('l, d-M-y');
$link   = array('<a href="https://www.google.com">Link1</a>',
		'<a href="https://www.facebook.com">Link2</a>',
		'<a href="https://www.twitter.com">Link3</a>',
		'<a href="https://www.instagram.com">Link4</a>');
$info   = "Jadwal Workshop : Cara Sukses berbisnis Tour & Travel";
?>
<!-- 
script php
-->	
<head>
	<title>HOME - PT. MAJU MUNDUR</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="index.php"><img src="maju-mundur-logo.png"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="content-body">
				<div class="wrapper">
					<h1>About Us</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>&rsaquo; About Us
					<br>
					<br>
					<!-- 
					script php
					 -->
					<?php echo $konten; ?>
					<!-- 
					script php
					 -->
				</div>
			</div>
			<div class="sidebar">
				<div class="siderbar-content">
					<!-- 
					script php
					 -->
					<?php echo $date; ?>
					<!-- 
					script php
					 -->
					<br/>
					<br/>
					<label><b>Links</b></label>
					<!-- 
					script php
					 -->
					<?php
						echo "<br/>";
						echo implode("<br/>",$link);
					?>
					<!-- 
					script php
					 -->
					<br/>
					<br/>
					<label><b>Info</b></label><br>
					<span>
					<!-- 
					script php
					-->	
					<?php 
						echo $info; 
					?>
					<!-- 
					script php
					-->	
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<ul>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
