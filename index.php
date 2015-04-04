<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daniel Andrade</title>

	<!--styles-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="css/style.css?v=1" rel="stylesheet">

</head>
<body>
	
	<!-- header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="pullcontainer visible-xs">
					<a href="#" id="pull" class="pull"><i class="fa fa-bars fa-2x"></i></a>
					<img src="img/main-logo.png" alt="" class="logo_mobile">
				</div>
			</div>
			<div class="row hidden-xs text-center">
				<nav>
					<ul class="clearfix">
						<li><a href="#about" data-scroll>ABOUT ME</a></li>
						<li class="dot">.</li>
						<li><a href="#work" data-scroll>WORK</a></li>
						<li><a href="http://www.danielandrade.net"><img id="logo-img" src="img/main-logo.png" alt=""></a></li>
						<li><a href="#skills" target="_blank" data-scroll>SKILLS</a></li>
						<li class="dot">.</li>
						<li><a href="#contact" data-scroll>CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="hero"></div>
	</header>
	
	<!-- about -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<i class="fa fa-user bounce" style="font-size:42px; color: #282f35"></i>
					<h2>Hi!</h2>
					<p>I'm Daniel Andrade, an electronics engineer that fell in love with the web. For the past <span style="font-size:30px;">∞</span> years I have worked on many cool projects, as a full stack web developer as well as an embedded systems engineer.</p>
					</div>
			</div>
		</div>
	</section>

	<!-- work -->
	<section class="work" id="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div style="col-md-12 ">
						<i class="fa fa-rocket bounce text-center" style="font-size:42px; color: #282f35; margin-top:25px; width:100%"></i>
						<h1 class="text-center">Work</h1>
					</div>

					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="web eng photo">All</span></li>
						<li><span class="filter" data-filter="web">Web</span></li>
						<li><span class="filter" data-filter="eng">Engineering</span></li>
						<li><span class="filter" data-filter="photo">Photography</span></li>
					</ul>
					
					
					<div id="portfoliolist">
						<!-- darkglass -->
						<div class="portfolio web" data-cat="web">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/web/darkglass.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">darkglass.com</a>
										<span class="text-category">Wordpress Theme</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>	
						
						<!-- deRolt -->
						<div class="portfolio web" data-cat="web">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/web/derolt.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">loja.derolt.com.br</a>
										<span class="text-category">Magento Store</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>																																							
						
						<!-- fazenda rio encantado -->
						<div class="portfolio web" data-cat="web">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/web/fazendarioencanrado.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">fazendarioencantado.com.br</a>
										<span class="text-category">Website</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>														
						
						<!-- daniel andrade -->
						<div class="portfolio web" data-cat="web">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/web/danielandrade.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">danielandrade.net</a>
										<span class="text-category">Wordpress Theme</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
						
						<!-- fairuz maggio -->					
						<div class="portfolio web" data-cat="eng">
							<div class="portfolio-wrapper">				
								<img src="img/portfolios/web/fairuzmaggio.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">fairuzmaggio.net</a>
										<span class="text-category">Wordpress Theme</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				

						<!-- road to patagonia -->
						<div class="portfolio web" data-cat="web">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/web/roadtopatagonia.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">roadtopatagonia.net</a>
										<span class="text-category">Jekyll Blog</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>		
						
						<div class="portfolio eng" data-cat="eng">
							<div class="portfolio-wrapper">						
								<img src="img/portfolios/web/4.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Sonor's Design</a>
										<span class="text-category">Web design</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
						
						<div class="portfolio eng" data-cat="eng">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/card/1.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Typography Company</a>
										<span class="text-category">Business card</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>	
									
						<div class="portfolio eng" data-cat="eng">
							<div class="portfolio-wrapper">
								<img src="img/portfolios/app/3.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Weatherette</a>
										<span class="text-category">APP</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>			
						
						<div class="portfolio eng" data-cat="eng">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/card/4.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">BMF</a>
										<span class="text-category">Business card</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>	
						
		

						<div class="portfolio photo" data-cat="photo">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/logo/6.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Mobi Sock</a>
										<span class="text-category">Logo</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>																	

						<div class="portfolio photo" data-cat="photo">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/logo/7.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Village Community Church</a>
										<span class="text-category">Logo</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>													
						
						<div class="portfolio photo" data-cat="photo">
							<div class="portfolio-wrapper">			
								<img src="img/portfolios/icon/4.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a class="text-title">Domino's Pizza</a>
										<span class="text-category">Icon</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>								
					
					</div>
					
				</div>
			</div>
		</div>
	</section>
		

	<!-- skills -->
	<section class="skills" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<i class="fa fa-connectdevelop bounce" style="font-size:42px; color: #282f35; margin-top:25px;"></i>
					<h1>Skills</h1>
					<p>The crossover between design, programming and electronics has always been of interest to me. <br/><br/>I have a wide range of skills that include front-end development (HTML5, CSS3, SASS, Javascript, Responsive, UX), back-end development using open source technologies (PHP, Wordpress, Python, MySQL, mongoDB), Linux server system administration, deployment and performance tuning (Apache, MySQL and NGinx). <br/><br/>As an Engineer, my skill set is focused on Embedded Systems (Electronics, Matlab, Circuit Simulation, Robotics, Microcontrollers...). Well, you can check my resume for a more detailed information <a href="http://www.danielandrade.net/Daniel_Spillere_Andrade-CV.pdf" target="_blank"><b>HERE</b></a>. </p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- contact -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="sign-up">
					<div class="text-center">
						<img src="img/dan.png" class="logo-contact" width="150" height="150" alt="">
					</div>
					<h2 class="contact_txt text-center">Get in touch!</h2>						
					<p class="contact_txt text-center">I'm available for freelance projects: <br/>
						<SCRIPT TYPE="text/javascript">
							emailE=('daniel@' + 'danielandrade.net')	
							document.write('<a style="color:#fff;" href="mailto:' + emailE + '">' + emailE + '</a>')
						</SCRIPT></p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer -->
	<footer id="footer">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 text-center">
					<ul class="footer-icons">
						<li><a href="https://github.com/dansku" target="_blank"><i class="fa fa-github-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.linkedin.com/in/dansku" target="_blank"><i class="fa fa-linkedin-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://instagram.com/danskubr" target="_blank"><i class="fa fa-instagram fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.youtube.com/danskubr" target="_blank"><i class="fa fa-youtube-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://twitter.com/dspillere" target="_blank"><i class="fa fa-twitter-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.flickr.com/photos/spillere/" target="_blank"><i class="fa fa-flickr fa-3 bounce" style="font-size:42px;"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- javascript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script> smoothScroll.init(); </script>

</body>
</html>