



<link href="header.css" type="text/css" rel="stylesheet" />

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
					
					if(isset($_SESSION['admin']))	
					echo '<a href="./logout.php"><div class="login-logout-btn">logout</div></a>';
				
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

     

                    
                 
				<!--Here you can add more Button-->

				</div>
		</center>
 </div>
 <!-- Menu bar End -->
 
