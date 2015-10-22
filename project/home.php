<?php
ob_start();
if($_GET['page']!='home')
header("location:index.php?page=home");
?>
<center>
<div class="body-part1">
<!--Part1 start-->

						<div class="login">
       
       
       <?php 
	  
	   if(isset($_SESSION['user']))   
{
	 if(!isset($_SESSION['acc_create']))
	  $_SESSION['acc_create']="unknown";
	
 echo '<div style="padding-left:20px; margin-top:80px;" align="left">
      Name:'.$_SESSION['fname'].'&nbsp;'.$_SESSION['lname'].'<br />
      Account created: '.$_SESSION['acc_create'].'
       </div>
                  <div style="margin-top:20px;">
      <center><a href="./index.php?page=changePass">Change password</a></center>
      </div>                     
      <div style="margin-top:40px;">
      <center><a href="logout.php">Logout</a></center>
      </div>'; 
}
	else   
	   
	   
	    { ?>
       
       
							<form name="login-form" action="" method="post">
									<div class="txt-box">
										<input type="email" name="user" id="user" placeholder="email address" />
									</div>
									<div class="txt-box">
										<input  type="password" name="pass" id="pass" placeholder="Password"  />
									</div>
									<center>
										<div class="btn-div">
											<input type="button"  id="login"value="Login" />
										</div>
									</center>
								
							</form>
                            
							<center>
								<div class="forgot-div">
									<a href="index.php?page=forgot">Forgot password?</a> 
                                </div>
							</center>
							<center>
								<div class="new-div">
									<a href="index.php?page=newaccount">Create new Account</a> 
                                </div>
							</center>
                           <div class="errMsg" style="padding-left:25px; color:#FF0000; margin-top:20px;"align="left">
                           </div>     
                   
				   
				   <?php } ?>
				   
				   
						</div>


						<div class="slider">
							<div id="sliderFrame">
        						<div id="slider">
        							<img src="./data/common/slider/image-slider-1.jpg"alt="" />
            						<img src="./data/common/slider/image-slider-2.jpg" alt="" />
           	 						<img src="./data/common/slider/image-slider-3.jpg" alt="" />
            						<img src="./data/common/slider/image-slider-4.jpg" alt="" />
            						<img src="./data/common/slider/image-slider-5.jpg" alt="" />
        						</div>
    						</div>
						</div>





<!-- Part1 End-->
</div>
</center>

            <center>
            	<div class="body-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Latest Update
            			</div>
             
            	</div>
            </center>




<center>
<div class="body-part2">
<!--part2 Start-->
<center>
<div class="latest">
<ul class="slide">
  <!-- All the latest item div -->
  <?php
  $query=mysqli_query($db,"SELECT * FROM `kids-latest`ORDER BY sl_no DESC limit 0,3");
  while($sql=mysqli_fetch_array($query))
  {
  ?>
				<li><a href="<?php echo $sql['link'];?>">
					<img src="./data/kids/latest and icon/<?php echo $sql['img_name'].'.jpg';?>" height="150" width="330" />
					</a>
                </li>

<?php 
  } 
  $query=mysqli_query($db,"SELECT * FROM `young-latest`ORDER BY sl_no DESC limit 0,3");
  while($sql=mysqli_fetch_array($query))
  {
  ?>
				<li><a href="<?php echo $sql['link'];?>">
					<img src="./data/young/latest and icon/<?php echo $sql['img_name'].'.jpg';?>" height="150px" width="330px" />
					</a>
                </li>

<?php }
  $query=mysqli_query($db,"SELECT * FROM `senior-latest`ORDER BY sl_no DESC limit 0,3");
  while($sql=mysqli_fetch_array($query))
  {
  ?>
				<li><a href="<?php echo $sql['link'];?>">
					<img src="./data/senior/latest and icon/<?php echo $sql['img_name'].'.jpg';?>" height="150px" width="330px" />
					</a>
                </li>

<?php 
  }
  ?>
  <!-- item end -->
							</ul>
</div>
</center>

<!--part2 End-->
</div>
</center>
<center>


            <center>
            	<div class="body-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Zone
            			</div>
             
            	</div>
            </center>


<div class="body-part3">
<!-- part3 Start -->

					<a href="index.php?page=kids">
						<div class="kids-zone">
  <!-- Zone head -->
							<div class="kids-zone-head">
								<div class="zone-title">
									Kids zone
								</div>
								<div class="zone-icon">
									<img src="./index/image/icon/kids.png" height="35" width="30" style="border:none;" />
								</div>
							</div>
<!--zone body -->
							<div class="zone-body">
                            	<img src="./index/image/kids.jpg" alt="Cartoon Videos,Images,Games" id="kids" height="350" width="300" style="border:none;"/>
                            </div>
						</div>
					</a>


					<a href="index.php?page=young">
						<div class="young-zone">
 <!-- Zone head -->						
							<div class="young-head">
								<div class="zone-title">
									Young zone
								</div>
								<div class="zone-icon">
									<img src="./index/image/icon/kids.png" height="35" width="30" style="border:none;" />
								</div>
							</div>
<!--zone body -->
							<div class="zone-body">
							<img src="./index/image/young.jpg" alt="Games,Videos,Audios,Books,Images"  id="young" height="350" width="300" style="border:none;"/>
							</div>
						</div>
					</a>
					
					
					
					<a href="index.php?page=senior">
						<div class="senior-zone">
 <!-- Zone head -->
							<div class="senior-head">
								<div class="zone-title">
									Senior zone
								</div>
								<div class="zone-icon">
									<img src="./index/image/icon/kids.png" height="35" width="30" style="border:none;"/>
								</div>
							</div>
<!--zone body -->
							<div class="zone-body">
								<img src="./index/image/senior.jpg" alt="Video,Audio,Images,Books"  id="senior" height="350" width="300" style="border:none;"/>
							</div>
						</div>
					</div>
				</a>



<!-- part3 end -->
</div>
</center>


<script>


 
 
 //Plugin start
 (function($)
   {
     var methods = 
       {
         init : function( options ) 
         {
           return this.each(function()
             {
               var _this=$(this);
                   _this.data('marquee',options);
               var _li=$('>li',_this);
                   
                   _this.wrap('<div class="slide_container"></div>')
                        .height(_this.height())
                       .hover(function(){if($(this).data('marquee').stop){$(this).stop(true,false);}},
                              function(){if($(this).data('marquee').stop){$(this).marquee('slide');}})
                        .parent()
                        .css({position:'relative',overflow:'hidden','height':$('>li',_this).height()})
                        .find('>ul')
                        .css({width:"1600px",position:'absolute'});
           
                   for(var i=0;i<Math.ceil((screen.width*3)/_this.width());++i)
                   {
                     _this.append(_li.clone());
                   } 
             
               _this.marquee('slide');});
         },
      
         slide:function()
         {
           var $this=this;
           $this.animate({'left':$('>li',$this).width()*-1},
                         $this.data('marquee').duration,
                         'swing',
                         function()
                         {
                           $this.css('left',0).append($('>li:first',$this));
                           $this.delay($this.data('marquee').delay).marquee('slide');
             
                         }
                        );
                             
         }
       };
   
     $.fn.marquee = function(m) 
     {
       var settings={
                     'delay':2000,
                     'duration':900,
                     'stop':true
                    };
       
       if(typeof m === 'object' || ! m)
       {
         if(m){ 
         $.extend( settings, m );
       }
 
         return methods.init.apply( this, [settings] );
       }
       else
       {
         return methods[m].apply( this);
       }
     };
   }
 )( jQuery );
 
 //Plugin end
 
 //call
 $(document).ready(
   function(){$('.slide').marquee({delay:3000});}
 );
 
 
 

</script>



</script>



    	<script type="text/javascript">
		$(function() {

		$('#kids').capty({
 		 height:   90,
  			opacity:  .6
					});

		});
		$(function() {

		$('#young').capty({
 		 height:   90,
  			opacity:  .6
					});

		});
		$(function() {

		$('#senior').capty({
 		 height:   90,
  			opacity:  .6
					});

		});
	</script>
    
    
    
    <script>
$(document).ready(function() {
 $("#login").click(function() {   
var user=$("#user").val();
var pass=$("#pass").val();
if((user!='')&&(pass!=''))
{
var x='user='+user+'&pass='+pass;

	    $.ajax({
		type:"POST",
		data:x,
		cache:false,
		url:"index/loginajax.php",
		beforeSend: function(){
			$("#login").val('connecting...');$('#login').css('width',100);},
		success: function(e){
			if(e)
			$(".login").html(e);
			else
			{
			$("#login").val('login');
			$('#login').css('width',80);
			$('.errMsg').html('* wrong username or password')
			}
			}

        
});
}
else
$('.errMsg').html('fill-up the user and pass ')
return false;

        });
 


});


</script>