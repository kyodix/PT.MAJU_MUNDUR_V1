<!DOCTYPE html>
<html>
<!-- 
script php
-->					 
<?php
$konten = "isi konten";
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