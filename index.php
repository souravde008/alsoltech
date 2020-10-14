<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$("#flip").click(function(){
			$("#panel").slideToggle();
		});
		});
		$(document).ready(function(){
		$("#flip1").click(function(){
			$("#panel1").slideToggle();
		});
		});
		$(document).ready(function(){
		$("#flip2").click(function(){
			$("#panel2").slideToggle();
		});
		});
		$(document).ready(function(){
		$("#flip3").click(function(){
			$("#panel3").slideToggle();
		});
		});
		$(document).ready(function(){
		$("#flip4").click(function(){
			$("#panel4").slideToggle();
		});
		});
		$(document).ready(function(){
		$("#flip5").click(function(){
			$("#panel5").slideToggle();
		});
		});
		
	</script>

	
	<meta charset="utf-8">
	<!-- SITE TITLE -->
	<title>AlsolTech</title>
<!--

Blaster Template

http://www.templatemo.com/tm-472-blaster

-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- STYLESHEET CSS FILES -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<style>

	#panel {
		width:auto;
		height:auto;
		display: none;	
			}
			#panel1 {
		width:auto;
		height:auto;
		display: none;	
			}
			#panel2 {
		width:auto;
		height:auto;
		display: none;	
			}
			#panel3 {
		width:auto;
		height:auto;
		display: none;	
			}
			#panel4 {
		width:auto;
		height:auto;
		display: none;	
			}
			#panel5 {
		width:auto;
		height:auto;
		display: none;	
			}

	</style>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><span class="bold"><img src="./LOGO-7.png" alt="" style="height: 150px; width: 150px; margin-top: -47px;"></span></a> 
		<!--<p style="letter-spacing: 0px;line-height: 10px; margin-left: 77px; margin-top: 15px;  font-size: 20px;"><b>TECH</b></p>-->

		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#services" class="smoothScroll">SERVICES</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#team" class="smoothScroll">REVIEWS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<hr>
				<h3><span class="bold">We Seek Solutions For All Your Technical Worries</h3>
				<!--<h1 class="heading">We Seek Solutions For All Your Technical Worries</</h1>-->
				<a href="#about" class="smoothScroll btn btn-default">Our Process</a>
			</div>
		</div>
	</div>		
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">ABOUT US</h1>
				<!--<h2 class="subheading">WE ARE TALANTED DESIGNERS &amp; DEVELOPERS</h2>-->
				<h2 class="subheading">STAY ON THE CUTTING EDGE WITH NEW SOLUTIONS, CUSTOMERS HAVE NOT SEEN BEFORE.<br>
										EXPERIENCE OUR SUPREMELY INNOVATIVE AND REMARKABLY EFFECTIVE SOFTWARES.</h2>
				<button type="button" class="button button3" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Learn More</button>
			</div><br>
			<div class="collapse col-md-12 col-sm-12 text-center" id="collapseExample">
				<h2 class="subheading">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				</h2>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<div class="row" style="margin-left: 10px;">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">OUR SERVICES</h1>
				<h2 class="subheading">We are devilver verious kind of services </h2>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fab fa-android"></i>
					<h3>Android Application</h3>
					<p style="font-size:10px" >We have an intelligent team of hybrid developers,developing various kind of business oriented applications with high end features.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
				<i class="fa fa-laptop"></i>
					<h3>Web Development</h3>
					<p>We develop web application with effective UI/UX which are mobile first and user friendly.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-cloud"></i>
					<h3>Cloud Computing</h3>
					<p>We thrive to empower our clients with the power of cloud technologies.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fas fa-chart-line"></i>
					<h3>Data Analysis</h3>
					<p>We seek to harness the power of data and help industries forecast their business and take decision.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-desktop"></i>
					<h3>Windows Application</h3>
					<p>We provide high quality desktop application for Windows including custom software which are highly user friendly and secure.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-globe"></i>
					<h3>Digital Marketing</h3>
					<p>We focus on taking a product to masses effeciently, allowing high traffic on customer websites,improved google ranking.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
		<!--	<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-microchip"></i>
					<h3>IOT</h3>
					<p>We thrive to empower our clients with cutting edge digital technologies. Our full-stack, customized software development services are...</p>
					<button type="button" class="button button3">Read More</button>
			</div>-->
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-cogs"></i>
					<h3>Machine Learing</h3>
					<p>We spectiatize in developing mechine learninmg model that predicts with high accuracy.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fas fa-pencil-alt"></i>
					<h3>Content Writing</h3>
					<p>One of our special focus is content writing, We always try to deliver plagiarism free, highly accurate content within deadline.</p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			
			
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="fa fa-cog"></i>
					<h3>Software Automation</h3>
					<p>We design and develop automation solutions to eradicate monotonus manual work for companies. </p>
					<!--<button type="button" class="button button3">Read More</button>-->
			</div>
			
		
			
			
			
			
			
		
			<hr>
						
		<div class="row"></div>
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				<img src="images/about.jpg" class="img-responsive" alt="about img" style="margin-top: 170px;">
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<h3>Our Focus</h3>
				
				<span><i class="fab fa-laravel"></i> Laravel</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
						
						
										<span><i class="fab fa-php"></i> PHP</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
						
						
										<span><i class="fab fa-python"></i> Python</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div> 
                        <span><i class="fab fa-angular"></i> Angular Js</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                        <span><i class="fab fa-react"></i> React Js</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
						</div>
						<span><i class="fab fa-node"></i> Node JS</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                        <span><i class="fa fa-database"></i> MongoDB</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                        <span><i class="fa fa-server"></i> Oracle</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
						</div>
										<span><i class="fab fa-neos"></i> Neo4j</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
			</div>
		</div>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="heading bold">PORTFOLIO</h1>
				<h2 class="subheading">MOBILE, WEB AND BRAND IDENTITY</h2>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".website">Website</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".WebApp">Web Application</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">Wordpress</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile App</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">
									<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip">
										<img src="images/E-com/Capture1.JPG" alt="portfolio img">
									</div>
									
						
               				<!-- <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-md-4 col-lg-4 col-sm-6 col-xs-6">
               				 	<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop mobile col-lg-4 col-md-4 col-sm-12 col-xs-6">
               				 	<a href="images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img7.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/portfolio-img8.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img8.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress mobile col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="images/portfolio-img9.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img9.jpg" alt="portfolio img"></a>
               				 </div>-->
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip1">
               				 	<img src="images/Bookshop/Capture1.png" alt="portfolio img">
							 </div>
							
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip2">
								<img src="images/Website/Capture1.JPG" alt="portfolio img">
							</div>
								
							<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip3">
								<img src="images/student_db/Capture1.jpg" alt="portfolio img">
							</div>

							<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip4">
								<img src="images/shopping/Capture1.jpg" alt="portfolio img">
							</div>

							<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6" id="flip5">
								<img src="images/Billing/Capture1.jpg" alt="portfolio img">
							</div>
						

							<!-- <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture2.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture3.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture4.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture5.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Android App/Capture6.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Android App/Capture.JPG" alt="portfolio img"></a>
               				 </div>-->

               			</div>
					   </div>

				 <div id="panel">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<a href="images/E-com/Capture1.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture1.JPG" alt="portfolio img"></a>
						</div>
						 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture2.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture2.JPG" alt="portfolio img"></a>
							</div>
						 
						 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture3.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture3.JPG" alt="portfolio img"></a>
						 </div></div>
						 <div class="row">
						 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture4.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture4.JPG" alt="portfolio img"></a>
							</div>
							
						 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture5.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture5.JPG" alt="portfolio img"></a>
							</div>
						 
						 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture6.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture6.JPG" alt="portfolio img"></a>
							</div>
						 </div>
						 <div class="row">
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture7.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture7.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture8.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture8.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture11.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture11.JPG" alt="portfolio img"></a>
						</div>
						 </div>
						 <div class="iso-box col4-iso-box">
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture12.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture12.JPG" alt="portfolio img"></a>
							</div>
							
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture13.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture13.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture14.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture14.JPG" alt="portfolio img"></a>
							</div>
						 </div>
						 <div class="iso-box col4-iso-box">
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture15.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture15.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture16.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture16.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture17.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture17.JPG" alt="portfolio img"></a>
							</div>
						 </div>
						 <div class="row">
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture18.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture18.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture19.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture19.JPG" alt="portfolio img"></a>
							</div>
						<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/E-com/Capture20.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/E-com/Capture20.JPG" alt="portfolio img"></a>
						</div>
					</div>
						</div>
					</div>
					<!------------------------->
					<div id="panel1">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture1.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture1.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture2.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture2.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture3.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture3.png" alt="portfolio img"></a>
								</div>
							</div>	
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture4.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture4.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture5.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture5.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture6.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture6.png" alt="portfolio img"></a>
								</div>
							</div>	
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture7.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture7.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture8.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture8.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture9.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture9.png" alt="portfolio img"></a>
								</div>
							</div>	
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture10.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture10.png" alt="portfolio img"></a>
								</div>
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Bookshop/Capture11.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Bookshop/Capture11.png" alt="portfolio img"></a>
								</div>
							</div>	
						</div>
					</div>
					<!--------------------------------------------------------->

					<div id="panel2">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture1.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture1.JPG" alt="portfolio img"></a>
               				 </div>
							 
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture2.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture2.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture3.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture3.JPG" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture4.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture4.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture5.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture5.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture6.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture6.JPG" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture7.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture7.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture8.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture8.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture9.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture9.JPG" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture10.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture10.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Capture11.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Capture11.JPG" alt="portfolio img"></a>
               				 </div>
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Login.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Login.JPG" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
							 <div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/Website/Redirect to another page.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Website/Redirect to another page.JPG" alt="portfolio img"></a>
								</div>	
							</div>
							</div>
						</div>
					
					<!--------------------------------------------------->

					<div id="panel3">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
								
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/student_db/Capture1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture1.jpg" alt="portfolio img"></a>
								</div>
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/student_db/Capture2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture2.jpg" alt="portfolio img"></a>
								</div>
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/student_db/Capture3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture3.jpg" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<a href="images/student_db/Capture4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture4.jpg" alt="portfolio img"></a>
								</div>
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/student_db/Capture5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture5.jpg" alt="portfolio img"></a>
								</div>
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/student_db/Capture6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture6.jpg" alt="portfolio img"></a>
								</div>
							</div>
							<div class="row">
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/student_db/Capture7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/student_db/Capture7.jpg" alt="portfolio img"></a>
								</div>
							</div>
							</div>
						</div>
					<!-------------------------------->

					<div id="panel4">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/shopping/Capture1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/shopping/Capture1.jpg" alt="portfolio img"></a>
								</div>	
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/shopping/Capture2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/shopping/Capture2.jpg" alt="portfolio img"></a>
								</div>	
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/shopping/Capture3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/shopping/Capture3.jpg" alt="portfolio img"></a>
								</div>	
							</div>
							<div class="row">
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/shopping/Capture4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/shopping/Capture4.jpg" alt="portfolio img"></a>
								</div>	
								<div class="iso-box website col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="images/shopping/Capture5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/shopping/Capture5.jpg" alt="portfolio img"></a>
								</div>	
								
							</div>
						</div>
					</div>
					<!-------------------------------->
					<div id="panel5">
						<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
							<div class="row">
								<div class="iso-box WebApp col-lg-4 col-md-4 col-sm-6 col-xs-6">
									<a href="images/Billing/Capture1.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/Billing/Capture1.JPG" alt="portfolio img"></a>
									</div>
							</div>
						</div>	
					</div>
					<!-------------------------------->
				</div>
			</div>
		</div>
	</div>
</div>		

			

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="heading bold">CUSTOMER REVIEWS</h1>
				<h2 class="subheading">OUR CUSTOMER REVIEWS</h2>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper rou">
					<img src="images/team4.jpeg" class="img-responsive" style="border-radius: 50%; width: 300px; margin-left:33px" alt="team img">
						<div class="team-des">
							<h4>Mr.Arun Das</h4>
							<h3>""</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper rou">
					<img src="images/team2.jpg" class="img-responsive" style="border-radius: 50%;  width: 300px; margin-left:33px" alt="team img">
						<div class="team-des">
							<h4>Mr. MD Husan</h4>
							<h3>""</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/team3.jpg" class="img-responsive" style="border-radius: 50%;  width: 300px; margin-left:33px" alt="team img">
						<div class="team-des">
							<h4>Mr. Sapta Ghosh</h4>
							<h3>""</h3>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">CONTACT US</h1>
				<h2 class="subheading">WE LOVE PRETTY MUCH TO HEAR FROM YOU</h2>
			</div>
		</div>
		<div class="row">
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
				<i class="fas fa-phone-alt"></i>
				<h3><a href="tel: +918637827952">+91 9064286385</a></h3>
				<h3><a href="tel: +918637827952">+91 79802 22011</a></h3>
			</div>
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.8s">
				<i class="far fa-envelope"></i>
				<h3><a href="mailto:team@alsoltech.com">team@alsoltech.com</a></h3>
			</div>
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="1s">
				<i class="fas fa-map-marker-alt"></i>
					<h3>Kolkata, India</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
				  	  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
					</div>
					<div class="col-md-6 col-sm-6">
						<textarea name="message" rows="7" class="form-control" id="message" placeholder="Message"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="SEND EMAIL">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul class="social-icon">
					<li><a href="https://www.facebook.com/AlsolTech-102593158104879" 
                    				class="fab fa-facebook-f wow bounceIn" data-wow-delay="0.3s" target="_parent"></a></li>
					<li><a href="#" class="fab fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
					<li>
						<a href="https://www.linkedin.com/company/68019635" class="fab fa-linkedin-in wow bounceIn" data-wow-delay="0.9s"></a>
					</li>
					<li><a href="#" class="fab fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- copyright section
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-9">
				<p>Copyright © 2084 Blaster Studio | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-3">
				<a href="#home" class="smoothScroll fa fa-angle-up"></a>
			</div>
		</div>
	</div>
</section> -->

<!-- JAVASCRIPT JS FILES -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

<?php

include 'database.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

    $insertquery="insert into admin_index(name, email, subject, message) values('$name','$email','$subject','$message')";
    $query= mysqli_query($con, $insertquery);

    if($query){
        ?>
        <script>
            alert('Send Mail successful');
            location.replace("index.php");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('No connection');
        </script>
        <?php
         }
}

?>