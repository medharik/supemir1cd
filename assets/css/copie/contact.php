<?php 
if(!empty($_POST['ok']) ){
	//	var_dump($_POST);
if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message']  )){
		$email=$_POST['email'];
	$sujet="Message envoyé  du site 4cups.ma de : ".$_POST['nom'].", sujet :".$_POST['sujet'];
		$m=$_POST['message'].",email de l'expéditeur : ".$email;
		
			$headers = 'From: '.$_POST['nom'].' '.$_¨POST['email'].''."\r\n";
$headers .= 'Bcc: Moi <4cupsmaroc@gmail.com>; lui '.$_POST['email'].''."\r\n";
$headers .= "\r\n";
				
	if(mail("4cupsmaroc@gmail.com",$sujet,$m,$headers)){
$message="Votre message a été bien envoyé, nous vous contacterons très prochainement";
	}else{
		$message="Message non envoyé!";
	}
}

else{
$message="Tous les champs du formalaire sont obligatoires"	;
}


}
?><!DOCTYPE html>
<html>
<head>
<title>4cups</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="4cups" />
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
<?php include("header.php")?>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
						<!-- banner-text Slider starts Here -->
						<script src="js/responsiveslides.min.js"></script>
						
						<!--//End-slider-script -->
										 	
<!--/header--><br>
<div class="contact">
 <div class="container">
 <div class="main-head-section">
		 		<h3>Contact</h3>
				
		 </div>
		<div class="contact_top">
			 		
			 			<div class="col-md-8 contact_left">
			 				<h4>Nous-contacter</h4>
			 				<p>&nbsp;</p>
							  <form action="<?php echo basename(__FILE__);?>" method="post">
          <div class="form_details">
            <input name="nom" type="text" class="text" id="nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom';}" value="Nom">
            <input name="email" type="text" class="text" id="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" value="Email">
            <input name="sujet" type="text" class="text" id="sujet" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sujet';}" value="Sujet">
            <textarea name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" value="Message">Message</textarea>
            <div class="clearfix"> </div>
            <div class="sub-button">
              <input value="Envoyer" type="submit" name="ok">
            </div>
          </div>
        </form>
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		<!--<h3>Adresse</h3>
							     		<span> 214, bd Oued Sebou Quartier: Oulfa CASABLANCA.</span>
                                        -->
			      						<address>
											 <p>emails : <br>
<a href="mailto:contact@4cups.ma">contact@4cups.ma

</a><br>
<a href="mailto:direction@4cups.ma">
direction@4cups.ma

</a><br>
<a href="mailto:commercial@4cups.ma">
commercial@4cups.ma
</a></p>
											 <p>Tél.: +212661 17 76 24 
                                             							   			</p>
                                                                                    <p>
                                                                                    
                               Fax : 0522 17 76 24

                                                     </p>
			      						</address>
							   		</div> 
							</div>	
							<div class="clearfix"> </div>
					</div>
	</div>
</div>


		
        <link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"> </script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
        
<!--footer-starts-->
	<?php
    include("footer.php");
	?>
	<!--footer-starts-->
 


</body>
</html>
