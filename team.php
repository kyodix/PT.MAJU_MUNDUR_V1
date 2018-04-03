<!DOCTYPE html>
<html>
<head>
	<title>HOME - PT. MAJU MUNDUR</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="index.php"><img src="maju-mundur-logo.png"></a>
			<ul>
				<li><a href="index.php" target="_blank">Home</a></li>
				<li><a href="services.php" target="_blank">Services</a></li>
				<li><a href="team.php" target="_blank">Team</a></li>
				<li><a href="about.php" target="_blank">About Us</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="content-body">
				<div class="wrapper">
					<h1>Team</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>&rsaquo; Team
					<br/>
					<?php
						$team = array("<b>"."Bapak Aris"."</b>"."<br>"."Sebagai Pendiri perusahaan dan juga sebagai ketua team dalam bekerja"."<br>","<b>"."Bapak Habib"."</b>"."<br>"."Sebagai HRD atau Human Resources Department yang bertugas merekrut karyawan, memberi pelatihan kepada karyawan, mengawasi kinerja karyawan"."<br>","<b>"."Bapak Dani, Bapak Witono, Mas Dolit"."</b>"."<br>"."Sebagai sopir mobil travel yang mengantarkan pelanggan menuju tempat wisata sesuai keinginan pelanggan");
						echo "<br>";
						echo implode("<br>", $team);
					?>
				</div>
			</div>
			<div class="sidebar">
				<div class="siderbar-content">
					<br/>
						<?php
							echo date('l, d-M-y');
						?>
						<br/>
						<br/>
						<label><b>Links</b></label>
						<?php
							$link = array('<a href="https://www.facebook.com" style="text-decoration: none; color:grey;">Facebook</a>','<a href="https://www.instagram.com" style="text-decoration: none; color:grey;">Instagram</a>','<a href="https://www.twitter.com" style="text-decoration: none; color:grey;">Twitter</a>');
							echo "<br/>";
							echo implode("<br/>",$link);
						?>
					<br/>
					<br/>
					<?php
					$info = "<b>"."Info"."</b><br>".
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
			<li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
			<li><a href="contact.php" target="_blank">Contact Us</a></li>
		</ul>
		</div>
	</div>
</body>
</html>