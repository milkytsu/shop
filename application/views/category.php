<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
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
		<!-- box start -->
		<div class="box">
			<div id="cate_main">
				<h3>All Category</h3>
				<hr />
				<ul class="inline">
					<li>cate 1</li>
					<li>cate 1</li>
					<li>cate 1</li>
					<li>cate 1</li>
					<li>cate 1</li>
				</ul>
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
</body>
</html>