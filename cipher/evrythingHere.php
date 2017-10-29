<?php 
session_start();
if (shell_exec('mysql -V') != ''){
include 'connecticuts.php';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//_____________ CALL LOGOUT _____________
if (isset($_POST['LOGOUTS'])) {logouts();}

//_____________ CALL REGISTER _____________
else if (isset($_POST['REGISTER'])) {registerss();}

//____________ CALL LOGIN ______________
else if (isset($_POST['LOGIN'])) {loginsss();}

}

//____________ REGISTER HERE ______________
function registerss(){
	include 'connecticuts.php';
	$namings   =  ($_POST['name']);
	$email      =  ($_POST['email']);
	$password  	=  ($_POST['pass']);
	$password_  =  ($_POST['pass1']);
	$activeness = 	'0';
	
	// VALIDATES IF THE SAME PASSWORD BEFORE DOING SOMETHING 
	if($password == $password_){
		//echo "<script type='text/javascript'>alert('FUCKYOU -- WAIT!!');</script>";			
		// CHECKS IF PASSWORD AND USERNAME ALREADY EXIST 
				// CIPHER
				include 'CipherShit.php';
				
			$checkUserLog = "SELECT * FROM Users WHERE names like '$nameToSave' and passsword like '$passwordToSave'";
			$checkUserLog = $conn->query($checkUserLog);
			
			if ($checkUserLog->num_rows > 0) {
				while($row = $checkUserLog->fetch_assoc()) {
					echo "<div class='alert alert-danger shitFuck' style='width:60%; position:absolute; z-index:9; right:0; bottom:0; box-shadow:4px 4px 4px 4px #000; margin-right:2%; margin-bottom:9%;'>
					  <strong>OH NO!</strong> Choose a  different <strong>PASSWORD and ACCOUNT NAME</strong>!</div>";
				}
			}else{
				
				// RECORDS USER
				$insertShit =	"INSERT INTO Users (names, email, passsword, activeness) VALUES ('".$nameToSave."', '".$email."', '".$passwordToSave."', '".$activeness."')";
				$nameToSave = '';$passwordToSave=''; //removes data
				if ($conn->query($insertShit) === TRUE) {
					echo "<div class='alert alert-success shitFuck' style='width:60%; position:absolute; z-index:9; right:0; bottom:0; box-shadow:4px 4px 4px 4px #000; margin-right:2%;  margin-bottom:9%;'>
							<strong>GREAT!</strong> Your <strong>ACCOUNT</strong> was registered <strong>SUCCESSFULLY!</strong>.
							</div>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			$conn->close();
	}else{
		// PASSWORDS DOESNT MATCH
		echo "<div class='alert alert-danger shitFuck' style='width:60%; position:absolute; z-index:9; right:0; bottom:0; box-shadow:4px 4px 4px 4px #000; margin-right:2%; margin-bottom:9%;'>
			  <strong>WHOOPS!</strong> Your passwords does not match!</div>";
			//did some inline designs here.. because external designs will be over written by the bootsrap css -- hihi
	}	
}


//____________ LOGIN HERE ______________
function loginsss(){
	include 'connecticuts.php';
	$namings   =  ($_POST['name']);
	$password      =  ($_POST['pass']);
	//CIPHER INFORMATION TO CHECK FROM THE DATABASE
	include('CipherShit.php');
	// GET THE USER LOGGING IN
	$getUserLog = "SELECT * FROM Users WHERE names like '$nameToSave' and passsword like '$passwordToSave' and activeness = 0";
	$getUserLog = $conn->query($getUserLog);
	
	if ($getUserLog->num_rows != 0) {
		// UPDATES USER AS LOGGED IN IN DATABASE
		$updateUserLog = "UPDATE Users SET activeness = 1 WHERE names like '$nameToSave' and passsword like '$passwordToSave'";
			// DATA UPDATED
			if ($conn->query($updateUserLog) === TRUE) {
				// RETURNS DATA
				header('location:/StreamCipherSQL/index.php');
			}else {
				echo "<div class='alert alert-danger shitFuck' style='width:60%; position:absolute; z-index:9; right:0; bottom:0; box-shadow:4px 4px 4px 4px #000; margin-right:2%; margin-bottom:9%;'>
			  <strong>WHOOPS!</strong> The information you provided are not recorded in our database!</div>";
			}
		$conn->close();
	} else {
		//INCORRECT INFORMATION
		echo "<div class='alert alert-danger shitFuck' style='width:60%; position:absolute; z-index:9; right:0; bottom:0; box-shadow:4px 4px 4px 4px #000; margin-right:2%; margin-bottom:9%;'>
			  <strong>WHOOPS!</strong> The information you provided are not recorded in our database!</div>";
	}	
	
	
	
}

//____________ LOGOUT HERE ______________
function logouts(){
	
		include 'connecticuts.php';
		//echo "<script type='text/javascript'>alert('CRAZY! BYE!');</script>";

		// UPDATES USER AS LOGGED OUT IN DATABASE
		$updateUserLog = "UPDATE Users SET activeness = 0 WHERE activeness = 1";
		$updateUserLog = $conn->query($updateUserLog);
			// DATA UPDATED
				if ($conn->query($updateUserLog) === TRUE) {
					// RETURNS DATA
					header('location:/StreamCipherSQL/index.php');
				}else {
					echo "<script type='text/javascript'>alert('SHIT! SOMETHING WENT WRONG!');</script>";
					header('location:/StreamCipherSQL/index.php');
				}
			
			$conn->close();

		
}



?>
