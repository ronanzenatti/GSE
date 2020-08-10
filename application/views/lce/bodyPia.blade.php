@extends('template')
<?php
$cor = "success";
?>
@section('titulo', 'Elaboração do P. I. A.:')
@section('box-color', 'box-' . $cor)
@section('moreInfo', 'nº ' . str_pad($obj['id_pia'], 4, "0", STR_PAD_LEFT))

<style>
	.nav-pills, .nav-stacked {
		padding-right: 0px !important;
	}

	.nav-stacked > li.active > a {
		background: #ecf0f5 !important;
		color: #444 !important;
	}

	.nav > li > a {
		padding: 10px 5px 10px 5px !important;
	}

	h4 {
		font-weight: bold !important;
	}

	.row-100 {
		margin-left: 0 !important;
		margin-right: 0 !important;
	}

	.tab-content {
		border-left: 1px solid #ccc;
	}

</style>
@section('content')
	<input type="hidden" id="id_pia" name="id_pia" value="{{$obj['id_pia']}}">
	<input type="hidden" id="adolescente_id" name="adolescente_id" value="{{$ado['id_adolescente']}}">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header" style="padding-right: 10px; padding-left: 10px; margin: 0 0 5px 0;">
				<i class="fa fa-user"></i> <strong class="text-primary"> &nbsp;
					Adolescente: </strong>{{$ado['nome']}}
				<a href="/adolescente/alterar/{{$ado['id_adolescente']}}" target="_blank"
				   style="margin-left: 20px;font-size: 65%;">
					<i class='fa fa-pencil' aria-hidden='true'> </i>
					Alterar dados
				</a>
				<span class="pull-right"><strong class="text-primary">RG:</strong> {{$doc['rg']}}</span>
			</h2>
		</div>
	</div>
	<div class="row">
		<ul class="nav nav-pills nav-stacked col-sm-3">
			<li role="presentation" class="active">
				<a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
					Dados do P. I. A. / Ato Infracional
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
			<div role="tabpanel" class="tab-pane" id="tab-9">
				<form id="formLCE" action="#">
					<input type="hidden" id="ld_lce" name="ld_lce" value="{{$lce['ld_lce']}}">
					<input type="hidden" id="adolescente_id" name="adolescente_id" value="{{$ado['id_adolescente']}}">
					<div class="row row-100">
						<div class="col-sm-10">
							<h4 class="text-primary">Lazer, Cultura e Esporte</h4>
						</div>
						<div class="col-sm-2">
							<button type="button" id="salvarLCE" class="btn btn-success btn-block btn-sm">
								<strong>SALVAR</strong></button>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="cultural_participa">Participa de quais atividades culturais?</label>
								<input type="text" class="form-control" id="cultural_participa" name="cultural_participa" maxlength="191"
									   value="{{(isset($lce['cultural_participa']) ? $lce['cultural_participa'] : null)}}">
							</div>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="cultural_interesse">Tem interesse em quais atividades culturais?</label>
								<input type="text" class="form-control" id="cultural_interesse" name="cultural_interesse" maxlength="191"
									   value="{{(isset($lce['cultural_interesse']) ? $lce['cultural_interesse'] : null)}}">
							</div>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="esportiva_participa">Participa de quais atividades esportivas?</label>
								<input type="text" class="form-control" id="esportiva_participa" name="esportiva_participa" maxlength="191"
									   value="{{(isset($lce['esportiva_participa']) ? $lce['esportiva_participa'] : null)}}">
							</div>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="esportiva_interesse">Tem interesse em quais atividades esportivas?</label>
								<input type="text" class="form-control" id="esportiva_interesse" name="esportiva_interesse" maxlength="191"
									   value="{{(isset($lce['esportiva_interesse']) ? $lce['esportiva_interesse'] : null)}}">
							</div>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="lazer">Quais atividades faz na hora de lazer?</label>
								<input type="text" class="form-control" id="lazer" name="lazer" maxlength="191"
									   value="{{(isset($lce['lazer']) ? $lce['lazer'] : null)}}">
							</div>
						</div>
					</div>	
				</form>
			</div>		
		</div>
	</div>


	

@endsection

@section('js')
	<script>
		$('body').addClass('sidebar-collapse');
		$('form').validate();
		$('.datepicker').datepicker({
			language: 'pt-BR'
		});

		$('#salvarLCE').on("click", function () {	
			if ($("#formLCE").valid()){
				$.ajax({
					url: '/LazerCulturaEsporte/save',
					type: 'POST',
					data: {
						form: $("#formLCE").serialize()
					},
					success: function (result) {
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Dados salvos com Sucesso!!!',
							showConfirmButton: true
						});
					}
				});
			}			
		});
	</script>
@endsection


<!-- 
	LAYOUT
	CONFIRMAR SE NÃO VAI SER MAIS DE UM REGISTRO POR ADOLESCENTE, POIS PELA TABELA DO BANCO SERIA
-->