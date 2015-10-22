<!Doctype html>
<head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
<title>About</title>
<?php 
include("../common/include_file.html");
?>
</head>

<?php
include("../common/before_login_topbar.php");
?>



<div class="container">
<div class="row">
<div class="container">
<img alt="Photo not found" src="../photo/1.jpg"   class="img-rounded" height="300px" width="100%" >
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="container">
<div class="lead" align="justify">


<h2>About</h2>

Hi friends,<br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am Alok Kumar Panda and I am an engineering student. I am persuing b.tech in computer science and engineering in college of engineering bhubaneswar under Biju Patnaik University of Technology. I belong to sonepur district (Odisha). I have some basic knowledge about web developing language like html, css, javascript, php, and also know some programming language like c, c++, java. I also have some knowledge about android application development. My hobbies are collecting information about latest gadgets and photography. Apart from that whenever I get time I spend it with my friends.
</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="container">
<h2>Message</h2>
</div>
</div>
<div class="container">
<div class="row">

<form role="form" method="POST" action="msg.php">
<div class="form-group col-lg-5 col-md-6 col-xs-12">
<label for="name">Name</label> 
<input class="form-control" name="name"  placeholder="Enter Name" type="text" required>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="form-group col-lg-5 col-md-6 col-xs-12">
<label for="name">Email</label>
 <input class="form-control" name="email" placeholder="Enter Email" type="email" required>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="row">
 <div class="form-group col-lg-5 col-md-6 col-xs-12">
 <label for="name">Message</label> 
 <textarea class="form-control" rows="5" name="msg" placeholder="Enter Message" required></textarea>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="row">
  <div class="form-group col-lg-5 col-md-6 col-xs-12">
 <button type="reset" class="btn btn-default">Reset</button>
 <button type="submit" name="submit" class="btn btn-default">Submit</button>
 </form>
</div>
 </div>
 </div>
 </div>
 </div>
</body>

</html> 