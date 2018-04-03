<!DOCTYPE html>
<html>
<head>
	<title>HOME - PT. MAJU MUNDUR</title>
	<link rel="stylesheet" type="text/css" href="bagian/main2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="index.php"><img src="maju-mundur-logo2 copy.png"></a>
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
					<h1>Home</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home</a>
					<h3>Destinasi Wisata Pantai Di Gunung Kidul</h3>
					<p>Maju Mundur Tour Travel menyediakan paket wisata Salah satunya adalah:</p>

					<p>Pantai Indrayanti Gunung Kidul Berbatasan langsung dengan Samudera Pasifik membuat Gunung Kidul ini kaya akan pantai yang Indah dan berpasir putih. Bila kita telusuri sepanjang garis pantai ini, maka kita kan menjumpai banyak sekali pantai yang ada di wilayah ini.</p> 
					<img src="aaa.jpg" width="100%">
					<p>Seperti pantai pada umumnya di GunungKidul, pantai Indyaranti ini memiliki hamparan pasir putih dengan laut yang berwarna biru yang jernih. Pantai Indrayanti ini merupakan salah satu tujuan wisata atau objek wisata yangtelah mengalami sentuhan modern oleh tangan pemerintah berupa infrastuktur dan juga fasilitas-fasilitas untuk para wisatawan.Di sepanjang bibir pantai Indrayanti ini kita dapat menemukan deretan restoran yangmenyajikan menu khas laut dan juga kelapa muda.Selain itu di pantai Indrayanti ini juga disediakan beberapa cottage yang dapat Anda gunakan jika ingin menghabiskan waktu malam Anda di pantai ini dan menikmati keindahan malam di pantai ini. Pantai Indrayanti ini juga terkenal sebagai pantai yang roamantis dan merupakan tempat wisata yang cocok untuk anak muda. Pantai Indrayanti ini beralamat di Desa Tepus, Kecamatan Tepus, Kabupaten Gunung kidul.</p>
				</div>
			</div>
			<div class="sidebar">
				<div class="siderbar-content">
					<br>

						<?php echo date('l, d-M-y'); ?>

						<br>
						<br>
						<label><b>Links</b></label>

						<?php
							$link = array('<a href="https://www.google.com" style="text-decoration:none; color: grey;">Google</a>','<a href="https://www.facebook.com" style="text-decoration:none; color: grey;">Facebook</a>','<a href="https://www.instagram.com" style="text-decoration:none; color: grey;">Instagram</a>','<a href="https://www.twitter.com" style="text-decoration:none; color: grey;">Twitter</a>');
							echo "<br>";
							echo implode("<br>",$link);
						?>

					<br>
					<br>

					<?php
						$info = "<b>"."Info"."</b>"."<br>".
						"Promo paket wisata ke pantai Gunung Kidul";
						echo $info;
					?>

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