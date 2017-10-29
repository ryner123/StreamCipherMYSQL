<?php 
$actualNamingShit = '';

	include 'connecticuts.php';
	
	$getUserLogForDecipher = "SELECT * FROM Users WHERE activeness = 1";
	$getUserLogForDecipher = $conn->query($getUserLogForDecipher);
		if ($getUserLogForDecipher->num_rows != 0) {
			while($row = $getUserLogForDecipher->fetch_assoc()) {
				echo "<br>Saved EMAIL in database: <strong>".$row['email']."</strong>";
				echo "<br>Saved USERNAME in database: <strong>".$row['names']."</strong>";
				echo "<br>Saved PASSWORD in database: <strong>".$row['passsword']."</strong>";
				
				//DECIPHER OF USERNAME
				echo "<hr>";
				$crazyPass = array();
				$crazy='';
				$shityWorld = explode('?',$row['names']);
				$arrayCTR = count($shityWorld)-1;
				$ctr = 0;
				
				foreach($shityWorld as $sadShity){
					
					include 'DecipherKeysShit.php';
					$ctr = $ctr +1;
				}
				$actualUsername = implode('',$crazyPass);
				
				echo "ACTUAL USERNAME: <strong style='font-size:20px;'>".$actualUsername."</strong>";
				
				//DECIPHER OF PASSWORD
				echo "<hr>";
				$crazyPass = array(); $crazy='';
				$shityWorld = explode('?',$row['passsword']);
				$arrayCTR = count($shityWorld)-1;
				$ctr = 0;
				
				foreach($shityWorld as $sadShity){
					include 'DecipherKeysShit.php';
					$ctr = $ctr +1;
					
				}
				$actualPassword = implode('',$crazyPass);
				echo "ACTUAL PASSWORD: <strong style='font-size:20px;'>".$actualPassword."</strong><hr>";
				
				exit();
			}
		}else{echo "OMG! Something Went Wrong with server!";}
		$conn->close();
		exit();


?>