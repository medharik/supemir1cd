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
						<script>
							// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});	
							});
						</script>
                        <div class="clearfix visible-xs"></div>
						<!--//End-slider-script -->
						<div class="banner container " > 
							<div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider3">
                                <?php foreach($slides as $s){?>
									<li>
										<img src="admin/<?php echo $s->photo;?>" alt="" class="img-responsive">
									</li>
                                    <?php }?>
									
									
						</ul>
		</div>
		<div class="clearfix"> </div>
	</div>				 	
<!--/header-->
<div class="clearfix visible-xs"></div>