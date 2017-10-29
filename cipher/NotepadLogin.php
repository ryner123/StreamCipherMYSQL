<html>
<?php 
include 'includesThis.php'; 
?>

	<body>
		<h1>STREAM CIPHER</h1>
		<hr>
	
		<div id="formShit">
			<div id="logShit">LOGIN HERE</div>
			<form class="form-horizontal shit" type="form" id="logShitForm" enctype="multipart/form-data" method="post" action="NotepadLogin.php">
				<div class="form-group">
					<label class="control-label col-sm-3" for="NAME">USERNAME:</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" id="NAME" required placeholder="USERNAME" name="name">
					</div>
				 </div>
			  
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd">PASSWORD:</label>
				<div class="col-sm-9"> 
				  <input type="password" class="form-control" id="pass" required placeholder="PASSWORD" name="pass">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-3" for="pwd"></label>
				<div class="col-sm-9"> 
				  <span id='forgotPass'><a href='forgotPass'>Forgot Password?</a></span>
				</div>
			  </div>
			  
			  <br>
			  <div class="form-group"> 
				<div class="col-sm-offset-0 col-sm-12">
				  <button type="submit" name="NotepadLogin" value="NotepadLogin" class="btn btn-block suckMe">LOGIN</button>
				</div>
			  </div>
			  
			  <div class="form-group"> 
				<div class="col-sm-offset-0 col-sm-12" id='loginsLINK'>
				  <a href="NotepadReg.php" >___ SIGN UP ___</a>
				</div>
			  </div>
			</form>
		</div>
		
	
	</body>
</html>