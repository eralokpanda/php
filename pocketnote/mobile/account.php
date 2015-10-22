
<html>
<head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
<title>New account create</title>
<?php
include("common/include_file.html");
?>
</head>

<?php
include("common/before_login_topbar.php");

?>


<p><center><h1>Create your Account</h1></center>
</p>

<form role="form" method="POST" action="acc.php" onSubmit="return checkform(this);">

<div class="container" style="padding-left:30px">
<div class="row">
<label for="name">Name</label> 
</div>
</div>

<div class="container">
<div class="row">
<div class="form-group  col-xs-6">
<input class="form-control" name="fname"  placeholder="First Name" type="text" required>
</div>
<div class="form-group  col-xs-6">
 <input class="form-control" name="lname" placeholder="Last Name" type="text" required>
 </div>
 </div>
</div>
<div class="container">
<div class="row">
<div class="container">
<strong>Gender</strong>
<center>
<span class="custom-dropdown small">
<select required name="gender">
<option select="selected" value="">-- Select --</option>
<option value="male">Male</option>  
<option value="female">Female</option> 
</select>
</span>
</center>
</div>
</div>
</div>
<div class="container">
 <div class="row">
<div class="form-group  col-xs-12">
<label for="name">Email</label>
 <input class="form-control" name="email" placeholder="Enter a valid Email" type="email" required>
 </div>
 </div> 
 </div>
 <div class="container">
  <div class="row">
<div class="form-group col-xs-12">
<label for="name">Password</label>
 <input  title="Password not Match" class="form-control" name="pass" placeholder="Enter Password" type="password" onChange="this.setCustomValidity(this.validity.patternMismatch ? this.title:''); if(this.checkValidity()) form.passconf.pattern=this.value;" required>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="row">
<div class="form-group col-xs-12">
<label for="name">Confirm Password</label>
 <input title="Password not match "class="form-control" name="passconf"  placeholder="Confirm Password" type="password" onChange="this.setCustomValidity(this.validity.patternMismatch ? this.title:'');" required>
 </div>
 </div>
 </div>
 <div class="container">
  <div class="row">
<div class="form-group col-xs-12">
 <center>I agree to the <a href="terms.php"> Terms </a>and<a href="privacy.php"> Privacy</a></center>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="row">
  <div class="form-group col-xs-12"> 
  <center>
 
 
 <button type="submit" name="submit" style="width:150"class="btn btn-success">Submit</button>
 
</center>

 
 </form>
 
</div>
 </div>
 </div>






</body>
</html>