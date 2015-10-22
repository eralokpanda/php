<div class="header">
		
			
            <div class="logo-bar">
            <center>
            <div class="header-center">
				<a href="index.php?page=home">
					<div class="logo" align="left">
						AmusingWorld
					</div>
                   </a> 
                    <?php 
					if(($_GET['page']!='home')&&($_GET['page']!='login'))
					{
					if(isset($_SESSION['user']))	
					echo '<a href="logout.php"><div class="login-logout-btn">logout</div></a>';
					else
					{
						$_SESSION['my-url']="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                   echo '<a href="index.php?page=login"><div class="login-logout-btn">login</div></a>';
					}
                   
					}
					?>
				</div>
                
			</center>
		</div>
 <!-- Top bar end -->
        
		<div class="menu-divider">
        <!-- Top bar and Menu bar divider -->
		</div>
        
 <!-- Menu bar start -->      
		<center>
        
				<div class="menu-bar">
               
					<a href="index.php?page=home">
                    	<div class="btn">
							HOME
						</div>
					</a>
<?php  
$query=mysqli_query($db,"SELECT `button_name`,`button_url` FROM `page_data` WHERE page_name = '".$_GET['page']."'");
while($sql=mysqli_fetch_array($query))
if($sql['button_name']!='')
echo '<a href="'.$sql['button_url'].'"><div class="btn">'.$sql['button_name'].'</div></a>';

?>
     

                    
                 
				<!--Here you can add more Button-->
  
				</div>
		</center>
 </div>
 <!-- Menu bar End -->
 
