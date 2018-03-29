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
	<div class="content">
		<div class="container">
			<div class="content-body">
				<div class="wrapper">
					<h1>Contact Us</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>&rsaquo; Contact Us
					<br>
					<br>
					<form action="" method="post">
						First name: <br>
						<input type="text" name="firstname" value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>"><br>
						Last name: <br>
						<input type="text" name="lastname" value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"><br>
						Email: <br>
						<input type="email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : '' ?>"><br>
						Message: <br>
						<textarea rows="10" cols="30" name="message" value="<?=isset($_POST['message']) ? $_POST['message'] : '' ?>"></textarea><br>
						<br><input type="submit" name="submit" value="Send">
					</form>
				<?php
				if (isset($_POST['submit'])){
					echo "<h4>Pesan anda: </h4><b>".$_POST['firstname']."</b> <b>". $_POST['lastname']."</b> | <u>".$_POST['email']."</u> :";
					echo "<hr><br>".$_POST['message'];
				}
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
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</body>
</html>