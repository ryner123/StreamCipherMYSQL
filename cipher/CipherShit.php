<?php 

//ENCRYPTION OF PASSWORD
	
	$crazyPass = array();
	$crazy='';
	$shityWorld = $password;
	//GET LENGTH OF PASSWORD
	$stringLEngth = strlen($password);
	
	$ctr = 0;
	while($ctr < $stringLEngth){
		include 'CipherKeysShit.php';
		$ctr = $ctr +1;
	}
	$passwordToSave = implode('',$crazyPass);
	
	
	
//ENCRYPTION OF USERNAME
	$crazyPass = array();
	$crazyNam='';
	$shityWorld = $namings;
	$stringLEngth = strlen($namings);
	
	$ctr = 0;
	while($ctr < $stringLEngth){
		include 'CipherKeysShit.php';
		$ctr = $ctr +1;
	}
	$nameToSave = implode('',$crazyPass);

?>