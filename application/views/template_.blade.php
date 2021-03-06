<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GSE</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{base_url('assets/')}}dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{base_url('assets/')}}dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet"
		  href="{{base_url('assets/')}}bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{{base_url('assets/')}}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="index2.html" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>A</b>LT</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Admin</b>LTE</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Notifications: style can be found in dropdown.less -->
					<li class="dropdown notifications-menu">
						<a href="}#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="}#">
											<i class="fa fa-users text-aqua"></i> 5 new members joined today
										</a>
									</li>
									<li>
										<a href="}#">
											<i class="fa fa-warning text-yellow"></i> Very long description here that
											may not fit into the
											page and may cause design problems
										</a>
									</li>
									<li>
										<a href="}#">
											<i class="fa fa-users text-red"></i> 5 new members joined
										</a>
									</li>
									<li>
										<a href="}#">
											<i class="fa fa-shopping-cart text-green"></i> 25 sales made
										</a>
									</li>
									<li>
										<a href="}#">
											<i class="fa fa-user text-red"></i> You changed your username
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="}#">View all</a></li>
						</ul>
					</li>

					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="}#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{base_url('assets/')}}dist/img/user2-160x160.jpg" class="user-image"
								 alt="User Image">
							<span class="hidden-xs">Ronan Adriel Zenatti</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="{{base_url('assets/')}}dist/img/user2-160x160.jpg" class="img-circle"
									 alt="User Image">

								<p>
									Alexander Pierce
									<small>Assistente Social</small>
									<small>CREAS</small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Cadastro</a>
								</div>
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">Sair</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="#" ><i class="fa fa-sign-out"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				{{--<li class="header">MAIN NAVIGATION</li>--}}
				<li class="treeview">
					<a href="#">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="}index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
						<li><a href="{{base_url('assets/')}}index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-files-o"></i>
						<span>Layout Options</span>
						<span class="pull-right-container">
<span class="label label-primary pull-right">4</span>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>
								Top Navigation</a></li>
						<li><a href="{{base_url('assets/')}}pages/layout/boxed.html"><i class="fa fa-circle-o"></i>
								Boxed</a></li>
						<li><a href="{{base_url('assets/')}}pages/layout/fixed.html"><i class="fa fa-circle-o"></i>
								Fixed</a></li>
						<li><a href="{{base_url('assets/')}}pages/layout/collapsed-sidebar.html"><i
										class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
					</ul>
				</li>
				<li>
					<a href="{{base_url('assets/')}}pages/widgets.html">
						<i class="fa fa-th"></i> <span>Widgets</span>
						<span class="pull-right-container">
<small class="label pull-right bg-green">new</small>
</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-pie-chart"></i>
						<span>Charts</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>
								ChartJS</a></li>
						<li><a href="{{base_url('assets/')}}pages/charts/morris.html"><i class="fa fa-circle-o"></i>
								Morris</a></li>
						<li><a href="{{base_url('assets/')}}pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>
						</li>
						<li><a href="{{base_url('assets/')}}pages/charts/inline.html"><i class="fa fa-circle-o"></i>
								Inline charts</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-laptop"></i>
						<span>UI Elements</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/UI/general.html"><i class="fa fa-circle-o"></i>
								General</a></li>
						<li><a href="{{base_url('assets/')}}pages/UI/icons.html"><i class="fa fa-circle-o"></i>
								Icons</a></li>
						<li><a href="{{base_url('assets/')}}pages/UI/buttons.html"><i class="fa fa-circle-o"></i>
								Buttons</a></li>
						<li><a href="{{base_url('assets/')}}pages/UI/sliders.html"><i class="fa fa-circle-o"></i>
								Sliders</a></li>
						<li><a href="{{base_url('assets/')}}pages/UI/timeline.html"><i class="fa fa-circle-o"></i>
								Timeline</a></li>
						<li><a href="{{base_url('assets/')}}pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-edit"></i> <span>Forms</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/forms/general.html"><i class="fa fa-circle-o"></i>
								General Elements</a></li>
						<li><a href="{{base_url('assets/')}}pages/forms/advanced.html"><i class="fa fa-circle-o"></i>
								Advanced Elements</a></li>
						<li><a href="{{base_url('assets/')}}pages/forms/editors.html"><i class="fa fa-circle-o"></i>
								Editors</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-table"></i> <span>Tables</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/tables/simple.html"><i class="fa fa-circle-o"></i>
								Simple tables</a></li>
						<li><a href="{{base_url('assets/')}}pages/tables/data.html"><i class="fa fa-circle-o"></i> Data
								tables</a></li>
					</ul>
				</li>
				<li>
					<a href="{{base_url('assets/')}}pages/calendar.html">
						<i class="fa fa-calendar"></i> <span>Calendar</span>
						<span class="pull-right-container">
<small class="label pull-right bg-red">3</small>
<small class="label pull-right bg-blue">17</small>
</span>
					</a>
				</li>
				<li>
					<a href="{{base_url('assets/')}}pages/mailbox/mailbox.html">
						<i class="fa fa-envelope"></i> <span>Mailbox</span>
						<span class="pull-right-container">
<small class="label pull-right bg-yellow">12</small>
<small class="label pull-right bg-green">16</small>
<small class="label pull-right bg-red">5</small>
</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder"></i> <span>Examples</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{base_url('assets/')}}pages/examples/invoice.html"><i class="fa fa-circle-o"></i>
								Invoice</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/profile.html"><i class="fa fa-circle-o"></i>
								Profile</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/login.html"><i class="fa fa-circle-o"></i>
								Login</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/register.html"><i class="fa fa-circle-o"></i>
								Register</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/lockscreen.html"><i
										class="fa fa-circle-o"></i> Lockscreen</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/404.html"><i class="fa fa-circle-o"></i> 404
								Error</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/500.html"><i class="fa fa-circle-o"></i> 500
								Error</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/blank.html"><i class="fa fa-circle-o"></i>
								Blank Page</a></li>
						<li><a href="{{base_url('assets/')}}pages/examples/pace.html"><i class="fa fa-circle-o"></i>
								Pace Page</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-share"></i> <span>Multilevel</span>
						<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-circle-o"></i> Level One
								<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
								<li class="treeview">
									<a href="#"><i class="fa fa-circle-o"></i> Level Two
										<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
										<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
					</ul>
				</li>
				<li><a href="{{base_url('assets/')}}https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a>
				</li>
				<li class="header">LABELS</li>
				<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Blank page
				<small>it all starts here</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Examples</a></li>
				<li class="active">Blank page</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Title</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
								title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
								title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					Start creating your amazing application!
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					Footer
				</div>
				<!-- /.box-footer-->
			</div>
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 0.1.0
		</div>
		<strong>Copyright &copy; 2018 <a href="http://www.etecibitinga.com.br">ETEC de Ibitinga</a>.</strong> Todos os direitos reservados.
	</footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{base_url('assets/')}}bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{base_url('assets/')}}bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{base_url('assets/')}}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{base_url('assets/')}}bower_components/raphael/raphael.min.js"></script>
<script src="{{base_url('assets/')}}bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{base_url('assets/')}}bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{base_url('assets/')}}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{base_url('assets/')}}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{base_url('assets/')}}bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{base_url('assets/')}}bower_components/moment/min/moment.min.js"></script>
<script src="{{base_url('assets/')}}bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{base_url('assets/')}}bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{base_url('assets/')}}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{base_url('assets/')}}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{base_url('assets/')}}bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{base_url('assets/')}}dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{base_url('assets/')}}dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{base_url('assets/')}}dist/js/demo.js"></script>--}}
</body>
</html>
