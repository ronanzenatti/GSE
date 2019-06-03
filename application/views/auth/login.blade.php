<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="{{base_url('assets/')}}/img/favicon.ico"/>
	<title>Software ELO</title>
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
	<!-- iCheck -->
	<link rel="stylesheet" href="{{base_url('assets/')}}plugins/iCheck/square/blue.css">
	<style type="text/css">
		.login-logo, .register-logo {
			margin-bottom: 0;
			font-size: 30px;
		}
		.box-header {
			padding: 5px 10px 5px 10px;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
		}
		.box {
			margin: 0 !important;
		}
		.login-box, .register-box{
			margin: 0 auto;
		}
	</style>

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
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo text-center">
		<a href="{{base_url()}}">
			<img class="" src="{{base_url('assets/')}}img/newLogo.png"/><br/>
			Gestor Socioeducativo</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Digite seu Usuário e Senha para entrar</p>

		@if(isset($_SESSION['message']))
			<div id="infoMessage" class="alert alert-danger">{!!$_SESSION['message']!!}</div>
		@endif

		<form action="{{base_url('Auth/login')}}" method="post" accept-charset="utf-8">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="E-mail" name="identity" id="identity">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Senha" name="password" id="password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-offset-8 col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
				</div>
				<!-- /.col -->
			</div>
		</form>
	</div>
	<!-- /.login-box-body -->
	<div class="box box-primary">
		<div class="box-header with-border">
			Este projeto é uma parceria entre:
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="col-sm-4 col-xs-4">
				<a href="https://www.cps.sp.gov.br/" target="_blank">
					<img src="{{base_url('assets/img/cps600.png')}}" class="img-responsive"/>
				</a>
			</div>
			<div class="col-sm-4 col-xs-4">
				<a href="http://www.mpsp.mp.br" target="_blank">
					<img src="{{base_url('assets/img/mpsp.png')}}" class="img-responsive"/>
				</a>
			</div>
			<div class="col-sm-4 col-xs-4">
				<a href="http://www.etecibitinga.com.br/" target="_blank">
					<img src="{{base_url('assets/img/etec_ibitinga600.png')}}" class="img-responsive"/>
				</a>
			</div>
		</div>
		<!-- /.box-body -->
	</div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{base_url('assets/')}}bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{base_url('assets/')}}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{base_url('assets/')}}plugins/iCheck/icheck.min.js"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>
</body>
</html>
