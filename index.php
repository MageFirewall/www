<!DOCTYPE HTML>
<html>
<head>
<title>Magento Firewall</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/jquery.fancybox.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	$().UItoTop({ easingType: 'easeOutQuart' });
	$('#contact-us-submit').click(function(){
	var value=$('#contact-us').serialize();
		$.ajax({
		url:'contact-us.php',
		type:'GET',
		data:value,
		success:function(msg)
		{
			$('#contact-us-success-msg').html(msg);
		}
		});
	return false;
	});
	$(".fancybox").fancybox();
	});
	$(function () {
		var filterList = {
			init: function () {
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					onMixEnd: filterList.hoverEffect()
				});				
			},
			hoverEffect: function () {
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label1').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label1').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);
			}
		};
	filterList.init();
	});	
</script>
</head>
<body>
<!----- start-header---->
<div class="header_bg" id="home">
	<div class="container">
		<div class="head-para">
			<img src="images/magefirewall.png" class="magelogo">
			<h1>Mage Firewall</h1>
		</div>
	</div>
</div>
	<!-- end header -->
	<div class="header">
		<div class="nav_container">
		<div class="h_menu navbar-ceneter">
			<nav class="navbar navbar-default" role="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#home" class="scroll">Home</a></li>
			        <li><a href="#services" class="scroll">Features</a></li>
			        <li><a href="#portfolio" class="scroll">Screenshots</a></li>
			        <li><a href="#blog" class="scroll">Team</a></li>
			         <li><a href="#hireus" class="scroll">Hire us</a></li>
			        <li><a href="#contact" class="scroll">Contact</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	 <!---//End-services----->
	   <div id="services" class="services">
       		<div class="container">
       		   <div class="gallery-head text-center">
				  <h3>Features</h3>
				   <span> </span>
				  <p>MageFirewall has many security features including Blocking common web attacks, Blacklisting offenders , File Modification detector , Scan webserver , Scan magento for unpatched security issues , Sanitizing the GET/POST/Cookies/Upload data .
				  <br /> <br />MageFirewall Uses NinjaFirewall's rules for additional security.
				  </p>
			    </div>
       			<div class="row text-center">
       				<div class="col-md-4 about_grid">
       					<i class="icon1"> </i>
       					<h3><a href="#">Targetted</a></h3>
       					<p>We take enough care to only block the offenders and not your shoppers or backend admins.</p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon2"> </i>
       					<h3><a href="#">Great Care</a></h3>
       					<p>MageFirewall takes care of your site's security and will email you when your site is under attack or if your mage system is compromised</p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon3"> </i>
       					<h3><a href="#">Optimized</a></h3>
       					<p>MageFirewall will be speedy and will not add to your site's loading time.</p>
       				</div>
       			</div>
       		</div>
       	</div>
	 <!---//End-services----->
	 
	 
	<div id="portfolio" class="portfolio">
		<div class="container">
			<div class="head-section text-center">
				<h3>Checkout my latest work </h3>
				   <span1> </span1>
				  <p>Firewall Protection Example</p>
			</div>
		</div>
		<div id="port" class="portfolio-box">
			<div class="container">
				<ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="all">All</span></li>
					<li><span class="filter" data-filter="dashboard">Dashboard</span></li>
					<li><span class="filter" data-filter="edited_files">Console Mode</span></li>
					<li><span class="filter" data-filter="logs">Edited Files</span></li>
					<li><span class="filter" data-filter="console_mode">Logs</span></li>
				</ul>
			</div>
			<div id="portfoliolist">
				<div class="portfolio dashboard" style="display: inline-block;width:25%; opacity: 1;">
					<div class="portfolio-wrapper">	
						<a class="fancybox" rel="gallery" href="images/screenshot1.png"><img src="images/screenshot1.png" alt="" /></a>
					 </div>
				</div>					
				<div class="portfolio edited_files" style="display: inline-block;width:25%; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a class="fancybox" rel="gallery" href="images/screenshot2.png"><img src="images/screenshot2.png" alt="" /></a>
					</div>
				</div>				
				<div class="portfolio logs" data-cat="logo" style="display: inline-block;width:25%; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a class="fancybox" rel="gallery" href="images/screenshot3.png"><img src="images/screenshot3.png" alt="" /></a>
					</div>
				</div>		
				<div class="portfolio console_mode" style="display: inline-block;width:25%; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a class="fancybox" rel="gallery" href="images/screenshot4.png"><img src="images/screenshot4.png" alt="" /></a>
					</div>
				</div>	
				<div class="portfolio edited_files" data-cat="card" style="display: inline-block;width:25%; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a class="fancybox" rel="some-gallery-name" href="images/screenshot2.png"><img src="images/screenshot2.png" alt="" /></a>
					</div>
				</div>		
				<div class="clearfix"></div>	
			</div>
		</div>
	</div>
	
	
	
					<!---team---><div id="blog" class="blog">
						<div class="container">
							<div class="head-one text-center team-head">
								<h3>Meet The Team</h3>
							  	<span> </span>
						  		<p>We have worked with 100s of Magento websites and we know what exactly a Magento system needs to be secure & speedy at same time.</p>
							</div>	
				<!----team-members---->
							<div class="team-members">
								<div class="col-md-4 memo">
									<div class="team-member text-center">
										<img src="images/m1.jpg" alt="" />
										<h3>John smith</h3>
										<span>creative Director</span>
										<p>Lorem ipsum dolor sit amet, consecteturporttitora entum  digni ssim donec adipisicing elit.</p>
										<ul class="t-social unstyled-list list-inline">
											<li><a class="facebook" href="#"><span> </span></a></li>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="github" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
								</div>
								<div class="col-md-4  memo">
									<div class="team-member text-center">
										<img src="images/m2.jpg" alt="" />
										<h3>John smith</h3>
										<span>creative Director</span>
										<p>Lorem ipsum dolor sit amet, consecteturporttitora entum  digni ssim donec adipisicing elit.</p>
										<ul class="t-social unstyled-list list-inline">
											<li><a class="facebook" href="#"><span> </span></a></li>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="github" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
								</div>
								<div class="col-md-4  memo">
									<div class="team-member text-center">
										<img src="images/m3.jpg" alt="" />
										<h3>John smith</h3>
										<span>creative Director</span>
										<p>Lorem ipsum dolor sit amet, consecteturporttitora entum  digni ssim donec  adipisicing elit.</p>
										<ul class="t-social unstyled-list list-inline">
											<li><a class="facebook" href="#"><span> </span></a></li>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="github" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!----//team-members---->
						</div>
					</div>
				<!----//End-team-members----> 
				
	<div id="hireus" class="hireus">
		<div class="container">
			<div class="head-one text-center">
				  <h3>Hire Us</h3>
				   <span> </span>
				  <p>MageFirewall has many security features including Blocking common web attacks, Blacklisting offenders , File Modification detector , Scan webserver , Scan magento for unpatched security issues , Sanitizing the GET/POST/Cookies/Upload data .
				  <br /> <br />MageFirewall Uses NinjaFirewall's rules for additional security.
				  </p>
			 </div>
		</div>
	</div>
				
				
				<!---Contact--->
					<div id="contact" class="contact">
						<div class="container">
							<div class="head-contact text-center">
								<h2>Contact Us</h2>
								<span1></span1>
							</div>
							<div class="contact-grids">
								<div class="col-md-2"></div>
								<div class="col-md-8 contact-form">
								<p>Want to contact us now? Just drop us a line below.</p>	
								<form id="contact-us">
										<textarea value="Message:" onfocus="this.value = '';" name="contact-us-message" onblur="if (this.value == '') {this.value = 'Leave us a message...';}">Leave us a message...</textarea>
										<input type="text" class="textbox" value="Your@mail.com" name="contact-us-email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your@mail.com';}">
										<input type="submit" value="Send" id="contact-us-submit"/>
										<div id="contact-us-success-msg"></div>
								</form>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!---//Contact--->
				<div class="footer">
					<div class="container">
						<div class="footer-icons">
							<ul class="t-social unstyled-list list-inline">
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="github" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
							</ul>
						</div>
												
					</div>
					<div class="clearfix"> </div>
				</div>
		
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
