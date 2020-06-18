<!DOCTYPE html>
<html <?php language_attributes(); global $eel; ?>>

	<head>
		<!-- Meta -->
		<meta charset="<?php bloginfo('charset');?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/EEL.jpg">
		<?php wp_head();?>
	</head>
	
    <body data-spy="scroll" data-target=".navbar" data-offset="80" style="overflow-x: hidden; ">

			
		
		<!-- START NAVBAR -->
		<div id="sticker" class="navbar navbar-default navbar-fixed-top menu-top">
			<div class="container" >
				<div class="navbar-header">
					<button id="hide-show" type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				    </button>				
					<a href="<?php echo site_url();?>" class="navbar-brand"><img src="<?php  echo $eel['site_logo']['url'];?> " alt="logo"></a>
					<img src="<?php echo get_template_directory_uri();?>/assets/img/data.jpg" alt="title">
				</div>
				 <div class="collapse navbar-collapse" id="navigation">
					<nav>
						<?php wp_nav_menu(array
							('theme_location'=>'primary_menu',
							 'fallback_cb'=>'everest_fallback_menu',
							 'container'=>'',
							 'menu_class'=>'nav navbar-nav pull-right',
							
							)
						   );
						?>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
		</div> 
		<!-- END NAVBAR -->
		
		 <!-- START HOME -->
		<section id="home" class="welcome-area section-top-50 section-lg-0">
            <div class="back">
				<div class="owl-carousel-wrap text-center wrap-fluid">
					<div data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-stage-padding="0" data-loop="true" data-margin="15" data-mouse-drag="true" data-autoplay="false" 		data-dots="true" data-nav-custom=".owl-custom-navigation" class="owl-carousel">
						<div class="owl-item">
							<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/5.jpg" alt="" width="280" height="280">
								<div class="product-content">
									<div class="small">FarEast Islami Life Insurance Co. Ltd</div>
								</div>
						   </div>
						</div>
						 
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/1.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">BGMEA DHAKA</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/2.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">National Sports Council</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/3.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Basundhara Gym Complex</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/15.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Shahabuddin Medical College</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/16.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">BIRDEM (Ibrahim Memorial Hospital)</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/17.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">DU Tower Building</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/18.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">BUET Teachers Quater</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/24.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Adamjee Anex Bhavan</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/on12.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Concord Modhumoti2</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/31.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Star Tower</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/35.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">EAST WEST UNIVERSITY</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/36.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">NCC Bank Bhabon</div>
									</div>
							   </div>
						</div>
						<div class="owl-item">
								<div class="product"><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/on10.jpg" alt="" width="280" height="280">
									<div class="product-content">
										<div class="small">Aziz Court, Agrabad, Chittagong</div>
									</div>
							   </div>
						</div>
					</div>
					<div class="owl-custom-navigation">
					  <div class="owl-nav">
						<div data-owl-prev class="owl-prev">Prew
							<i class=" fa fa-arrow-circle-left"></i>
						</div>
						<div data-owl-next class="owl-next">Next
							<i class=" fa fa-arrow-circle-right"></i>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</section>
	    <!-- END  HOME -->
		<br>
	
    	<!-- START ABOUT -->
    		<section id="about" class="about_us section-padding">
    			<div class="container">
    				<div class="row text-center">
    					<div class="section-title wow zoomIn">
    						<h2>About Us</h2>
    						<span></span>
    					</div>	
                       <div class="col-md-6 sol-sm-12 col-xs-12 no-padding">
                           <h2><b>Quality Rating of Our Products</b></h2>
    						<div class="skills ">
    							<div class="progress-bar-linear">
    								<p class="progress-bar-text">Aluminium Fabrication
    									<span>92/100</span>
    								</p>
    								<div class="progress-bar">
    									<span data-percent="92"></span>
    								</div>
    							</div>
    							<div class="progress-bar-linear">
    								<p class="progress-bar-text">Aluminium Composite Pannel Works & Solution
    									<span>95/100</span>
    								</p>
    								<div class="progress-bar">
    									<span data-percent="95"></span>
    								</div>
    							</div>
    							<div class="progress-bar-linear">
    								<p class="progress-bar-text">Glass and ACP Canopy
    									<span>92/100</span>
    								</p>
    								<div class="progress-bar">
    									<span data-percent="92"></span>
    								</div>
    							</div>
    							<div class="progress-bar-linear">
    								<p class="progress-bar-text">Specialized Glass Work 
    									<span>92/100</span>
    								</p>
    								<div class="progress-bar">
    									<span data-percent="92"></span>
    								</div>
    							</div>
    							<div class="progress-bar-linear">
    								<p class="progress-bar-text">Support and Solutions 
    									<span>99/100</span>
    								</p>
    								<div class="progress-bar">
    									<span data-percent="99"></span>
    								</div>
    							</div>
    						</div>
                        </div><!--- END COL -->					
                       <div class="col-md-6 col-sm-12 col-xs-12">
    						<div class="about_content">
							    <?php echo $eel['about_text'];?>
						    </div>
                        </div><!--- END COL -->	
    				</div><!-- END ROW  -->
    			</div><!-- END CONTAINER  -->
    		</section>	
    	<!-- END ABOUT -->

	<!-- START SERVICE -->
		<section id="service" class="our_service">
			<div class="container">
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>Our services</h2>
						<span></span>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-image: url(assets/img/slider/1.jpg);  background-size:cover; background-position: center center;">		
							<div class="single_service_inner">
								
								<i class="fa fa-retweet" aria-hidden="true"></i>
								<h4>Aluminium Fabrication</h4>
								<p>Aluminium is a silvery- white, lightweight metal which is soft and malleable. However, Aluminum fabrication is the building of aluminum structures by cutting, bending, and assembling processes. It is a value-added process which involves the creation of structures like, doors, windows, cans, et cetera from various raw materials.</p>
							</div>
						</div>
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-size:cover; background-position: center center;">	
							<div class="single_service_inner">
						<i class="fa fa-cogs" aria-hidden="true"></i>
								<h4>Composite Panel Works</h4>
								<p>Aluminium composite panels (or metal composite materials - MCM) are typically used in the external cladding of buildings.They can be bent, curved and joined together in an almost unlimited range of configurations, making them popular with architects and engineers of complex structures.</p><br>
							</div>
						</div>
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-size:cover; background-position: center center;">		
							<div class="single_service_inner">
								<i class="fa fa-comments-o"></i>
								<h4>Free Support & Solutions</h4>
								<p>Customer satisfaction is our top most priority. Therefore, we provide and deliver professional, helpful, high quality service and assistance before, during, and after the assignments’ requirements are met.
									We solve problems related to productivity
									and technical issues which needs quick
									solution. Help you improve in quality and
									efficiency</p>
							</div>
						</div>
					</div><!--- END COL -->
						<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-size:cover; background-position: center center;">		
							<div class="single_service_inner">
							<i class="fa fa-object-group" aria-hidden="true"></i>
								<h4>Glass Works</h4>
								<p>Structural glazing systems, in their simplest form, are types of curtain wall systems consisting of glass that is bonded or anchored back to a structure without the use of continuously gasketed aluminum pressure plates or caps. It is the system of bonding to an aluminium frame utilizing a high- strengthen, high performance silicon sealant. This technique can be used with almost all types of glass, including insulating glass units.</p><br>
							</div>
						</div>
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-size:cover; background-position: center center;">		
							<div class="single_service_inner">
								<i class="fa fa-life-bouy"></i>
								<h4>Glass & ACP Canopy</h4>
								<p>Glass and Aluminium Composite Panel or ACP are used mainly for exterior cladding, interior application, partitioning, and load bearing walls and roofing elements in a wide range of buildings. ACP are flat panels consisting of two thin coil-coated aluminium sheets bonded to a non-aluminium core. It is available in a wide range of colours and finishes like wood, stone, dual-tone etc. and it can be bent, folded and turned into shapes that can’t be achieved by any other material. </p>
							</div>
						</div>
					</div><!--- END COL -->
				
					
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single_service" style="background-size:cover; background-position: center center;">		
							<div class="single_service_inner">
								<i class="fa fa-handshake-o" aria-hidden="true"></i>
								<h4>Consultancy</h4>
								<p>We have been working in the field of aliminium fabrication for 29 years. Our experts deal with every day obstacles of an aluminium fabrication plant and construction site. They can help your manage your business smoothly.
                                Our experts have a huge amount of experience in aluminium fabrication in construction. We will visit the site if required to analyze the issues and guide you through your problem.</p><br><br>
							</div>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</section>
		<hr>
	<!-- END SERVICE -->
	
	<!-- START TESTIMONIAL -->
        <section class="testimonial section-padding">
	        <div class="container">
	            <div class="row">
					<div class="section-title text-center">
						<h2>Meet Our Director</h2>
						<span></span>
					</div>				
	                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
	                	<div id="team__carousel" class="carousel slide" data-ride="carousel" data-interval="9999999">
							
							<div class="carousel-inner">
								<div class="item active">
									<div class="testimonial-text">
										<div class="testimonial_img">
											<img src="<?php  echo $eel['md_img']['url'];?> " alt="MD">
											
											<h4><?php echo $eel['name_text'];?></h4>
											<h5><?php echo $eel['designation_text'];?></h5>
										</div>
										<?php echo $eel['desc_text'];?>									
									</div>
								</div>
								
								
							</div>
						</div>
					</div><!--- END COL -->				
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
        </section>
		<!-- END TESTIMONIAL -->
		<hr>

    	<!-- PORTFOLIO Start-->
    		<div id="portfolio" class="template_portfolio">
    			<div class="container">
    				<div class="row text-center">
    					<div class="section-title wow zoomIn">
    						<h2>Accomplished Projects</h2>
    						<span></span>
    					</div>
    					
    					<div id="myBtnContainer" class="btnContainer">
    					  <!--<button class="btn btn-info active" onclick="filterSelection('all')">All Projects</button>-->
    					  <button class="btn btn-info" onclick="filterSelection('complete')"> Complete Projects</button>
    					  <button class="btn btn-info" onclick="filterSelection('ongoing')"> On Going info</button>
    					</div>
    					<br>
    
    					<!-- Portfolio Gallery Grid -->
    					 
    						<?php 
    							$args = array( 
    									'post_type' => 'protfolio', 
    									'posts_per_page' => -1
    							    );
    
    							$protfolios = new WP_Query( $args );
    
    						?>	
    						<?php 
    							while ( $protfolios->have_posts() ) : $protfolios->the_post();
    							    $project_type = get_post_meta( get_the_ID(), '_everest_project_type', true );
    							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    						?>
    						  <!--<div class="col-sm-6 col-md-4 col-xs-12 column <?php echo $project_type; ?>">-->
    								<!--<div id="myImg" class="thumbnails">-->
    								<!--	<a href="<?php echo $featured_img_url ?>" rel="prettyPhoto[pp_gal]">-->
    								<!--	<?php the_post_thumbnail('protfolio-post-thumbnail'); ?>-->
    								<!--	</a><br>-->
    								<!--  	<p><?php the_title(); ?></p>-->
    								  	<!--<p><?php the_content(); ?></p>-->
    								<!--</div>-->
    						  <!--</div>-->
    						  <div style="height: 395px;"  class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column <?php echo $project_type; ?>"> <!-- //col-sm-6 col-md-4 col-xs-12 column  -->
    								<div id="myImg" class="thumbnails" >
    									<a href="<?php echo $featured_img_url ?>" rel="prettyPhoto[pp_gal]">
    									<?php the_post_thumbnail('protfolio-post-thumbnail'); ?>
    									</a>
    								  	<p><?php the_title(); ?></p>    								 
    								  	<!-- <p><?php the_content(); ?></p> -->
    								</div>
    						  </div>
    						 <?php endwhile; ?>
    						 
    					 
    
    					<!-- Model  -->
    					<div id="myModal" class="modal">
    						  <span class="close">&times;</span>
    						  <img class="modal-content" id="myImg">
    						  <div id="caption"></div>
    					</div>
    			</div>
    		</div>
    		</div>
    	<!-- PORTFOLIO End-->


		
		<!-- START CONTACT FORM AND MAP -->
		<section id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>Contacts</h2>
						<span></span>
					</div>								
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="contact">
							
							<?php echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');?>
						</div>
					</div>	
					
					<div class="col-md-6 col-sm-12 col-xs-12">					
						<!--<div id="map"></div>-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.173893265049!2d90.3803610153626!3d23.74117759504463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b7a510ef7d%3A0x88df61bc48f3d0fc!2sEverest+Eastern+Ltd.!5e0!3m2!1sen!2sbd!4v1554711286968!5m2!1sen!2sbd" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
				</div>			
			</div>	
		</section>
		<!-- END CONTACT FORM  AND MAP -->

		<!-- START CONTACT ADDRESS -->
		<div class="contact-address section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address">
							<i class="fa fa-phone"></i>
							<p>+880-2-9661171</p>
							<p>+880-2-58615379</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address">
							<i class="fa fa-map-marker"></i>
							<p>Momtaz Plaza (2nd Floor),<br>House # 7, Road # 4, <br>Dhanmondi R/A, Dhaka-1205.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address">
							<i class="fa fa-envelope"></i>
							<p><a style="color:#000;" href="mailto:info@eel-bd.com">info@eel-bd.com</a></p>
							<p><a style="color:#000;"href="mailto:contact@eel-bd.com">contact@eel-bd.com</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_address">
							<i class="fa fa-clock-o"></i>
							<p>Sun - Thu: 10.00 - 18.00</p>
							<p>Sat - Fri: 11.00 - 16.00</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTACT ADDRESS -->
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
						<div class="copyright">
							<?php echo $eel['copy_text'];?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow zoomIn">
						<div class="footer_menu">
							<ul>
								<li><a href="#about">About</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#service">Services</a></li>
								<li><a href="#contact">Contact</a></li>								
							</ul>
						</div>
					</div>		
				</div>			
			</div>
		</div>
		<!-- END FOOTER -->									

<?php wp_footer();?>
    </body>
</html>