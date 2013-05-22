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
                <a class="tab1" href="<?php echo site_url('admin'); ?>">
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
            <li class="">
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
                    <li><a href="<?php echo site_url('admin/edit_page'); ?>">编辑首页</a></li>
                    <li><a href="#">编辑产品页</a></li>
                </ul>
            </li>
            <li>
                <a class="tab5 accordion-toggle collapsed" data-toggle="collapse" href="#products_list">
                    <i class="sidebar-gallery"></i>
                    <span>产品管理</span>
                    <b class="icon-caret-down"></b>
                </a>
                <ul id="products_list" class="collapse">
                    <li><a href="<?php echo site_url('admin/manage_product'); ?>">管理产品</a></li>
                    <li><a href="#">添加产品</a></li>
                </ul>
            </li>
            <li>
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
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="tab7" href="<?php echo site_url('admin/comments'); ?>">
                    <i class="sidebar-calendar"></i>
                    <span>评论管理</span>
                </a>
            </li>
            <li class="">
                <a class="tab8" href="#">
                    <i class="sidebar-tables"></i>
                    <span>数据列表</span>
                </a>
            </li>
            <li class="">
                <a class="tab9" href="#">
                    <i class="sidebar-ui"></i>
                    <span>进货管理</span>
                </a>
            </li>
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

            <!-- pad wrapper start -->
            <div id="pad-wrapper">
                <div class="table-wrapper">
                    <div class="row-fluid header">
                        <h3>评论</h3>
                        <div class="span10 pull-right">
                            <div class="ui-select">
                                <select>
                                    <option>所有评论</option>
                                    <option>未处理评论</option>
                                    <option>已处理评论</option>
                                </select>
                            </div>
                            <input type="text" class="search span5" />
                            <button class="btn btn-primary btn-small">查询</button>
                        </div>
                    </div>
                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                                                    </div>
                    </div>

                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" />
                                        <span>ID</span>
                                    </th>
                                    <th>
                                        用户名
                                    </th>
                                    <th>
                                        评论产品
                                    </th>
                                    <th>
                                        内容
                                    </th>
                                    <th>
                                        状态
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
            <!-- pad wrapper end -->
        </div>
    </div>


    <!-- scripts -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/jquery-1.9.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
        $('.dropdown-toggle').dropdown();

        // $('.collapse a').click(function()
        // {
        //     $('.collapse').collapse('hide');
        // });

    </script>

</body></html>