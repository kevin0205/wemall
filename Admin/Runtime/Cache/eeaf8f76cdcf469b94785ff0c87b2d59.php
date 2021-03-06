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
<link href="__PUBLIC__/Style/plugins/uniform/css/uniform.default.css"
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

<!-- 引入umeditor -->
<link href="__PUBLIC__/Plug-in/umeditor/themes/default/css/umeditor.css"
	type="text/css" rel="stylesheet">
<script type="text/javascript"
	src="__PUBLIC__/Plug-in/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8"
	src="__PUBLIC__/Plug-in/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
	src="__PUBLIC__/Plug-in/umeditor/umeditor.min.js"></script>
<script type="text/javascript"
	src="__PUBLIC__/Plug-in/umeditor/lang/zh-cn/zh-cn.js"></script>
<!-- 引入umeditor结束 -->
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
				<li class="active"><a href="javascript:;"> <i class="fa fa-list"></i>
						<span class="title">订单</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li class="active"><a href="__APP__/Orders/index"> 订单管理</a></li>
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

				<li class=""><a href="javascript:;"> <i class="fa fa-cloud"></i>
						<span class="title">云商店</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Yun/index">主题</a></li>
						<li><a href="__APP__/Yun/plugin">插件</a></li>
					</ul></li>
			</ul>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">订单设置</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li><i class="fa fa-home"></i> <a href="">首页</a> <i
							class="fa fa-angle-right"></i></li>
						<li><a href="#">订单管理</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>订单管理
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a> <a
									href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a> <a
									href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar" style="padding-bottom: 30px;">
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">
										工具 <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">输出Excel</a></li>
									</ul>
								</div>
							</div>
							<div id="sample_1_wrapper" class="dataTables_wrapper form-inline"
								role="grid">
								<div class="table-scrollable">
									<table
										class="table table-striped table-bordered table-hover dataTable"
										id="sample_1" aria-describedby="sample_1_info">
										<thead>
											<tr role="row">
												<th class="table-checkbox sorting_disabled"
													role="columnheader" rowspan="1" colspan="1" aria-label=""
													style="width: 20px;"><div class="checker">
														<span><input type="checkbox"
															class="group-checkable" data-set="#sample_1 .checkboxes"></span>
													</div></th>
												<th class="sorting" role="columnheader" tabindex="0"
													aria-controls="sample_1" rowspan="1" colspan="1"
													aria-label="Username: activate to sort column ascending"
													style="width: 251px;">订单编号</th>
												<th class="sorting_disabled" role="columnheader" rowspan="1"
													colspan="1" aria-label="Email" style="width: 464px;">订单用户|联系方式|订单地址</th>
												<th class="sorting" role="columnheader" tabindex="0"
													aria-controls="sample_1" rowspan="1" colspan="1"
													aria-label="Points: activate to sort column ascending"
													style="width: 204px;">订单总价</th>
												<th class="sorting_disabled" role="columnheader" rowspan="1"
													colspan="1" aria-label="&amp;nbsp;" style="width: 250px;">详情</th>
												<th class="sorting_disabled" role="columnheader" rowspan="1"
													colspan="1" aria-label="Joined" style="width: 299px;">订单状态</th>
											</tr>
										</thead>

										<tbody role="alert" aria-live="polite" aria-relevant="all">
											<!-- 开始循环订单 -->
											<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX even">
												<td class=" sorting_1"><div class="checker">
														<span><input type="checkbox" class="checkboxes"
															value="1"></span>
													</div></td>
												<td class=" "><?php echo ($vo["orderid"]); ?></td>
												<td class=" "><?php echo ($vo["users"]["username"]); ?>|<?php echo ($vo["users"]["phone"]); ?>|<?php echo ($vo["users"]["address"]); ?></td>
												<td class=" "><?php echo ($vo["totalprice"]); ?></td>
												<td class=" " style="height: 42px;">
													<div class="btn-group" style="position: absolute;">
														<button class="btn btn-default btn-sm dropdown-toggle"
															type="button" data-toggle="dropdown">
															详情 <i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a>付款状态：<?php echo ($vo["pay_status"]); ?></a></li>
															<li><a>打印状态：<?php echo ($vo["print_status"]); ?></a></li>
															<li class="divider"></li>
															<li><a>
																	<table style="text-align: center;">
																		<tr>订单商品：
																		</tr>
																		<tr>
																			<td>商品名称|</td>
																			<td>商品价格|</td>
																			<td>商品数量</td>
																		</tr>
																		<?php if(is_array($vo[ordersinfo])): $i = 0; $__LIST__ = $vo[ordersinfo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
																			<td><?php echo ($vol["title"]); ?></td>
																			<td><?php echo ($vol["price"]); ?></td>
																			<td><?php echo ($vol["num"]); ?></td>
																		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
																	</table>
															</a></li>
															<li class="divider"></li>
															<li style="padding-right: 20px;"><a>订单时间：<?php echo ($vo["time"]); ?></a></li>
														</ul>
													</div>
												</td>
												<td class="center"><?php echo ($vo["orders_status"]); ?></td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<!-- 订单循环结束 -->

										</tbody>
									</table>
								</div>
								<!-- 页码 -->
								<div class="row">
									<div class="col-md-5 col-sm-12"></div>
									<div class="col-md-7 col-sm-12">
										<div class="dataTables_paginate paging_bootstrap">
											<?php echo ($page); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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