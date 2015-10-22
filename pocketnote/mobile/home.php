<?php
session_start();
if(isset($_SESSION['id']))
	header("location:mynote.php");
		
?>


<!DOCTYPE html><head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>Login</title> 
		<?php
include("common/include_file.html");
?>
	</head>
<?php 
include("common/before_login_topbar.php");
?>

<div class="container" >
<div class="row">
<div class="container" >
<div class="col-md-12">
   <div class="row">  
          <center>
         <img src="../photo/note.png" height="20%"  width="70%"alt="Note"  >      
         </center>    
     </div> 
<br />
	<div class="row">
		<form role="form" method="POST" action="login.php">
        <div class="form-group col-lg-1 col-md-1">
		 &nbsp;
		</div>
		<div class="form-group col-lg-11 col-md-11">
			<label for="name">User id</label> 
			<input class="form-control" name="email"  placeholder="Enter Registered email id" type="text" required>
       
           	<div class="row">
		<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<label for="name">Password</label>
 			<input class="form-control" name="pass" placeholder="Enter Password" type="password" required>
		</div>
	</div>
        	<div class="row">
		<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<center>
				<a href="account.php">
					<button type="button" class="btn btn-success">Sign Up</button>
				</a>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</center> 
        		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<center>
				<a href="forgot.php">Forgot Password ?</a>
			</center>

		</div>
	</div> 
   
</div>         
            
		</div>
   
	</div>


		</form>

</div>
</div>

</body>

<footer>
<br />
<br />
<br />
<br />
<hr width="80%"/>
&nbsp;&nbsp; PocketNote 2014 
</footer>
</html>