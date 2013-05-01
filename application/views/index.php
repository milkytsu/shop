<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>my style</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
</head>
<body>
	<div id="top">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo base_url(); ?>" name="top">shop</a>
					<form class="navbar-search pull-left">
						<input type="text" class="search-query" placeholder="Search">
					</form>
					<div class="navbar">
						<ul class="nav pull-right">
							<li><a href="<?php echo base_url(); ?>">HOME</a></li>
							<li class="divider-vertical"></li>
							<li><a href="<?php echo site_url(); ?>/register">Register</a></li>
							<li><a href="<?php echo site_url(); ?>/login">Sign in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrap" class="container">
		<div class="sep20"></div>
		<!-- myCarousel start -->
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner">
				<div class="active item">
					<img src="<?php echo base_url(); ?>assets/img/01.jpg">
					<div class="carousel-caption">
						<h4>First label</h4>
						<p>i'm the first label</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/02.jpg">
					<div class="carousel-caption">
						<h4>Second label</h4>
						<p>i'm the second label</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/03.jpg">
					<div class="carousel-caption">
						<h4>Third label</h4>
						<p>i'm the third label</p>
					</div>
				</div>
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		<!-- myCarousel end -->
		<div class="sep20"></div>
		<!-- main box start -->	
		<div class="box">
			<div class="num">
				<!-- sidebar start -->
				<div id="sidebar" class="span3">
					<div id="category">
						<ul class="nav nav-tabs nav-stacked">
							<li><a href="#">ALL Category</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">Category</a></li>
						</ul>
					</div>
					<!-- promo area start -->
					<div id="promo" class="text-center">
					<div id="promo1" class="promo">
						<img class="promo_pic" src="<?php echo base_url(); ?>assets/img/promo/promo1.jpg" alt="les paul custom">
						<h4>les paul custom</h4>
						<p>$5,739</p>
					</div>
					<div class="sep10"></div>
					<div id="promo2" class="promo">
						<div  class="promo_pic">
							<img src="<?php echo base_url(); ?>assets/img/promo/promo1.jpg" alt="les paul custom">
						</div>
						<h4>les paul custom</h4>
						<p>$5,739</p>
					</div>
					<div class="sep10"></div>
					<div id="promo3" class="promo">
						<img class="promo_pic" src="<?php echo base_url(); ?>assets/img/promo/promo1.jpg" alt="les paul custom">
						<h4>les paul custom</h4>
						<p>$5,739</p>
					</div>
					</div>
					<!-- promo area end -->
					<div>
						<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_74x46.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
					</div>
				</div>
				<!-- sidebar end -->
				<!-- content start -->
				<div id="content" class="span9">
					<div class="pic_area">
						<div id="hot" class="product carousel slide">
							<h4>hot sells</h4>
							<ol class="carousel-indicators">
								<li data-target="#hot" data-slide-to="0" class="active"></li>
								<li data-target="#hot" data-slide-to="1"></li>
								<li data-target="#hot" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner text-center">
								<div class="active item">
									<ul class="content_pic inline text-center">
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>	
									</ul>
								</div>
								<div class="item">
									<ul class="content_pic inline text-center">
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>	
									</ul>
								</div>
								<div class="item">
									<ul class="content_pic inline text-center">
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>
										<li span="3">
											<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
											<p>les paul</p>
											<p>$1,988</p>
										</li>	
									</ul>
								</div>
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="#hot" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#hot" data-slide="next">&rsaquo;</a>
						</div>
						<div class="sep20"></div>
						<div id="new" class="product">
							<h4>new</h4>
							<div>
								<ul class="inline text-center">
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
									</li>
								</ul>
							</div>
						</div>
						<div class="sep20"></div>
						<div id="recommend" class="product">
							<h4>you may like</h4>
							<div>
								<ul class="inline text-center">
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product2.jpg" />
									</li>
								</ul>
							</div>
						</div><div class="sep20"></div>
						<div id="comment" class="product">
							<h4>hot focus</h4>
							<div>
								<ul class="inline text-center">
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
									</li>
									<li>
										<img src="<?php echo base_url(); ?>assets/img/product/product3.jpg" />
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- content end -->
			</div>
		</div>
		<!-- box end -->
	</div>
	<div id="footer">
		<div class="sep20"></div>
		<div class="text-center">
			<p><a href="#">Contact us</a></p>
			<p>E-mail: abc@abc.com | tel: +86-10-12345678</p>
			<p>powered by milky · eggy</p>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#myCarousel').carousel(
		{
			interval: 5000
		})
		$('#hot').carousel
		{
			interval: 5000
		})
	</script>
</body>
</html>