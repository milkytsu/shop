<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/category.css">
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
		<!-- box start -->
		<div class="box">
			<div id="cate_main">
				<h3>All Category</h3>
				<ul id="cate_tab" class="nav nav-tabs">
					<li class="active">
						<a href="#all_cates" data-toggle="tab">Category</a>
					</li>
					<li>
						<a href="#brand" data-toggle="tab">Brands</a>
					</li>
					<li>
						<a href="#all_products" data-toggle="tab">All Products</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade active in" id="all_cates">
						<ul class="inline text-center">
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 1</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 2</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 3</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 4</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 5</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 6</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 7</a></li>
							<li class="cate_main" ><a class="btn btn-large span2" href="#"> cate 8</a></li>
						</ul>
					</div>
					<div class="tab-pane fade" id="brand">
						<ul class="inline">
							<li class="text-center">
								<div>
									<span class="b-img"><a href="#"><img src="<?php echo base_url(); ?>assets/img/brands/1.jpg" /></a></span>
									<span class="b-name"><a href="#">Brand 1</a></span>
								</div>
							</li>
							<li class="text-center">
								<div>
									<span class="b-img"><a href="#"><img src="<?php echo base_url(); ?>assets/img/brands/2.gif" /></a></span>
									<span class="b-name"><a href="#">Brand 2</a></span>
								</div>
							</li>
							<li class="text-center">
								<div>
									<span class="b-img"><a href="#"><img src="<?php echo base_url(); ?>assets/img/brands/3.jpg" /></a></span>
									<span class="b-name"><a href="#">Brand 3</a></span>
								</div>
							</li>
							<li class="text-center">
								<div>
									<span class="b-img"><a href="#"><img src="<?php echo base_url(); ?>assets/img/brands/4.jpg" /></a></span>
									<span class="b-name"><a href="#">Brand 4</a></span>
								</div>
							</li>
							<li class="text-center">
								<div>
									<span class="b-img"><a href="#"><img src="<?php echo base_url(); ?>assets/img/brands/5.jpg" /></a></span>
									<span class="b-name"><a href="#">Brand 5</a></span>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="all_products">
						<ul class="inline">
							<li class="text-center">
								<div class="p-img">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
								</div>
								<div class="p-name">
									<a href="#">product 1</a>
								</div>
								<div class="p-price">
									Price: <strong>$4,999</strong>
								</div>
								<div class="extra">
									<span><a href="#">0 comments</a></span>
								</div>
								<div class="btns">
									<a class="btn btn-small" href="#">Buy</a>
									<a class="btn btn-small" href="#">Add to Cart</a>
									<a class="btn btn-small" href="#">Add to Favorites</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<hr />
			<!-- sub cate start -->
			<div id="cate_sub">
				<!-- sub left start -->
				<div class="sub_left pull-left">
					<div id="cate1">
						<div class="cate_title">
							<h4>cate 1</h4>
						</div>
						<div class="cate_content">
							<dl class="pull-left">
								<dt class="pull-left text-right">sub cate 1</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=1">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=0">gibson</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=0">gibson</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=0">gibson</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=0">gibson</a></em>
									<em class="pull-left"><a href="<?php echo site_url(); ?>/category/sub_cate?cate_id=0">gibson</a></em>
								</dd>
							</dl>
						</div>
					</div>
					<div id="cate2">
						<div class="cate_title">
							<h4>cate 2</h4>
						</div>
						<div class="cate_content">
							<dl class="pull-left">
								<dt class="pull-left text-right">sub cate 1</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<!-- sub left end -->
				<!-- sub right start -->
				<div class="sub_right pull-right">
					<div id="cate3">
						<div class="cate_title">
							<h4>cate 3</h4>
						</div>
						<div class="cate_content">
							<dl class="pull-left">
								<dt class="pull-left text-right">sub cate 1</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
						</div>
					</div>
					<div id="cate5">
						<div class="cate_title">
							<h4>cate 5</h4>
						</div>
						<div class="cate_content">
							<dl class="pull-left">
								<dt class="pull-left text-right">sub cate 1</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
							<dl class="pull-left">
								<dt class="pull-left text-right">sub 2</dt>
								<dd class="pull-right">
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
									<em class="pull-left"><a href="#">fender</a></em>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<!-- sub right end -->
			</div>
			<!-- sub cate end -->
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
</body>
</html>