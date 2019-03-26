<?php
$tipo = array(
		"C" => "Celular",
		"F" => "Fixo",
		"E" => "E-mail",
		"O" => "Outros",
);
?>
		<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Cadastro Completo</title>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/dejavu-sans-mono" type="text/css"/>
	<style>
		html, body {
			height: 100%;
		}

		body {
			padding: 0;
			font-family: "DejaVu Sans Mono", monospace;
			font-size: 10pt;
			margin: 0 0 0 10mm;
		}

		h1 {
			text-align: center;
			font-size: 14pt;
			margin-bottom: 5px;
		}

		table, tr, td, th {
			border: 1px solid #000000;
			border-collapse: collapse;
			padding: 0;
			min-height: 19px;
			vertical-align: middle;
		}

		table {
			width: 100%;
		}

		td, th {
			padding-top: 5px;
			padding-bottom: 4px;
			padding-left: 3px;
			height: 5px;
		}

		.strong {
			font-weight: bold;
			background-color: #EEEEEE;
			text-transform: uppercase;
		}

		.text-center {
			text-align: center;
			padding-left: 0 !important;
		}

		header {
			border-bottom: 2px solid #000000;
		}

		header h1 {
			font-size: 14pt;
			text-align: left;
			margin-bottom: 1px;
		}

		header h3 {
			margin-top: 1px;
			margin-bottom: 1px;
			font-size: 11pt;
			font-weight: normal;
		}

		.footer, .push {
			height: 15px;
		}

		footer {
			border-top: 2px solid #000000;
			bottom: 0;
			position: fixed;
			width: 100%;
		}

		footer span {
			margin-top: 5px;
			margin-bottom: 0;
		}

		.col-1 {
			min-width: 1.5cm;
		}

		.col-2 {
			min-width: 3cm;
		}

		.col-3 {
			min-width: 4.5cm;
		}

		.col-4 {
			min-width: 6cm;
		}

		.col-5 {
			min-width: 7.5cm;
		}

		.col-6 {
			min-width: 9cm;
		}

		.col-7 {
			min-width: 10.5cm;
		}

		.col-8 {
			min-width: 12cm;
		}

		.col-9 {
			min-width: 13.5cm;
		}

		.col-10 {
			min-width: 15cm;
		}

		.col-11 {
			min-width: 16.5cm;
		}

		.col-12 {
			min-width: 18cm;
		}

		.direita {
			float: right;
		}

		.esquerda {
			float: left;
		}

		.importante{
			font-weight: bolder;
			color: #EA2027;
		}
	</style>
</head>
<body>

<header>
	<h1>{{$ent['nome']}}</h1>
	<h3>{{$ent['logradouro'] .', '. $ent['numero'] .' - ' . $ent['bairro'] .', '. $ent['cidade'].'-'.$ent['estado']}}</h3>
	<h3>{{'CEP ' . $ent['cep'] . ' - ' . $ent['telefones'] . ' - ' . $ent['email']}}</h3>
</header>

<h1>CADASTRO COMPLETO DO ADOLESCENTE</h1>

<table>
	<tr>
		<td colspan="12" class="strong text-center col-12">DADOS PESSOAIS</td>
	</tr>
	<tr>
		<td class="strong col-1">NOME:</td>
		<td class="col-7" colspan="7"><strong>{{$ado['nome'] }}</strong></td>
		<td class="strong col-2" colspan="2">NASCIMENTO:</td>
		<td class="col-2 text-center"
			colspan="2">{{($ado['dt_nasc']) ? date('d/m/Y', strtotime($ado['dt_nasc'])) : null }}</td>
	</tr>
	<tr>
		<td class="strong col-1">SEXO:</td>
		<td class="text-center col-1">{{ $ado['sexo'] }}</td>
		<td class="strong col-2" colspan="2">ESTADO CIVIL:</td>
		<td class="col-2" colspan="2">{{ $ado['estado_civil'] ? "Solteiro" : "Casado" }}</td>
		<td class="strong col-2" colspan="2">NATURAL:</td>
		<td class="col-4" colspan="4">{{ $ado['natural'] }}</td>
	</tr>
	<tr>
		<td class="strong col-3" colspan="3">RESPONSÁVEL:</td>
		<td class="col-9" colspan="9">{{ $ado['responsavel'] }}</td>
	</tr>
</table>
<br/>
<table>
	<tr>
		<td colspan="12" class="strong text-center col-12">FILIAÇÃO</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">NOME DO PAI:</td>
		<td class="col-10" colspan="10">{{$ado['pai']}}</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">NASCIMENTO:</td>
		<td class="col-2 text-center"
			colspan="2">{{($ado['pai_nasc']) ? date('d/m/Y', strtotime($ado['pai_nasc'])) : null}}</td>
		<td class="strong col-2" colspan="2">NATURAL:</td>
		<td class="col-6" colspan="6">{{$ado['pai_natural']}}</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12"></td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">NOME DA MÃE:</td>
		<td class="col-10" colspan="10">{{$ado['mae']}}</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">NASCIMENTO:</td>
		<td class="col-2 text-center"
			colspan="2">{{($ado['mae_nasc']) ? date('d/m/Y', strtotime($ado['mae_nasc'])) : null}}</td>
		<td class="strong col-2" colspan="2">NATURAL:</td>
		<td class="col-6" colspan="6">{{$ado['mae_natural']}}</td>
	</tr>
</table>
<br/>
<table>
	<tr>
		<td colspan="12" class="strong text-center col-12">DOCUMENTOS</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">CERTIDÃO:</td>
		<td class="text-center col-3" colspan="3">{{ $doc['cert_nasc'] }}</td>
		<td class="strong col-1">LIVRO:</td>
		<td class="col-2 text-center" colspan="2">{{ $doc['cert_livro']  }}</td>
		<td class="strong col-2" colspan="2">FOLHAS:</td>
		<td class="col-2 text-center" colspan="2">{{ $doc['cert_folhas'] }}</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">CARTÓRIO:</td>
		<td class="col-10" colspan="10">{{$doc['cert_cartorio']}}</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">BAIRRO:</td>
		<td class="col-4" colspan="4">{{$doc['bairro_cartorio']}}</td>
		<td class="strong col-2" colspan="2">CIDADE:</td>
		<td class="col-4" colspan="4">{{$doc['municipio_cartorio']}}</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12"></td>
	</tr>
	<tr>
		<td class="strong col-1">CPF:</td>
		<td class="text-center col-3" colspan="3">{{ $doc['CPF'] }}</td>
		<td class="strong col-1">RG:</td>
		<td class="col-3 text-center" colspan="3">{{ $doc['RG']  }}</td>
		<td class="strong col-2" colspan="2">EMISSÃO:</td>
		<td class="col-2 text-center"
			colspan="2">{{ ($doc['RG_emissao']) ? date('d/m/Y', strtotime($doc['RG_emissao'])) : null }}</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12"></td>
	</tr>
	<tr>
		<td class="strong col-3" colspan="3">TITULO DE ELEITOR:</td>
		<td class="text-center col-3" colspan="3">{{ $doc['titulo_eleitor'] }}</td>
		<td class="strong col-2" colspan="2">SEÇÃO:</td>
		<td class="col-1 text-center">{{ $doc['te_secao']  }}</td>
		<td class="strong col-1" colspan="2">ZONA:</td>
		<td class="col-1 text-center">{{ $doc['te_zona']}}</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12"></td>
	</tr>
	<tr>
		<td class="strong col-1">CTPS:</td>
		<td class="col-5 text-center" colspan="5">{{$doc['CTPS']}}</td>
		<td class="strong col-1">SÉRIE:</td>
		<td class="col-5 text-center" colspan="5">{{$doc['CTPS_serie']}}</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12"></td>
	</tr>
	<tr>
		<td class="strong col-1">CAM:</td>
		<td class="col-5 text-center" colspan="5">{{$doc['CAM']}}</td>
		<td class="strong col-2" colspan="2">CDI / CR:</td>
		<td class="col-4 text-center" colspan="4">{{$doc['CDI_CR']}}</td>
	</tr>
	<tr>
		<td class="strong col-2" colspan="2">PROVIDENCIAR</td>
		<td class="col-10 importante" colspan="10">{{$doc['providenciar']}}</td>
	</tr>
</table>
<br/>
<table>
	<tr>
		<td colspan="12" class="strong text-center col-12">OBSERVAÇÕES</td>
	</tr>
	<tr>
		<td class="col-12" colspan="12">{{$ado['obs']}}</td>
	</tr>
</table>

<br/>

<table>
	<tr>
		<td class="strong text-center" colspan="6">ENDEREÇOS</td>
	</tr>
	<tr>
		<th class="strong">Descrição</th>
		<th class="strong">Logradouro</th>
		<th class="strong">Bairro</th>
		<th class="strong">Cidade</th>
		<th class="strong">CEP</th>
		<th class="strong">Ativo</th>
	</tr>
	@foreach($ends as $end)
		<tr>
			<td>{{$end['descricao']}}</td>
			<td>{{$end['logradouro'] .', '. $end['numero']}}</td>
			<td>{{$end['bairro']}}</td>
			<td>{{$end['cidade'] .'-'. $end['estado']}}</td>
			<td class="text-center">{{$end['cep']}}</td>
			<td class="text-center"><strong>{{($end['dt_mudanca']) ? 'NÃO' : 'SIM'}}</strong></td>
		</tr>
	@endforeach
</table>
<br/>
<table>
	<tr>
		<td class="strong text-center" colspan="4">CONTATOS</td>
	</tr>
	<tr>
		<th class="strong">Descrição</th>
		<th class="strong">Tipo</th>
		<th class="strong">Contato</th>
		<th class="strong">Ativo</th>
	</tr>
	@foreach($conts as $cont)
		<tr>
			<td>{{$cont['descricao']}}</td>
			<td>{{$tipo[$cont['tipo_cont']]}}</td>
			<td>{{$cont['contato']}}</td>
			<td class="text-center"><strong>{{($cont['ativo']) ? 'SIM' : 'NÃO' }}</strong></td>
		</tr>
	@endforeach
</table>

<footer class="footer">
	<span class="esquerda"><strong>Emissão: </strong> {{date('d/m/Y H:i:s')}} </span>
	<span class="direita"> - Software <strong>ELO</strong></span>
</footer>
</body>
</html>

