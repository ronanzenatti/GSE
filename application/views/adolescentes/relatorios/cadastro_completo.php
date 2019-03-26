<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Cadastro Completo</title>
	<style media="all">
		body {
			margin: 0;
			padding: 0;
			font-family: monospace;
			font-size: 11pt;
		}

		h1 {
			text-align: center;
			font-size: 16pt;
		}

		.row {
			clear: both;
			padding: 0;
			margin: 0;
			border-collapse: collapse;
		}

		.col {
			border: 1px solid #000000;
			float: left;
			padding: 2px;
			margin: 0;
			border-collapse: collapse;
		}

		.col-1 {
			width: 1.4cm;
		}

		.col-2 {
			width: 2.8cm;
		}

		.col-3 {
			width: 4.2cm;
		}

		.col-4 {
			width: 5.6cm;
		}

		.col-5 {
			width: 7.25cm;
		}

		.col-6 {
			width: 8.7cm;
		}

		.col-7 {
			width: 9.8cm;
		}

		.col-8 {
			width: 11.6cm;
		}

		.col-9 {
			width: 12.6cm;
		}

		.col-10 {
			width: 14.5cm;
		}

		.col-11 {
			width: 15.95cm;
		}

		.col-12 {
			width: 16.8cm;
		}

		.strong {
			font-weight: bold;
			background-color: #EEEEEE;
			text-transform: uppercase;
		}

		.text-center {
			text-align: center;
		}
	</style>
</head>
<body>

<h1>CADASTRO COMPLETO DO ADOLESCENTE</h1>

<div class="row"></div>
<div class="strong text-center col col-12">DADOS PESSOAIS</div>

<div class="row"></div>
<div class="strong col col-1">NOME:</div>
<div class="col col-7"><?= $ado['nome'] ?></div>
<div class="strong col col-2">NASCIMENTO:</div>
<div class="col col-2"><?= date('d/m/Y', strtotime($ado['dt_nasc'])) ?></div>

<div class="row"></div>
<div class="strong col col-1">SEXO:</div>
<div class="text-center col col-1"><?= $ado['sexo'] ?></div>
<div class="strong col col-2">ESTADO CIVIL:</div>
<div class="col col-2"><?= $ado['estado_civil'] ? "Solteiro" : "Casado" ?></div>
<div class="strong col col-2">NATURAL:</div>
<div class="col col-4"><?= $ado['natural'] ?></div>


<div class="row"></div>
<div class="strong col col-3">RESPONSÁVEL:</div>
<div class="col col-9"><?= $ado['responsavel'] ?></div>


</body>
</html>
