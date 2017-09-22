<!DOCTYPE html>
<html>
<head>
	<title>
	HUST UNIVERSITY
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="bower/bootstrap/dist/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/home.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="bower/swipebox/src/css/swipebox.css">
	<link href="bower/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href='bower/font-awesome/fonts/fontawesome-webfont.ttf' rel='stylesheet' type='text/css'>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY=AIzaSyAhqFfXMBh5IszGGWrSCQuzddaVv5bF1cs&callback=initMap"
  	type="text/javascript"></script>
	<script src="js/jquery-1.11.1.min.js"></script> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="bower/easing/easing.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();

				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
</head>
<body>
	<div class="banner">		
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="header-left">	
					<h1><a href="index.html">Food Court</a></h1>
				</div> 
				<div class="header-right">	
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+84 984 121 314</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="">oder_food_and_drink@gmail.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-text agileits">
			<!-- banner Slider starts Here -->
			<script src="bower/ResponsiveSlides/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
					$("#slider3").responsiveSlides({
						auto: false,
						pager:true,
						nav:true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append("");
						},
						after: function () {
							$('.events').append("");
						}
					});	
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>					
						<h2 class = "fix-font">Hust Food And Drink Order</h2>
						<div class="col-lg-12 col-sm-12 col-xs-12  text-center button-product">
			                <a class="btn btn-readmore" href="#" role="button"><h4>ĐĂNG NHẬP</h4></a>
			            </div>
					</li>					
				</ul>
			</div>
		</div>
		<div class="top-nav">
			<nav class="navbar navbar-default">
				<div class="container">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom active"><a href="index.html">Home</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#about" class="scroll">About</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#services" class="scroll">Services</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#portfolio" class="scroll">Portfolio</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#events" class="scroll">Events</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#contact" class="scroll">Contact Us</a></li>
						</ul>	
						<div class="clearfix"> </div>
					</div>	
				</div>
			</nav>		
		</div>	
	</div>
	
	<!--//banner-->
	<!---728x90--->
	<!--about-->
	<div id="about" class="about">
		<div class="container">
			<h3 class="title">About</h3>
			<h6>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h6>
			<div class="col-md-6 col-sm-6 about-grids about-top-left">
				<div class="col-md-10 col-sm-10 about-text about-text1">
					<h4>Combined with a handful</h4>
					<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
				<div class="col-md-2 col-sm-2 about-icon">
					<i class="fa fa-link" aria-hidden="true"></i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 about-grids about-top-right">
				<div class="col-md-2 col-sm-2 about-icon">
					<i class="fa fa-cog" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 col-sm-10 about-text about-text2">
					<h4>The standard chunk</h4>
					<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 col-sm-6 about-grids about-btm-left">
				<div class="col-md-10 col-sm-10 about-text about-text3">
					<h4> Letraset sheets lorem</h4>
					<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
				<div class="col-md-2 col-sm-2 about-icon">
					<i class="fa fa-hourglass-o" aria-hidden="true"></i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 about-grids about-btm-right">
				<div class="col-md-2 col-sm-2 about-icon">
					<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 col-sm-10 about-text about-text4">
					<h4>Contrary to belief</h4>
					<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//about-->
	
	<!---728x90--->
	<!--services-->
	<div id="services" class="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<h6>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h6>
			<div class="service-row">
				<div class="col-md-4 col-sm-4 service-gds service-gd1">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-beer" aria-hidden="true"></i>		
						</div>
						<h4 class="mission">Accusantium</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd2">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Consequatur</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd3">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-fire" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Reprehenderit</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd4">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-spoon" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Miruestno</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd5">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-coffee" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Claritasest </h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd6">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-glass" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Processus</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="clearfix"> </div>				
			</div>
		</div>
	</div>
	
	<!--//services-->
	<!--portfolio-->
	<div id="portfolio" class="portfolio">
		<h3 class="title">Our Portfolio</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>All</span></li>
					<li class="resp-tab-item"><span>category 1</span></li>
					<li class="resp-tab-item"><span>category 2</span></li>
					<li class="resp-tab-item"><span>category 3</span></li>
					<li class="resp-tab-item"><span>category 4</span></li>					
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="tab_img">
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g1.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g2.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g3.jpg" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam,Lorem ipsum dolor sit amet, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g3.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g4.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g5.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g5.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g6.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g7.jpg" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam, Lorem ipsum dolor sit amet, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g7.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g8.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g8.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g9.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g9.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g10.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g10.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g11.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g11.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g12.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g12.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="tab_img">
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g3.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g1.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g5.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g8.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g8.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="tab_img">
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g7.jpg" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam, Lorem ipsum dolor sit amet, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g7.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g8.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g8.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g9.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g9.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g10.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g10.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g11.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g11.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g12.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g12.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="tab_img">
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g5.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g6.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g7.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="tab_img">
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g8.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="col-md-2 portfolio-grids grid">
								<div class="hover ehover14">
									<a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
										<img src="images/g2.jpg" alt="" class="img-responsive" />
										<div class="overlay">
											<h4>Portfolio</h4>
											<button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show More
											</button>
										</div>
									</a>	
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<!--ResponsiveTabs-->
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
			<!--//ResponsiveTabs-->
			<!-- swipe box js -->
			<script src="bower/swipebox/src/js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
			<!-- //swipe box js -->
		</div>
	</div>
	<!--//portfolio-->
	
	<!--events-->
	<div class="events" id="events">
		<div class="container">
			<h3 class="title">Events & News</h3>
			<h6>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h6>
			<div class="col-md-6 col-sm-6 events-left">
				<a href="#" data-toggle="modal" data-target="#mymodal" class="spcl"><img src="images/event2.jpg" alt=" " /></a>
				<a href="#" data-toggle="modal" data-target="#mymodal" class="spcl"><h4>Maecenas magna turpis, auctor sed ante eu, laoreet ullamcorper.</h4></a>
				<h5>21/4/2016</h5>
				<p>Phasellus a velit pellentesque, convallis mauris vitae, porttitor turpis. Morbi quis leo erat. Vivamus fermentum blandit lectus, ut tempor nisi sodales ac. Quisque lobortis, metus nec vulputate consectetur, enim neque ullamcorper erat, in tempor urna turpis sed ex</p>
				<a href="#" data-toggle="modal" data-target="#mymodal" class="hvr-radial-out event-read">READ MORE</a>
				<div class="modal fade features-modal" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<img src="images/modal.jpg" alt=" " />
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 events-right">
				<div class="event1">	
					<div class="col-md-1 col-sm-1 calendar">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
					<div class="col-md-11 col-sm-11 w3l">
						<a href="#" data-toggle="modal" data-target="#mymodal"><h4>Etiam vitae viverra felis.</h4></a>
					</div>
					<div class="clearfix"></div>
					<h5>21/4/2016</h5>
					<p>Curabitur eu ipsum eget lectus tempor rhoncus et interdum sapien. Pellentesque vel vehicula metus. Curabitur malesuada augue ultricies nisi porta iaculis. Curabitur tristique mi libero, id interdum libero vestibulum vel.</p>
					<a href="#" class="hvr-radial-out event-read" data-toggle="modal" data-target="#mymodal">READ MORE</a>
				</div>
				<div class="event2">
					<div class="col-md-1 col-sm-1 calendar">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
					<div class="col-md-11 col-sm-11 w3l">
						<a href="#" data-toggle="modal" data-target="#mymodal"><h4> Maecenas place interdum.</h4></a>
					</div>
					<div class="clearfix"></div>
					<h5>29/4/2016</h5>
					<p>Curabitur eu ipsum eget lectus tempor rhoncus et interdum sapien. Pellentesque vel vehicula metus. Curabitur malesuada augue ultricies nisi porta iaculis. Curabitur tristique mi libero, id interdum libero vestibulum vel.</p>
					<a href="#" class="hvr-radial-out event-read" data-toggle="modal" data-target="#mymodal">READ MORE</a>
				</div>
				<div class="event3">
					<div class="col-md-1 col-sm-1 calendar">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
					<div class="col-md-11 col-sm-11 w3l">
						<a href="#" data-toggle="modal" data-target="#mymodal"><h4>Phasellus velit pellentes.</h4></a>
					</div>
					<div class="clearfix"></div>
					<h5>16/5/2016</h5>
					<p>Curabitur eu ipsum eget lectus tempor rhoncus et interdum sapien. Pellentesque vel vehicula metus. Curabitur malesuada augue ultricies nisi porta iaculis. Curabitur tristique mi libero, id interdum libero vestibulum vel.</p>
					<a href="#" class="hvr-radial-out event-read" data-toggle="modal" data-target="#mymodal">READ MORE</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//events-->

	<!--map-->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.675941241996!2d105.84115881429742!3d21.00562329394505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2sHanoi+University+of+Science+and+Technology!5e0!3m2!1sen!2sin!4v1506065390576"></iframe>
		</iframe>
	</div>
	<!--//map-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">Contact Us</h3>
			<div class="contact-grids">
				<div class="col-md-7 col-sm-7 contact-left">
					<form action="#" method="post">
						<h4>Name:</h4>
						<input type="text" name="Name" placeholder="" required="">
						<h4>Email:</h4>
						<input class="email" type="text" name="Email" placeholder="" required="">
						<h4>Subject:</h4>
						<input class="subject" type="text" name="subject" placeholder="" required="">
						<h4>Message:</h4>
						<textarea placeholder=" " name="Message" required=""></textarea>
						<input type="submit" class="hvr-radial-out" value="SEND">
					</form>
				</div>
				<div class="col-md-5 col-sm-5 contact-right">
					<h4>Contact Info</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages sed do.</p>
					<p>Cras luctus mi non imperdiet dignissim. Vestibulum diam felis, euismod quis molestie dapibus, congue a velit.</p>
					<div class="con-right-grid1">
						<div class="col-md-1 col-sm-1 contact-icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="col-md-11 col-sm-11 contact-text">
							<h5>Broome St</h5>
							<h5>Canada, NY 10002, USA</h5>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="con-right-grid2">
						<div class="col-md-1 col-sm-1 contact-icon">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</div>
						<div class="col-md-11 col-sm-11 contact-text">
							<h5> +00 111 222 3333</h5>
							<h5> +1 888 888 4444</h5>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="con-right-grid3">
						<div class="col-md-1 col-sm-1 contact-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="col-md-11 col-sm-11 contact-text">
							<h5><a href="mailto:example@mail.com">mail@example.com</a></h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="bower/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>