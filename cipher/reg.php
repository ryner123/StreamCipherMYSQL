<html>
<?php 
include 'includesThis.php';
?>
	<body>
		<h1>STREAM CIPHER</h1>
		<hr>
		
		<div id="formShit">
			<div id="logShit">REGISTER HERE</div>
			<form class="form-horizontal shit" type="form" id="regShitForm" enctype="multipart/form-data" method="post" action="reg.php">
			  <div class="form-group">
				<label class="control-label col-sm-3" for="NAME">USERNAME:</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="NAME" placeholder="Enter Username" name="name" required pattern="[A-Za-z]{0,50}" title="Letters Only">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd">EMAIL:</label>
				<div class="col-sm-9"> 
				  <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd">PASSWORD:</label>
				<div class="col-sm-9"> 
				  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pass" required pattern="[A-Za-z0-9_\@\#\$\%\^\&\*\(\)\-\=\+\>\<]{6,50}" title="Minimum of 6 characters and allowed special characters are @#$%^&*()-=_+<>">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd" style="padding-left:0px">REPEAT PASSWORD:</label>
				<div class="col-sm-9"> 
				  <input type="password" class="form-control" id="pwd" placeholder="Repeat Password" name="pass1" required>
				</div>
			  </div>
			  
			  
			  <div class="form-group"> 
				<div class="col-sm-offset-1 col-sm-10">
				  <button type="submit" name="REGISTER" value="REGISTER" class="btn btn-block suckMe">REGISTER</button>
				</div>
			  </div>
			  
			  <div class="form-group"> 
				<div class="col-sm-offset-0 col-sm-12" id='loginsLINK'>
				  <a href="login.php" >___ LOGIN ___</a>
				</div>
			  </div>
			</form>
		</div>
	</body>
</html>