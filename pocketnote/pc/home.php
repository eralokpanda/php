<?php
session_start();
if(isset($_SESSION['id']))
	header("location:mynote.php");
		
?>


<!DOCTYPE html><head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>Login</title>
<?php 
include("../common/include_file.html");
?>
	</head>
<?php 
include("../common/before_login_topbar.php");
// Include and instantiate the class.
require_once '../mob/Mobile_Detect.php';
$detect = new Mobile_Detect;
if( $detect->isMobile() || $detect->isTablet() ){
header("mobile/home.php");
}
?>


<div class="row">
<div class="container" >

<div class="col-xs-7">
<br />
<br />
<br />
<br />
<br />
<div id="myCarousel" class="carousel slide" >  
  <!-- Carousel indicators --> 
  <ol class="carousel-indicators" > 
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li> 
	 <li data-target="#myCarousel" data-slide-to="3"></li> 
  </ol>  

   <!-- Carousel items --> 
  <div class="carousel-inner">       
     <div class="item active">         
         <img src="../photo/2.jpg" alt="First slide"   >       
     </div>       
     <div class="item">          
         <img src="../photo/3.jpg" alt="Second slide"  >      
     </div>       
     <div class="item">          
         <img src="../photo/4.jpg" alt="Third slide" >      
     </div>  
      <div class="item">          
         <img src="../photo/5.jpg" alt="Forth slide" >      
     </div>  
  </div>    
  <!-- Carousel nav -->    
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>   
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> 
</div>
</div>
<div class="col-xs-5">
   <div class="row">  
          <center>
         <img src="../photo/note.png" height="65%"  width="80%"alt="Note"  >      
         </center>    
     </div> 
<br />
	<div class="row">
		<form role="form" method="POST" action="login.php">
        <div class="form-group  col-xs-1">
		 &nbsp;
		</div>
		<div class="form-group col-xs-11">
			<label for="name">User id</label> 
			<input class="form-control" name="email"  placeholder="Enter Registered email id" type="text" required>
       
           	<div class="row">
		<div class="form-group  col-xs-12">
			<label for="name">Password</label>
 			<input class="form-control" name="pass" placeholder="Enter Password" type="password" required>
		</div>
	</div>
        	<div class="row">
		<div class="form-group col-xs-12">
			<center>
				<a href="account.php">
					<button type="button" class="btn btn-success">Sign Up</button>
				</a>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</center> 
        		</div>
	</div>
	<div class="row">
		<div class="form-group col-xs-12">
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