<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo isset($title) ? $title : '' ; ?></title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="<?php echo base_url('assets/css/lib/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/lib/bootstrap-responsive.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/lib/bootstrap-overrides.css'); ?>" type="text/css" rel="stylesheet">

    <!-- libraries -->
    <link href="<?php echo base_url('assets/css/lib/jquery-ui-1.10.2.custom.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/lib/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/layout.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/elements.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/icons.css'); ?>">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/index.css'); ?>" type="text/css" media="screen">

    <!-- open sans font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <!-- lato font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="#">My Shop</a>

            <!-- shows same menu as sidebar but for mobile devices -->
            <button type="button" class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
            <div class="nav-collapse collapse visible-phone mobile-menu">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Charts</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Tables</a></li>
                    <li><a href="#">UI Elements</a></li>
                </ul>
            </div>
            <!-- end navbar for mobile devices -->

            <ul class="nav pull-right">
                <li class="hidden-phone">
                    <input class="search" type="text">
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        Your account
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Export your data</a></li>
                        <li><a href="#">Send feedback</a></li>
                    </ul>
                </li>
                <li class="settings">
                    <a href="#" role="button">
                        <span class="navbar_icon"></span>
                    </a>
                </li>
                <li id="fat-menu" class="dropdown">
                    <a href="#" role="button" class="logout">
                        <span class="navbar_icon"></span>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav" class="hidden-phone">
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="tab1" href="#">
                    <i class="sidebar-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li class="">
                <a class="tab2 accordion-toggle collapsed" data-toggle="collapse" href="#orders_list">
                    <!-- <i class="sidebar-charts"></i> -->
                    <span>订单管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="orders_list" class="collapse">
                    <li><a href="#">未处理订单</a></li>
                    <li><a href="#">正在处理订单</li>
                    <li><a href="#">已处理订单</a></li>
                </ul>
            </li>
            <li class="">
                <a class="tab3" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="">
                <a class="tab4 accordion-toggle collapsed" data-toggle="collapse" href="#pages_list">
                    <i class="sidebar-forms"></i>
                    <span>页面管理</span>
                    <b class="icon-caret-down"></b>  
                </a>
                <ul id="pages_list" class="collapse">
                    <li><a href="#">编辑首页</a></li>
                    <li><a href="#">编辑产品页</a></li>
                </ul>
            </li>
            <li class="">
                <a class="tab5 accordion-toggle collapsed" data-toggle="collapse" href="#products_list">
                    <i class="sidebar-gallery"></i>
                    <span>产品管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="products_list" class="collapse">
                    <li><a href="#">添加产品</a></li>
                    <li><a href="#">管理产品</a></li>
                </ul>
            </li>
            <li class="">
                <a class="tab6 accordion-toggle collapsed" data-toggle="collapse" href="#categories_list">
                    <i class="sidebar-widgets"></i>
                    <span>分类管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="categories_list" class="collapse">
                    <li><a href="#">添加分类</a></li>
                    <li><a href="#">管理分类</a></li>
                </ul>
            </li>
            <li class="">
                <a class="tab7" href="#">
                    <i class="sidebar-calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li class="">
                <a class="tab8" href="#">
                    <i class="sidebar-tables"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="">
                <a class="tab9" href="#">
                    <i class="sidebar-ui"></i>
                    <span>UI Elements</span>
                </a>
            </li>
            <li class="">
                <a class="tab10" href="#">
                    <i class="sidebar-gear"></i>
                    <span>My Info</span>
                </a>
            </li>
            <li class="">
                <a class="tab11" href="#">
                    <i class="sidebar-logout"></i>
                    <span>Login page</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">

            <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid stats-row">
                    <div class="span3 stat">
                        <div class="data">
                            <span class="number">2457</span>
                            visits
                        </div>
                        <span class="date">Today</span>
                    </div>
                    <div class="span3 stat">
                        <div class="data">
                            <span class="number">3240</span>
                            users
                        </div>
                        <span class="date">February 2013</span>
                    </div>
                    <div class="span3 stat">
                        <div class="data">
                            <span class="number">322</span>
                            orders
                        </div>
                        <span class="date">This week</span>
                    </div>
                    <div class="span3 stat last">
                        <div class="data">
                            <span class="number">$2,340</span>
                            sales
                        </div>
                        <span class="date">last 30 days</span>
                    </div>
                </div>
            </div>
            <!-- end upper main stats -->

            <!-- pad wrapper start -->
            <div id="pad-wrapper">
                <canvas id="myChart" width="1000" height="600"></canvas>
                
            </div>
            <!-- pad wrapper end -->
        </div>
    </div>


	<!-- scripts -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/jquery-1.9.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/chart.min.js'); ?>"></script> 

    <script type="text/javascript">
        $('.dropdown-toggle').dropdown();

        $('.collapse a').click(function()
        {
            $('.collapse').collapse('hide');
        });

        var lineChartData = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }
            ]
            
        }

    var myLine = new Chart(document.getElementById("myChart").getContext("2d")).Line(lineChartData);
    </script>

</body></html>