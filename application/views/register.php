<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo isset($title) ? $title : '' ; ?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reg.css">
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
			<!-- reg step start -->
			<div class="reg_step">
				<!-- reg step process bar start -->
				<div class="row text-center">
					<div class="span4">
						<p>step 1: Fill the user's infomation</p>
					</div>
					<div class="span4">
						<p>step 2: Check your email</p>
					</div>
					<div class="span4">
						<p>step 3: Success</p>
					</div>
					<div class="span12">
						<div class="progress progress-striped">
							<?php
								echo "<div class='bar' style='width: {$width}%;'></div>";
							?>
						</div>
					</div>
				</div>
				<!-- reg step process bar end -->
				<!-- reg form start -->
				<div class="reg_form">
					<?php
					if (isset($step) && 1 == $step)
					{
					?>
					<form action="./register?step=2" method="POST">
						<table>
							<tr>
								<td class="text-right"><label for="username">User name:&nbsp;</label></td>
								<td><input class="span4" type="text" name="username" id="username" placeholder="username" /></td>
							</tr>
							<tr>
								<td class="text-right"><label for="email">E-mail:&nbsp;</label></td>
								<td><input class="span4" type="text" name="email" id="email" placeholder="E-mail" /></td>
							</tr>
							<tr>
								<td class="text-right"><label for="userpass">User password:&nbsp;</label></td>
								<td><input class="span4" type="password" name="userpass" id="userpass" placeholder="user's password" /></td>
							</tr>
							<tr>
								<td class="text-right"><label for="passconf">Confirm password:&nbsp;</label></td>
								<td><input class="span4" type="password" name="passconf" id="passconf" placeholder="confirm password" /></td>
							</tr>
							<tr>
								<td class="text-right"><label for="vali_code">Validation Code:&nbsp;</label></td>
								<td><input class="span2" type="text" name="vali_code" id="vali_code" />&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="span2" type="text" />
								</td>
							</tr>
							<tr>
								<td colspan="3" class="text-center"><input class="btn btn-primary span4" type="submit" name="submit" id="submit" value="submit" /></td>
							</tr>
						</table>
					</form>
					<?php
					}
					else if (isset($step) && 2 == $step)
					{
						echo '<p>We have sent your a email to active the account, please go to check your email</p>';
					}
					?>
				</div>
				<!-- reg form end -->
			</div>
			<!-- reg step end -->
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