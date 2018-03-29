<!DOCTYPE html>
<html>
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
					<h1>Privacy Policy</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>&rsaquo;
					Privacy Policy
					<p>By Accessing www.ptmajumundur.com You have been deemed to understand and agree to all terms and conditions (disclaimer) applicable in the use of this site, As stated below:</p>
					<ol>
						<li>The site is created to share knowledge and knowledge.</li><br>
						<li>At each article writing is included date, year and time of writing.</li></br>
						<li>In this site links are linked to another page.</li></br>
						<li>The Reader may download or read on this site freely and for free.</li></br>
						<li>Each reader is allowed to comment properly and with responsibility.</li></br>
						<li>The writing on this site is an opinion and facts experienced by the author</li></br>
						<li>Readers are allowed to share articles freely and widely.</li>
					</ol>

					<p>Above are some disclaimer from PT.MAJU_MUNDUR website
					Thank you please visit www.ptmajumundur.com continue to update the latest articles.
					</p>
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
							$link = array('<a href="https://www.google.com">Link1</a>','<a href="https://www.facebook.com">Link2</a>','<a href="https://www.twitter.com">Link3</a>','<a href="https://www.instagram.com">Link4</a>');
							echo "<br/>";
							echo implode("<br/>",$link);
						?>
					<br/>
					<br/>
					<?php
					$info = "Jadwal Workshop Bisnis Travel";
					echo '<label><b>'.$info.'</b></label><br>'
					?> 
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<ul>
				<li><a href="privacy.php">Privacy</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</body>
</html>