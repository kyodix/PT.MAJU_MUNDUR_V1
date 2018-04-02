<!DOCTYPE html>
<html>
<head>
	<title>SERVICES - PT. MAJU MUNDUR</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
					<h1>Services</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>&rsaquo; Services
					<h2>BERIKUT BEBERAPA FITUR LAYANAN KAMI</h2>

					<?php
						$services1 = "1. Rental Mobil Travel";
						$services2 = "2. Paket Wisata ke Pantai Gunung Kidul";
						$services3 = "3. Paket wisata ke Kaliurang";

						if(strpos($services1,"Mobil")){
							echo $services1;
							echo "<p>";
							echo "Rental mobil travel tanpa supir, harga mulai dari Rp. 200.000, atau rental mobil travel dengan sopir harga mulai dari Rp. 300.000";
							echo "</p>";
						}
						if(strpos($services2,"Gunung Kidul")){
							echo $services2;
							echo "<p>";
							echo "Gunung kidul punya banyak wisata paket yang indah, anda bisa menggunakan jasa travel kami dengan aman dan nyaman, harga mulai dari Rp. 250.000";
							echo "</p>";
						}
						if(strpos($services3,"Kaliurang")){
							echo $services3;
							echo "<p>";
							echo "Kaliurang punya banyak wisata paket yang indah, anda bisa menggunakan jasa travel kami dengan aman dan nyaman, harga mulai dari Rp. 250.000";
							echo "</p>";
						}
					?>

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
						$link = array('<a href="https://www.facebook.com" style="text-decoration:none; color: grey;">Facebook</a>','<a href="https://www.instagram.com" style="text-decoration:none; color: grey;">Instagram</a>','<a href="https://www.twitter.com" style="text-decoration:none; color: grey;">Twitter</a>');
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