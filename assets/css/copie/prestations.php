<?php 
include("admin/Utils.class.php");
$slides=Utils::getAlbums("sliders");
$dd=Utils::getAlbums("derniersdesigns");
$rs=Utils::getAlbums("prestations");
//var_dump($slides);
?>
<!DOCTYPE html>
<html>
<head>
<title>mimosa décoration prestations</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mimosa design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->		
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"> </script>
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
		<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script--> <script src="js/animate.js">

 </script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			}); new WOW().init();
</script>
  



<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<!--header-->
<?php   include("header.php");?>
			 <?php include('slider.php');?>


		
        <link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"> </script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
        <div class="services wow fadeInUp animated">
        	<div class="container">
        		<h3 >prestations</h3>
        		
                <div class="services-top-info">
        			<div class="port-folio-bottom"><?php $i=0;foreach($rs as $r){$i++;?>
                    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox<?php echo $i;?>").swipebox();
			});
</script>
					<div class="portfoliolist">
				
                		<div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 portfolio-wrapper" >	
							<h4 align="center"><span> <?php echo $r->titre;?> </span></h4>	
							<a href="admin/<?php echo $r->photo;?>" class="b-link-stripe b-animate-go  swipebox<?php echo $i;?>"  title=" <?php echo Utils::sl($r->titre);?> ">
						     <img src="admin/<?php echo $r->photo;?>" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
						  		</div></a>
                                
                                
                                 <div class="article">
  <div class="text short">
						  		<?php echo Utils::sl($r->details);?>
                                
                                </div>
                                <span class="read-more">Lire la suite</span>
                                
                                </div>
						  			<label> </label>
						  			
		                </div>		
                       	<?php 
						
						$pa=Utils::getPhotos($r->idalbum);;
						
						
						foreach($pa as $ppa){?>
						<div class="col-md-3 portfolio-wrapper hidden">
										
							<a href="admin/<?php echo $ppa->photo;?>" class="b-link-stripe b-animate-go  swipebox<?php echo $i;?>"  title="<?php echo $ppa->titre;?>">
						     <img src="admin/<?php echo $ppa->photo;?>" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
						  	 </div></a>
						  	
						  			<label> </label>
						  			
		                </div>
					
                        <?php }?>   
                      </div>
					 <?php } ?>	
			   </div>
			</div>
   		  </div>
</div>
          
     
          <div class="clearfix"></div>
<!--footer-starts-->
	<?php include("footer.php");?>
	<!--footer-starts-->
 
<script>
$(document).ready(function(){    
    $(".read-more").click(function(){        
        var $elem = $(this).parent().find(".text");
        if($elem.hasClass("short"))
        {
            $elem.removeClass("short").addClass("full");        
        }
        else
        {
            $elem.removeClass("full").addClass("short");        
        }       
    });
});
</script>

</body>
</html>
