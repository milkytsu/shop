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
			<!-- cart start -->
			<div class="cart_step">
				<!-- progressbar start -->
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
							<div class="bar" style="width: 67%;"></div>
						</div>
					</div>
				</div>
				<!-- progressbar end -->
				<div class="sep20"></div>
				<!-- receiver_info start -->
				<div id="check_order_title">
					<h4>Please check out your order</h4>
				</div>
				<div id="reveiver_info">
					<form class="form-inline">
						<p>
							<label for="receiver">receiver</label>
							<input type="text" name="receiver" id="receiver" />
						</p>
						<p>
							<span>address</span>
							<select name="country">
								<option>Country</option>
								<option>China</option>
								<option>USA</option>
							</select>
							<select name="state">
								<option>State</option>
								<option>DC</option>
								<option>New Mexico</option>
							</select>
							<select name="city">
								<option>City</option>
								<option>...</option>
								<option>...</option>
							</select>
						</p>
					</form>
				</div>
				<!-- receiver_info end -->
				<div class="sep20">
				<!-- product list start -->
				<div id="product_list">
					<table class="table table-tripled">
						<thead>
							<tr>
								<th>Product</th>
								<th>Description</th>
								<th>Quantity/Update</th>
								<th>Price</th>
								<th>Discount</th>
								<th>Total</th>
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
									1
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
								</td>
							</tr><tr>
								<td>
									<img class="cart_img" src="<?php echo base_url(); ?>assets/img/thumbnail/thumbnail1.jpg" />
								</td>
								<td>
									this is a camera
								</td>
								<td>
									1
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
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
									1
								</td>
								<td>
									$19.9
								</td>
								<td>
								</td>
								<td>
									$19.9
								</td>
							</tr>
						</tbody>				
					</table>
				</div>
				<!-- product list end -->
				<div class="sep20"></div>
				<div id="cart_action">
					<a class="btn btn-primary btn-large pull-left" type="button" href="<?php echo site_url(); ?>/cart">Go back to Cart</a>
					<a class="btn btn-warning btn-large pull-right" type="button" href="#">Submit</a>
				</div>
			</div>
			<!-- cart end -->
			<div class="clearfix"></div>
			<div class="sep20"></div>
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