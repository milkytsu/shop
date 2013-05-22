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
                <a class="tab1" href="#">
                    <i class="sidebar-home"></i>
                    <span>后台首页</span>
                </a>
            </li>            
            <li>
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
                <a class="tab3" href="#">
                    <i class="icon-group"></i>
                    <span>用户管理</span>
                </a>
            </li>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
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
            <!-- top nav tabs start -->
            <div id="tabs-wrapper">
                <div class="row-fluid">
                    <a class="span2 tab active" href="#">所有元素</a>
                    <a class="span2 tab" href="#">编辑首页</a>
                    <a class="span2 tab" href="#">编辑产品页</a>
                </div>
            </div>
            <!-- top nav tabs end -->

            <div id="pad-wrapper" class="user-list">
                <div class="table-wrapper">                   
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>首页轮播图片</h4>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <ul class="thumbnails">
                            <li class="span4">
                                <div>
                                    <a class="thumbnail thumb_carousel" href="#">
                                        <img src="<?php echo base_url('assets/img/01.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="carousel_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                            <li class="span4">
                                <div>
                                    <a class="thumbnail thumb_carousel" href="#">
                                        <img src="<?php echo base_url('assets/img/02.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="carousel_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                            <li class="span4">
                                <div>
                                    <a class="thumbnail thumb_carousel" href="#">
                                        <img src="<?php echo base_url('assets/img/03.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="carousel_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                        </ul>
                        <!-- modal start -->
                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">编辑轮播图片</h3>
                            </div>
                            <div class="modal-body">
                                <p>上传图片: <input type="file" /></p>
                                <p>标题: <input type="text" /></p>
                                <p>内容: <textarea></textarea></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                                <button class="btn btn-warning">预览</button>
                                <button class="btn btn-primary">保存</button>
                            </div>
                        </div>
                        <!-- modal end -->
                    </div>

                </div>
                <div class="table-wrapper">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>分类</h4>
                        </div>

                        <div class="row-fluid">
                            <p>
                                <span>所有分类
                                <span>
                                    全选<input type="radio" />
                                </span>
                                <span>
                                    反选<input type="radio" />
                                </span>
                                <span>
                                    取消<input type="radio" />
                                </span>
                            </p>
                            <div data-toggle="buttons-checkbox">
                                <button type="button" class="btn">cate1</button>
                                <button type="button" class="btn">cate2</button>
                                <button type="button" class="btn">cate3</button>
                            </div>
                            <div>
                                <ul class="nav nav-tabs nav-stacked span3">
                                    <li><a href="#">cate1</a></li>
                                    <li><a href="#">cate1</a></li>
                                    <li><a href="#">cate1</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-wrapper">
                    <div class="row-fluid head">
                        <h4>促销栏</h4>
                    </div>

                    <div class="row-fluid">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div>
                                    <a class="thumbnail thumb_promo" href="#">
                                        <img src="<?php echo base_url('assets/img/promo/promo1.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="promo_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                            <li class="span3">
                                <div>
                                    <a class="thumbnail thumb_promo" href="#">
                                        <img src="<?php echo base_url('assets/img/promo/promo1.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="promo_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                            <li class="span3">
                                <div>
                                    <a class="thumbnail thumb_promo" href="#">
                                        <img src="<?php echo base_url('assets/img/promo/promo1.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="promo_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                            <li class="span3">
                                <div>
                                    <a class="thumbnail thumb_promo" href="#">
                                        <img src="<?php echo base_url('assets/img/promo/promo1.jpg') ?>" />
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <button class="promo_edit" type="btn">编辑</button> 
                                </div>
                            </li>
                        </ul>
                        <!-- modal start -->
                        <div id="promo_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="promo_modal_label">促销图片编辑</h3>
                            </div>
                            <div class="modal-body">
                                <p>上传图片: <input type="file" /></p>
                                <p>标题: <input type="text" /></p>
                                <p>内容: <textarea></textarea></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                                <button class="btn btn-warning">预览</button>
                                <button class="btn btn-primary">保存</button>
                            </div>
                        </div>
                        <!-- modal end -->
                    </div>
                </div>

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

        $('.thumb_carousel, .carousel_edit').click(function()
        {
            $('#myModal').modal({
                backdrop: false
            })
            $('#myModal').modal('show');
        });

        $('.thumb_promo, .promo_edit').click(function()
        {
            $('#promo_modal').modal(
            {
                backdrop: false
            })
            $('#promo_modal').modal('show');
            return false;
        });
    </script>

</body></html>