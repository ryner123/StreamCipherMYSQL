<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<title>STREAM CIPHER</title>
<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
<link rel="stylesheet" href="style/custom.css">
<script src="style/js/bootstrap.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="includes-jquery/jquery-3.2.1.js"></script>
<script src="includes-jquery/jquery-3.2.1.min.js"></script>
<style>
#foot{position:fixed; bottom:0; left:0; font-size:13px; color: #000; font-weight:bold; padding:20px 20px 20px 20px;}
</style>
</head>

<body>
	<h1>STREAM CIPHER</h1>
	<hr>
	<div class="suckDICK">
		<?php 
			// USE SQL DATABASE
					include 'cipher/connecticuts.php';
					include 'cipher/scripts.php';
					include 'cipher/evrythingHere.php';
					if ($selectLOGGEDINshit->num_rows != 0) {
						//WELCOME THE USER
						while($row = $selectLOGGEDINshit->fetch_assoc()) { 
							echo "<form method='post'><button class='btn btn-primary' style='float:right;' name='LOGOUTS'> LOGOUT</button></form>";
							echo "<h3>LOGGED IN: <strong>".$row["email"]. "</strong></h3><br>";
							echo '<br>';
							echo "<span id='views'>MY DETAILS</span><br>";
							include('cipher/DecipherShit.php');
						}
					} else {
						//NO LOGGED IN USER
						echo "<div id='centers' style='margin-top:100px;'>NO LOGGED IN USER! <br>";
						echo "<a href='cipher/login.php' id='loginsLINK'>LOGIN?</a> or ";
						echo "<a href='cipher/reg.php' id='loginsLINK'>REGISTER?</a> </div>";
					}
					echo "<br>".$conn->error."<br>";
					$conn->close();
		?>
	
	</div>
	<footer id='foot'>
	&copy; Copyright RSG 2017
	
	</footer>

	
</body>

</html>