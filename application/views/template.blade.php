<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="{{base_url('assets/')}}/img/favicon.ico"/>
	<title>Software ELO</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/bootstrap/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/animate.css">

	<link rel="stylesheet"
		  href="{{base_url('assets/')}}bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/datatables.net/responsive.dataTables.min.css">
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/datatables.net/responsive.bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/Ionicons/css/ionicons.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/select2/dist/css/select2.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{base_url('assets/')}}dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
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
	<!-- Sweetalert 2 -->
	<link rel="stylesheet" href="{{base_url('assets/')}}bower_components/sweetalert2/dist/sweetalert2.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{base_url('assets/')}}plugins/iCheck/all.css">


	<link rel="stylesheet" href="{{base_url('assets/')}}css/style.css">


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
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="{{base_url()}}" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>ELO</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>ELO</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<b class="hidden-xs navbar-corp-name">{{$_SESSION['entidade_nome']}}</b>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Notifications: style can be found in dropdown.less -->
					<li>
						<a href="#"><strong>Ultimo login:</strong> ???? </a>
					</li>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{base_url('assets/img/user_padrao.png')}}" class="user-image"
								 alt="User Image">
							<span class="hidden-xs">{{$_SESSION['user_nome']}}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="{{base_url('assets/img/user_padrao.png')}}" class="img-circle"
									 alt="User Image">
								<p>
									{{$_SESSION['user_nome']}}
									<small>{{$_SESSION['entidade_nome']}}</small>
								</p>
							</li>

							<!-- Menu Footer-->
							<li class="user-footer">
								{{--<div class="pull-left">--}}
								{{--<a href="#" class="btn btn-default btn-flat">Cadastro</a>--}}
								{{--</div>--}}
								<div class="pull-right">
									<a href="{{base_url("auth/logout")}}" class="btn btn-default btn-flat">Sair</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="{{base_url("auth/logout")}}"><i class="fa fa-sign-out"></i></a>
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
				<li>
					<a href="{{base_url('adolescente/')}}">
						<i class="fa fa-user"></i> <span>Adolescentes</span>
					</a>
				</li>
				<li>
					<a href="{{base_url('pia/')}}">
						<i class="fa fa-file-powerpoint-o"></i> <span>P. I. A.</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-info"></i> <span>Cadastros</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active">
							<a href="{{base_url('entidade/')}}"><i class="fa fa-circle-o"></i> Entidades</a>
						</li>
						<li class="active">
							<a href="{{base_url('cargo/')}}"><i class="fa fa-circle-o"></i> Cargos</a>
						</li>
						<li class="active">
							<a href="{{base_url('funcionario/')}}"><i class="fa fa-circle-o"></i> Funcionários</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{base_url('audit/')}}">
						<i class="fa fa-eye"></i> <span>Auditoria</span>
					</a>
				</li>
				<li>
					<a href="https://goo.gl/forms/x9wcoIDNRsmlf1eH2" target="_blank">
						<i class="fa fa-support"></i> <span>Suporte</span>
					</a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<strong>@yield('titulo', "Menu Principal")
					<small class="text-danger">@yield('subtitulo')</small>
				</strong>
			</h1>
			<ol class="breadcrumb">
				<li>{{"Ibitinga-SP, " . date('d/m/Y')}}</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box @yield('box-color')">
				<div class="box-body">
					@yield('content')
				</div>
			</div>
		</section>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs"><b>Version</b> 0.1.0</div>
		<strong>Copyright &copy; 2018 <a target="_blank" href="http://www.etecibitinga.com.br">
				ETEC de Ibitinga</a>.</strong> Todos os direitos reservados.
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
<!-- Select2 -->
<script src="{{base_url('assets/')}}bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="{{base_url('assets/')}}bower_components/select2/dist/js/i18n/pt-BR.js"></script>
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
<script
	src="{{base_url('assets/')}}bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"
	charset="UTF-8"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{base_url('assets/')}}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{base_url('assets/')}}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{base_url('assets/')}}bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="{{base_url('assets/')}}bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{base_url('assets/')}}bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables Responsive -->
<script src="{{base_url('assets/')}}bower_components/datatables.net/js/dataTables.responsive.min.js"></script>
<script src="{{base_url('assets/')}}bower_components/datatables.net/js/responsive.bootstrap.min.js"></script>
<!-- DataTables Buttons -->
<script src="{{base_url('assets/bower_components/datatables.net/js/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{base_url('assets/bower_components/datatables.net/js/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{base_url('assets/bower_components/datatables.net/js/buttons.html5.min.js')}}"></script>
<script src="{{base_url('assets/bower_components/datatables.net/js/buttons.print.min.js')}}"></script>
<script src="{{base_url('assets/bower_components/datatables.net/js/dataTables.buttons.min.js')}}"></script>
<script src="{{base_url('assets/bower_components/datatables.net/js/buttons.bootstrap.min.js')}}"></script>
<!-- InputMask -->
<script src="{{base_url('assets/')}}bower_components/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<!-- jQuery Validate -->
<script src="{{base_url('assets/')}}bower_components/jquery-validation/dist/jquery.validate.js"></script>
<script src="{{base_url('assets/')}}bower_components/jquery-validation/dist/additional-methods.js"></script>
<script src="{{base_url('assets/')}}bower_components/jquery-validation/dist/localization/messages_pt_BR.js"></script>
<!-- SweetAlert2 -->
<script src="{{base_url('assets/')}}bower_components/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- iCheck -->
<script src="{{base_url('assets/')}}plugins/iCheck/icheck.js"></script>

<!-- Mask Money -->
<script src="{{base_url()}}assets/bower_components/jquery.maskMoney.min.js"></script>

<!-- AdminLTE App -->
<script src="{{base_url('assets/')}}dist/js/adminlte.min.js"></script>

<script>
	$.fn.select2.defaults.set("language", "pt-BR");
	$.fn.select2.defaults.set("width", "100%");
	$('select').select2();
	$('select').on('select2:select', function (e) {
		$(this).valid();
	});

	$('.mask_date').inputmask('99/99/9999');
	$('.mask_time').inputmask('00:00:00');
	$('.mask_datetime').inputmask('99/99/9999 00:00');
	$('.mask_date_time').inputmask('99/99/9999 00:00:00');
	$('.mask_CEP').inputmask('99.999-999');
	$('.mask_phone9').inputmask('(99) 9 9999-9999');
	$('.mask_phone8').inputmask('(99) 9999-9999');
	$('.mask_CNPJ').inputmask('99.999.999/9999-99');
	$('.mask_CPF').inputmask('999.999.999-99');

	$('.mask_phone').inputmask({mask: ["(99) 9999-9999", "(99) 99999-9999"]}).on('focusout', function (event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		$(target).inputmask('remove');
		if (phone.length > 10) {
			element.inputmask("(99) 9 9999-999[9]");
		} else {
			element.inputmask("(99) 9999-9999[9]");
		}
	});

	$('.datepicker').datepicker({
		language: 'pt-BR'
	});

	//iCheck for checkbox and radio inputs
	$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue'
	});
	//Red color scheme for iCheck
	$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
		checkboxClass: 'icheckbox_minimal-red',
		radioClass: 'iradio_minimal-red'
	});
	//Flat red color scheme for iCheck
	$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_flat-green'
	});

	$('[data-toggle="tooltip"]').tooltip();


	$(".Money2").maskMoney({
		decimal: ",",
		thousands: ".",
		allowZero: true,
		allowNegative: true,
		precision: 2,
	});

	$(".Money4").maskMoney({
		decimal: ",",
		thousands: ".",
		allowZero: true,
		allowNegative: true,
		precision: 4,
	});

	$(".MoneyRS2").maskMoney({
		decimal: ",",
		thousands: ".",
		allowZero: true,
		allowNegative: true,
		precision: 2,
		prefix: 'R$ '

	});

	$(".MoneyRS4").maskMoney({
		decimal: ",",
		thousands: ".",
		allowZero: true,
		allowNegative: true,
		precision: 4,
		prefix: 'R$ '
	});

	function deletarRegistro(tabela, id, nomeTable) {
		var base_url = "/";
		swal({
			title: "Deletar Registro",
			text: "Deseja deletar o registro #" + id + "?",
			type: "warning",
			animation: false,
			customClass: 'animated tada',
			showCancelButton: true,
			confirmButtonText: "Sim, Deletar!",
			cancelButtonText: "Não, Cancelar.",
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: base_url + tabela + "/deletar",
					type: "POST",
					data: {
						id: id
					},
					success: function (data) {
						if (nomeTable) {
							$("#" + nomeTable).DataTable().ajax.reload();
							console.log("nome");
						} else {
							$('table').DataTable().ajax.reload();
						}
						swal("Deletado!", "Seu Registro foi Deletado com Sucesso!", "success");
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert(errorThrown);
					}
				});
			}
		});
	}
</script>

@yield('js')

</body>
</html>
