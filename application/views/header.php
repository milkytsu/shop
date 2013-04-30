<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style  
	--> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<!-- customized css
	-->
<!-- Bootstrap style responsive 
	-->	
	<link href="<?php echo base_url(); ?>assets/css/lib/bootstrap-responsive.min.css" rel="stylesheet"/>
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url(); ?>assets/css/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72-precomposed.png">
    <link rel="<?php echo base_url(); ?>assets/img/apple-touch-icon-57-precomposed.png">
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome! User</div>
	<div class="span6">
	<div class="pull-right">
		<i class="icon-shopping-cart"></i>
	<a href="product_summary.html"><span class="btn btn-mini active"><i class="icon-shopping-cart"></i> [ 3 ] Itemes in your cart </span></a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Bootsshop"/></a>
    <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="dropdown">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn">Login <b class="caret"></b></span></a>
		<div class="dropdown-menu">
		<form class="form-horizontal loginFrm">
		  <div class="control-group">								
			<input type="text" class="span2" id="inputEmail" placeholder="Email">
		  </div>
		  <div class="control-group">
			<input type="password" class="span2" id="inputPassword" placeholder="Password">
		  </div>
		  <div class="control-group">
			<label class="checkbox">
			<input type="checkbox"> Remember me
			</label>
			<button type="submit" class="btn pull-right">Sign in</button>
		  </div>
		</form>					
		</div>
	</li>
    </ul>
	<form action="#" class="navbar-search">
	 <input id="srchFld" type="text" placeholder="I'm looking for ..." class="search-query span5"/>
	</form>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
<div class="container">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
			<a href="special_offer.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  <div class="item">
			<a href="special_offer.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  <div class="item">
			<a href="special_offer.html"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		   <div class="item">
			<a href="special_offer.html"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		   <div class="item">
			<a href="special_offer.html"><img src="themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		</div>
	<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
	  </div> 
</div>
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="navbar">
			<a data-target="#sideManu" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</a>
		</div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart" />3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></li>
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html">Cameras (100)</a></li>
				<li><a href="products.html">Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html">Mobile Phone (80)</a></li>
				<li><a href="products.html">Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html">Women's Clothing (45)</a></li>
				<li><a href="products.html">Women's Shoes (8)</a></li>												
				<li><a href="products.html">Women's Hand Bags (5)</a></li>	
				<li><a href="products.html">Men's Clothings  (45)</a></li>
				<li><a href="products.html">Men's Shoes (6)</a></li>												
				<li><a href="products.html">Kids Clothing (5)</a></li>												
				<li><a href="products.html">Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html">Angoves  (35)</a></li>
				<li><a href="products.html">Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html">French Rabbit (5)</a></li>	
				<li><a href="products.html">Louis Bernard  (45)</a></li>
				<li><a href="products.html">BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html">Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html">Garden (3)</a></li>												
				<li><a href="products.html">Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
			<li style="border:0"> &nbsp;</li>						
			
			<li style="border:0"> &nbsp;</li>	
			<li>
			  <div class="thumbnail">
				<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
				<div class="caption">
				  <h5>Panasonic</h5>
				  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>		
			<li>
			<div class="thumbnail">
				<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
				</div>
			  </div>
			</li> 
			<li class="last">
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
			</li> 
		  </ul>
	</div>
<!-- Sidebar end================================================== -->
		<div class="span9">
		<div>
			<h3>Featured Products </h3>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/4.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/5.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a  href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/4.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/5.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">&lsaquo;</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">&rsaquo;</a>
			  </div>
			  </div>

			<h3>Latest Products </h3>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					   <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					   <h4><a class="btn btn-large" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>	
			</div>
		</div>
		</div>
	</div>
</div>

<!-- Footer ================================================================== -->
	<hr class="soft">
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/rss.png" title="rss" alt="rss"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		 <hr class="soft">
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/lib/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/prettify.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/js/bootshop.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript">
	$('#myCarousel').carousel({
	  interval: 7000
	})
	 $('#featured').carousel({
	  interval: 4000
	})
	$(function() {
		$('#gallery a').lightBox();
	});
	</script>
</body>
</html>