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
            <a class="brand" href="<?php echo site_url('admin'); ?>">My Shop</a>

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
            <li>
                <a class="tab1" href="#">
                    <i class="sidebar-home"></i>
                    <span>后台首页</span>
                </a>
            </li>            
            <li class="">
                <a class="tab2 accordion-toggle collapsed" data-toggle="collapse" href="#orders_list">
                    <i class="sidebar-charts"></i>
                    <span>订单管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="orders_list" class="collapse">
                    <li><a href="<?php echo site_url('admin/orders'); ?>">所有订单</a></li>
                    <li><a href="#">未处理订单</a></li>
                    <li><a href="#">正在处理订单</li>
                    <li><a href="#">已处理订单</a></li>
                </ul>
            </li>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="tab3" href="<?php echo site_url('admin/users') ?>">
                    <i class="icon-group"></i>
                    <span>用户管理</span>
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
                <a class="tab7  accordion-toggle collapsed" data-toggle="collapse" href="#comments_list">
                    <i class="sidebar-calendar"></i>
                    <span>评论管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="comments_list" class="collapse">
                    <li><a href="#">添加分类</a></li>
                    <li><a href="#">管理分类</a></li>
                </ul>
            </li>
            <li class="">
                <a class="tab8" href="#">
                    <i class="sidebar-tables"></i>
                    <span>数据列表</span>
                </a>
            </li>
            <!-- <li class="">
                <a class="tab9" href="#">
                    <i class="sidebar-ui"></i>
                    <span>UI Elements</span>
                </a>
            </li> -->
            <li class="">
                <a class="tab10" href="#">
                    <i class="sidebar-gear"></i>
                    <span>我的信息</span>
                </a>
            </li>
            <li class="">
                <a class="tab11" href="#">
                    <i class="sidebar-logout"></i>
                    <span>退出登录</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        <div class="container-fluid">
            <!-- tabs to navigate through forms related pages -->
            <div id="tabs-wrapper">
                <div class="row-fluid">
                    <a class="span2 tab" href="http://detail.herokuapp.com/form-showcase.html">
                        Forms
                    </a>
                    <a class="span2 tab active" href="./Detail Admin - User list_files/Detail Admin - User list.htm">
                        Users list
                    </a>
                    <a class="span2 tab" href="http://detail.herokuapp.com/new-user.html">
                        New user form
                    </a>
                    <a class="span2 tab" href="http://detail.herokuapp.com/user-profile.html">
                        User profile
                    </a>
                </div>
            </div>

            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>Users</h3>
                    <div class="span10 pull-right">
                        <input type="text" class="span5 search" placeholder="Type a user&#39;s name...">
                        
                        <!-- custom popup filter -->
                        <!-- styles are located in css/elements.css -->
                        <!-- script that enables this dropdown is located in js/theme.js -->
                        <div class="ui-dropdown">
                            <div class="head" data-toggle="tooltip" title="" data-original-title="Click me!">
                                Filter users
                                <i class="arrow-down"></i>
                            </div>  
                            <div class="dialog" style="display: none;">
                                <div class="pointer">
                                    <div class="arrow"></div>
                                    <div class="arrow_border"></div>
                                </div>
                                <div class="body">
                                    <p class="title">
                                        Show users where:
                                    </p>
                                    <div class="form">
                                        <select>
                                            <option>Name</option>
                                            <option>Email</option>
                                            <option>Number of orders</option>
                                            <option>Signed up</option>
                                            <option>Last seen</option>
                                        </select>
                                        <select>
                                            <option>is equal to</option>
                                            <option>is not equal to</option>
                                            <option>is greater than</option>
                                            <option>starts with</option>
                                            <option>contains</option>
                                        </select>
                                        <input type="text">
                                        <a class="btn-flat small">Add filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="http://detail.herokuapp.com/new-user.html" class="btn-flat success pull-right">
                            <span>+</span>
                            NEW USER
                        </a>
                    </div>
                </div>

                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span4 sortable">
                                    Name
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>Signed up
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>Total spent
                                </th>
                                <th class="span3 sortable align-right">
                                    <span class="line"></span>Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="./Detail Admin - User list_files/contact-img2.png" class="img-circle avatar hidden-phone">
                                <a href="http://detail.herokuapp.com/user-profile.html" class="name">Alejandra Galvan Castillo</a>
                                <span class="subtext">Graphic Design</span>
                            </td>
                            <td>
                                Jan 28, 2012
                            </td>
                            <td>
                                $ 1,320.00
                            </td>
                            <td class="align-right">
                                <a href="http://detail.herokuapp.com/user-list.html#">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <!-- row -->
                        <tr>
                            <td>
                                <img src="./Detail Admin - User list_files/contact-img.png" class="img-circle avatar hidden-phone">
                                <a href="http://detail.herokuapp.com/user-profile.html" class="name">Alejandra Galvan Castillo</a>
                                <span class="subtext">Graphic Design</span>
                            </td>
                            <td>
                                May 16, 2012
                            </td>
                            <td>
                                $ 89.99
                            </td>
                            <td class="align-right">
                                <a href="http://detail.herokuapp.com/user-list.html#">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <!-- row -->
                        <tr>
                            <td>
                                <img src="./Detail Admin - User list_files/contact-img2.png" class="img-circle avatar hidden-phone">
                                <a href="http://detail.herokuapp.com/user-profile.html" class="name">Alejandra Galvan Castillo</a>
                                <span class="subtext">Graphic Design</span>
                            </td>
                            <td>
                                Sep 06, 2012
                            </td>
                            <td>
                                $ 344.00
                            </td>
                            <td class="align-right">
                                <a href="http://detail.herokuapp.com/user-list.html#">alejandra@canvas.com</a>
                            </td>
                        </tr>
                        <!-- row -->
                        </tbody>
                    </table>
                </div>
                <div class="pagination pull-right">
                    <ul>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">‹</a></li>
                        <li><a class="active" href="http://detail.herokuapp.com/user-list.html#">1</a></li>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">2</a></li>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">3</a></li>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">4</a></li>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">5</a></li>
                        <li><a href="http://detail.herokuapp.com/user-list.html#">›</a></li>
                    </ul>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>


	<!-- scripts -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/jquery-1.9.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/theme.js'); ?>"></script> 

    <script type="text/javascript">
        $('.dropdown-toggle').dropdown();

        $('.collapse a').click(function()
        {
            $('.collapse').collapse('hide');
        });
    </script>

</body></html>