<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8"/>
	<title>Redis On Window | 麦奇</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #4 for statistics, charts, recent events and reports"
		  name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	{{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />--}}
	<link href="/resources/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
		  type="text/css"/>
	<link href="/resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
		  type="text/css"/>
	<link href="/resources/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/resources/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
		  type="text/css"/>
	<!-- modal css-->
	<link href="/resources/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet"
		  type="text/css"/>
	<link href="/resources/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet"
		  type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	@yield('page_css')
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="/resources/assets/global/css/components.min.css" rel="stylesheet" id="style_components"
		  type="text/css"/>
	<link href="/resources/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="/resources/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css"/>
	<link href="/resources/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css"
		  id="style_color"/>
	<link href="/resources/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				<img src="/resources/assets/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default"/> </a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
		   data-target=".navbar-collapse"> </a>
		<!-- END RESPONSIVE MENU TOGGLER -->

		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form" action="page_general_search_2.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide"></li>
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						   data-close-others="true">
							<span class="username username-hide-on-mobile"> Nick </span>
							<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
							<img alt="" class="img-circle" src="/resources/assets/layouts/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="page_user_profile_1.html">
									<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="app_calendar.html">
									<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="app_inbox.html">
									<i class="icon-envelope-open"></i> My Inbox
									<span class="badge badge-danger"> 3 </span>
								</a>
							</li>
							<li>
								<a href="app_todo_2.html">
									<i class="icon-rocket"></i> My Tasks
									<span class="badge badge-success"> 7 </span>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="page_user_lock_1.html">
									<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="page_user_login_1.html">
									<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->

				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
@include('home_bak.layout.sidebar')
<!-- END SIDEBAR -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<!-- BEGIN CONTENT -->
	@yield('main')
	<!-- END CONTENT BODY -->
	</div>
	<!-- END CONTENT -->

</div>

<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner"> 2016 &copy; Metronic Theme By
		<a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
		<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
		   title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase
			Metronic!</a> &nbsp;|&nbsp;
		麦奇网络
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="/resources/assets/global/plugins/respond.min.js"></script>
<script src="/resources/assets/global/plugins/excanvas.min.js"></script>
<script src="/resources/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/resources/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/resources/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/resources/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
		type="text/javascript"></script>
<script src="/resources/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
		type="text/javascript"></script>

<script src="/resources/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/resources/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/resources/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/resources/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
{{--<script src="/resources/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>--}}
<script src="/resources/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/resources/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<!-- modal js-->
<script src="/resources/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"
		type="text/javascript"></script>
<script src="/resources/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js"
		type="text/javascript"></script>
<script src="/resources/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>

@yield('page_js')
</body>

</html>