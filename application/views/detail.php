<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/detail.css">
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
			<!-- product pic start -->
			<div class="detail_product">
				<div class="pic">
					<div>
						<img src="<?php echo base_url(); ?>assets/img/product/product5.jpg" />
					</div>
					<div id="thum_pic">
						<p>thumbnail pic</p>
					</div>
				</div>
				<div class="product_intro">
					<h4>Product Name</h4>
					<hr />
					<p>product code: 123456</p>
					<p>product price: <span class="price">$69.00</span></p>
					<p>product scors: <span class="bigstar45"></span><span>(<a href="#">10 comments</a>)</span></p>
					<p>stocks:100</p>
					<p>select item
						<select class="span2">
							<option>red</option>
							<option>black</option>
							<option>white</option>
						</select>
					</p>
					<p>order number
						<i class="icon-minus"></i>
						<span><input class="span1" type="number" value="1" /></span>
						<span><i class="icon-plus"></i></span>
					</p>
					<p class="chosen">you have chosen: red</p>
					<p><button class="btn btn-large" type="button"><i class="icon-shopping-cart"></i>Add to Cart</button></p>
				</div>
			</div>
			<!-- product pic end -->
			<div class="clearfix"></div>
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
					<ul id="product_detail" class="nav nav-tabs">
						<li class="active">
							<a href="#detail" data-toggle="tab">Product Details</a>
						</li>
						<li>
							<a href="#comments" data-toggle="tab">Comments</a>
						</li>
					</ul>	
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="detail">
							<!-- product intro start -->
							<div id="intro">
								<ul class="inline">
									<li>product name: an earphone</li>
									<li>product code: 123456</li>
									<li>brand: i don't know</li>
									<li>register time: 2013-05-04 12:00:00</li>
									<li>weight: 500.0g</li>
									<li>producing area: China</li>
								</ul>	
							</div>
							<!-- product intro end -->
							<!-- product detail start -->
							<div class="product_detail">
								<div class="text-center">	
									<img class="detail_pic" src="<?php echo base_url(); ?>assets/img/product/product1.jpg" />
								</div>
								<p>product 1</p>
							</div>
							<!-- product detail end -->
						</div>
						<div class="tab-pane fade" id="comments">
							<p>comments</p>	
						</div>
					</div>
						
					</div>
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
	<script type="text/javascript">


	</script>
</body>
</html>