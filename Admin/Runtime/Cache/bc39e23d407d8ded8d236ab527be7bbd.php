<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8" />
<title>WeMall微商城后台管理中心</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="MobileOptimized" content="320">
<link
	href="__PUBLIC__/Style/plugins/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/uniform/css/uniform.default.min.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/gritter/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/fullcalendar/fullcalendar/fullcalendar.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/jqvmap/jqvmap/jqvmap.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/css/style-metronic.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style-responsive.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/plugins.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/pages/tasks.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/themes/default.css" rel="stylesheet"
	type="text/css" id="style_color" />
<link href="__PUBLIC__/Style/css/custom.css" rel="stylesheet"
	type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="page-header-fixed">
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<div class="header-inner">
			<a class="navbar-brand" href="__APP__/Index/index" style="padding-left: 20px;"><font
				color="#FFFFFF">We</font><font color="#72C1AC">Mall</font> </a>
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse"> <img
				src="__PUBLIC__/Style/img/menu-toggler.png" alt="" />
			</a>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown user"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" data-hover="dropdown"
					data-close-others="true"> <span class="username">Admin</span> <i
						class="fa fa-angle-down"></i>
				</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:;" id="trigger_fullscreen"><i
								class="fa fa-move"></i> 全屏</a></li>
						<li><a href="__APP__/Login/logout"><i class="fa fa-key"></i>
								退出</a></li>
					</ul></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="page-container">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>

				<li class=""><a href="javascript:;"> <i class="fa fa-home"></i>
						<span class="title">全局</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Group/index"> 商城设置</a></li>
						<li><a href="__APP__/Group/theme"> 主题设置</a></li>
						<li><a href="__APP__/Group/payonline"> 在线支付</a></li>
						<li><a href="__APP__/Group/setemail"> 邮件设置</a></li>
					</ul></li>

				<li class=""><a href="javascript:;"> <i class="fa fa-truck"></i>
						<span class="title">商品</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Goods/index"> 商品管理</a></li>
						<li><a href="__APP__/Goods/menu"> 商品分类</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i class="fa fa-list"></i>
						<span class="title">订单</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Orders/index"> 订单管理</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i
						class="fa fa-sitemap"></i> <span class="title">微信</span> <span
						class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Weixin/replay"> 微信初始化</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i class="fa fa-user"></i>
						<span class="title">用户</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Users/index"> 用户管理</a></li>
					</ul></li>

				<li class="active"><a href="javascript:;"> <i class="fa fa-cloud"></i>
						<span class="title">云商店</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li class="active"><a href="__APP__/Yun/index">主题</a></li>
						<li><a href="__APP__/Yun/plugin">插件</a></li>
					</ul></li>						
			</ul>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">全局设置</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li><i class="fa fa-home"></i> <a href="">首页</a> <i
							class="fa fa-angle-right"></i></li>
						<li><a href="#">WeMall模板中心</a></li>
					</ul>
				</div>
			</div>

			<iframe src="http://wemall.duapp.com/Download/index.php" style="width: 100%;height: 600px;" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
		</div>
	</div>
	<div class="footer">
		<div class="footer-inner">2014 &copy; Powered by WeMall .</div>
		<div class="footer-tools">
			<span class="go-top"> <i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
	<script src="__PUBLIC__/Style/plugins/jquery-1.10.2.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery-migrate-1.2.1.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.blockui.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.cookie.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/uniform/jquery.uniform.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/jquery.vmap.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/flot/jquery.flot.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/flot/jquery.flot.resize.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.pulsate.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/moment.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/daterangepicker.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/gritter/js/jquery.gritter.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.sparkline.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/app.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/index.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/tasks.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
		});
	</script>
</body>
</html>