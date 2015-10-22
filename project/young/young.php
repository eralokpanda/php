<?php
ob_start();
if($_GET['page']!='young')
header("location:../index.php?page=young");
?>

            <center>
            	<div class="body-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Latest Update
            			</div>
             
            	</div>
            </center>
            
            
<center>
<div class="body-part1">
<!--part2 Start-->
<center>
<div class="latest">
<ul class="slide">
  <!-- All the latest item div -->
  
  <?php
  $query=mysqli_query($db,"SELECT * FROM `young-latest`ORDER BY sl_no DESC limit 0,5");

  while($sql=mysqli_fetch_array($query))
  {
  ?>
								<li><a href="<?php echo $sql['link'];?>">
									<img src="./data/young/latest and icon/<?php echo $sql['img_name'].'.jpg';?>" height="150px" width="330px" />
								</a></li>

<?php } ?>

  <!-- item end -->
							</ul>
</div>
</center>

<!--part2 End-->
</div>
</center>


<div class="left">
            <center>
            	<div class="young-zone-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Game
            			</div>
             
            	</div>
            </center>
<div class="body-part2">
<a href="index.php?page=young-game">
<div class="young-zone-game">
<img src="./young/img/game.jpg" width="550" height="150" alt="game" />
</div>
</a>
</div>
            <center>
            	<div class="young-zone-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Video
            			</div>
             
            	</div>
            </center>
<div class="body-part2">
<a href="index.php?page=young-video">
<div class="young-zone-video">
<img src="./young/img/video.jpg" width="550" height="150" alt="Video" />
</div>
</a>
</div>



            <center>
            	<div class="young-zone-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Audio
            			</div>
             
            	</div>
            </center>
<div class="body-part2">
<a href="index.php?page=young-audio">
<div class="young-zone-audio">
<img src="./young/img/audio.jpg" width="550" height="150" alt="Audio" />
</div>
</a>
</div>

            <center>
            	<div class="young-zone-heading">
 <!-- Latest update heading --> 
 					             
            			<div class="heading-text">
                    		Book
            			</div>
             
            	</div>
            </center>
<div class="body-part2">

<a href="index.php?page=young-book&no=1">
<div class="young-zone-book">
<img src="./young/img/book.jpg" width="550" height="150" alt="Book" />
</div>
</a>
</div>


</div>

<div class="right">
<div class="body-part3">
<div class="body-part3-inner">

</div>
</div>
<div class="body-part4">
<div class="body-part4-inner">

</div>
</div>
</div>

<div style="clear:both">
</div>










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