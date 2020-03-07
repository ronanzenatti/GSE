@extends($_SESSION['extends_module'])
<?php
$cor = "success";
?>
@section('titulo', 'Elaboração do P. I. A.:')
@section('box-color', 'box-' . $cor)
@section('moreInfo', " n° 001/2019")

<style>
	.nav-pills, .nav-stacked {
		padding-right: 0px !important;
		border-right: 1px solid #ccc;
		border-radius: 5px;
	}

	.nav-stacked > li.active > a {
		background: #ecf0f5 !important;
		color: #444 !important;
	}

	.nav > li > a {
		padding: 10px 5px 10px 5px !important;
	}

</style>
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header" style="padding-right: 10px; padding-left: 10px; margin: 0 0 5px 0;">
				<i class="fa fa-user"></i> <strong class="text-primary"> &nbsp;
					Adolescente: </strong>MONICA MEDEIROS DO NASCIMENTO
				<span class="pull-right"><strong class="text-primary">RG:</strong> 41.324.990-6</span>
			</h2>
		</div>
	</div>
	<div class="row">
		<ul class="nav nav-pills nav-stacked col-sm-3">
			<li role="presentation" class="active">
				<a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
					Dados do P. I. A. / Processo Judicial
				</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
					Situação Habitacional / Composição Familiar
				</a>
			</li>
			<li role="presentation" class="tabEnd">
				<a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
					Rede de Serviços
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
					Histórico Familiar
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">
					Histórico do Adolescente
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">
					Escolarização
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-7" aria-controls="tab-7" role="tab" data-toggle="tab">
					Profissionalização
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-8" aria-controls="tab-8" role="tab" data-toggle="tab">
					Atividades Laborativas
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-9" aria-controls="tab-9" role="tab" data-toggle="tab">
					Atividadades Culturais, Esportivas e Lazer
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-10" aria-controls="tab-10" role="tab" data-toggle="tab">
					Expectativas do Adolescente e Familia ou Responsável
				</a>
			</li>
			<li role="presentation" class="tabCont">
				<a href="#tab-11" aria-controls="tab-11" role="tab" data-toggle="tab">
					Planejamento dos Atendimentos
				</a>
			</li>
		</ul>

		<div class="tab-content col-sm-9">
			<div role="tabpanel" class="tab-pane active" id="tab-1">
				tab1
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-2">
				tab2
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-3">
				tab3
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-4">
				tab4
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-5">
				tab5
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-6">
				tab6
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-7">
				tab7
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-8">
				tab8
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-9">
				tab9
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-10">
				tab10
			</div>
			<div role="tabpanel" class="tab-pane " id="tab-11">
				tab11
			</div>
		</div>


	</div>
@endsection



@section('js')
	<script>
		$('body').addClass('sidebar-collapse')
	</script>
@endsection
