<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
			<link href="icon/favicon.ico" rel="shortcut icon" />
			<link href="login/css/style2.css" type="text/css" rel="stylesheet" />
			<link href="login/css/menu.css" type="text/css" rel="stylesheet" />
			<link href="login/css/topbar.css" type="text/css" rel="stylesheet" />
			<link href="login/css/footer.css" type="text/css" rel="stylesheet" /> 
            <link href="login/css/login.css" type="text/css" rel="stylesheet" /> 
            <script type="text/javascript" src="common/js/jquery.js"></script>   
	</head>
	<body>
	<!-- Top bar end --><!-- Menu bar End -->
  
        
 <!-- Total body of the website -->        
		<div class="tot-bdy">
		<center>
        <div class="my-bdy">
          <center>
  <div class="login-tot">
<div class="login-box">
<div class="login-head">
<center>
<div class="login-head-dot">
</div>
<div class="login-head-title">
LOGIN
</div>
</center>
</div>
<div class="login-text-box">
<form name="form" method="get" action="">
<div class="txt-box1">
<input type="email" id="pass" name="pass" placeholder="Email address" />
</div>
<div class="txt-box1">
<input type="password" id="pass" name="pass" placeholder="Password"  />
</div>

</form>
</div>
<div class="login">
<div class="login-btn">
<input type="submit" id="login" name="login" value="Login"/>
</div>
<div class="remember">
<input type="checkbox" id="remember" />
Remember me
</div>
</div>
<div class="forgot">
<div class="forgot-inner">
Forgot password?

</div>
</div>
</div>
</div>
</center>
    </div>
    </center>

	<!-- Footer Part --><script>
   $(document).ready(function(){
	   
	   var Height = $( window ).height();
	   if(Height>700)
	   var h=Height-355;
			$(".my-bdy").css("height",h);
	});
	
	
</script>





	</body>
</html>
