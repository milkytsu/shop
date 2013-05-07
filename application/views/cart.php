<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cart.css">
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
							<li><a href="./login">Sign in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrap" class="container">
		<div class="sep20"></div>
		<!-- box start -->
		<div class="box">
			<!-- cart start -->
			<div class="cart_step">
				<div class="row text-center">
					<div class="span4">
						<p>step 1: My Cart</p>
					</div>
					<div class="span4">
						<p>step 2: Check order</p>
					</div>
					<div class="span4">
						<p>step 3: Success</p>
					</div>
					<div class="span12">
						<div class="progress progress-striped">
							<div class="bar" style="width: 33%;"></div>
						</div>
					</div>
				</div>
				<!-- cart table start -->
				<div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Product</th>
								<th>Description</th>
								<th>Quantity/Update</th>
								<th>Price</th>
								<th>Discount</th>
								<th>Total</th>
								<th>Operation</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img class="cart_img" src="<?php echo base_url(); ?>assets/img/thumbnail/thumbnail1.jpg" />
								</td>
								<td>
									this is a camera
								</td>
								<td>
									<div class="input-prepend input-append">
										<button class="btn" type="button"><i class="icon-minus"></i></button>
										<input class="span1" type="text">
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
								</td>
								<td>
									<button class="btn btn-danger"><i class="icon-remove icon-white"></i></button>
								</td>
							</tr>
							<tr>
								<td>
									<img class="cart_img" src="<?php echo base_url(); ?>assets/img/thumbnail/thumbnail1.jpg" />
								</td>
								<td>
									this is a camera
								</td>
								<td>
									<div class="input-prepend input-append">
										<button class="btn" type="button"><i class="icon-minus"></i></button>
										<input class="span1" type="text">
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
								</td>
								<td>
									<button class="btn btn-danger"><i class="icon-remove icon-white"></i></button>
								</td>
							</tr>
							<tr>
								<td>
									<img class="cart_img" src="<?php echo base_url(); ?>assets/img/thumbnail/thumbnail1.jpg" />
								</td>
								<td>
									this is a camera
								</td>
								<td>
									<div class="input-prepend input-append">
										<button class="btn" type="button"><i class="icon-minus"></i></button>
										<input class="span1" type="text">
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
								</td>
								<td>
									<button class="btn btn-danger"><i class="icon-remove icon-white"></i></button>
								</td>
							</tr>
							<tr>
								<td colspan="6"><div class="text-right">total</div></td>
								<td>$110.0</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- cart table end -->
				<div class="sep20"></div>
				<div id="cart_action">
					<button class="btn btn-primary btn-large pull-left" type="button">Go back to shopping</button>
					<a class="btn btn-warning btn-large pull-right" type="button" href="<?php echo site_url(); ?>/cart/check_order">NEXT</a>
				</div>
			</div>
			<!-- cart end -->
			<div class="clearfix"></div>
			<div class="sep20"></div>
			<!-- recommend start -->
			<div id="recommend" class="product carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#recommend" data-slide-to="0" class="active"></li>
					<li data-target="#recommend" data-slide-to="1"></li>
					<li data-target="#recommend" data-slide-to="2"></li>
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
				<a class="carousel-control left" href="#recommend" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#recommend" data-slide="next">&rsaquo;</a>
			</div>
			<!-- recommend end -->
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
		$('.carousel').carousel({
			interval: 5000
		})
	</script>
</body>
</html>