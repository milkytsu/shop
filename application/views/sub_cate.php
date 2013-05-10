<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sub_cate.css">
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
			<div>
				<!-- cate nav start -->
				<ul class="breadcrumb">
					<li><a href="#">Home</a> <span class="divider">/</span></li>
					<li><a href="#">Category1</a> <span class="divider">/</span></li>
					<li class="active">sub cate 1</li>
				</ul>
				<!-- cate nav end -->
			</div>
			<div class="sep20"></div>
			<!-- sidebar and content start -->
			<div class="row">
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
					<!-- select attributions start -->
					<div id="select_attr">
						<div>
							<h4>sub cate</h4>
						</div>
						<ul class="inline select_attr">
							<li class="text-right">scores</li>
							<li>
								<a href="#">5 stars</a>
							</li>
							<li>
								<a href="#">4+ starts</a>
							</li>
						</ul>
						<ul class="inline select_attr">
							<li class="text-right">Brands</li>
							<li>
								<a href="#">fender</a>
							</li>
							<li>
								<a href="#">gibson</a>
							</li>
						</ul>
						<ul class="inline select_attr">
							<li class="text-right">Price</li>
							<li>
								<a href="#">0-100</a>
							</li>
							<li>
								<a href="#">101-500</a>
							</li>
						</ul>
					</div>
					<!-- select attributions end -->
					<!-- select filters start -->
					<div>
						<dl>
							<dt class="pull-left">
								Sort by:
							</dt>
							<dd class="pull-left">
								<button class="btn btn-warning">Price</button>
								<button class="btn btn-warning">Sales</button>
								<button class="btn btn-warning">Comments</button>
							</dd>
						</dl>						
					</div>
					<!-- select filters end -->
					<div class="clearfix"></div>
					<div class="sep20"></div>
					<!-- product list start -->
					<div>
						<ul class="thumbnails">
							<li>
								<div>
									<a href="#" class="thumbnail">
										<img data-src="holder.js/300x200" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" / >
									</a>
								</div>
								<div class="caption text-center">
									<caption>product 1</caption>
									<p>big sales</p>
									<p><button>buy</button></p>
								</div>
							</li>
							<li>
								<div>
									<a href="#" class="thumbnail">
										<img data-src="holder.js/300x200" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" / >
									</a>
								</div>
								<div class="caption text-center">
									<caption>product 1</caption>
									<p>big sales</p>
									<p><button>buy</button></p>
								</div>
							</li>
							<li>
								<div>
									<a href="#" class="thumbnail">
										<img data-src="holder.js/300x200" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" / >
									</a>
								</div>
								<div class="caption text-center">
									<caption>product 1</caption>
									<p>big sales</p>
									<p><button>buy</button></p>
								</div>
							</li>
							<li>
								<div>
									<a href="#" class="thumbnail">
										<img data-src="holder.js/300x200" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" / >
									</a>
								</div>
								<div class="caption text-center">
									<caption>product 1</caption>
									<p>big sales</p>
									<p><button>buy</button></p>
								</div>
							</li>
							<li>
								<div>
									<a href="#" class="thumbnail">
										<img data-src="holder.js/300x200" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" / >
									</a>
								</div>
								<div class="caption text-center">
									<caption>product 1</caption>
									<p>big sales</p>
									<p><button>buy</button></p>
								</div>
							</li>
					</div> 
					<!-- product list end -->
				</div>
				<!-- content end -->
			</div>
			<!-- sidebar and content end -->
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