@extends($_SESSION['extends_module'])
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
			<div role="tabpanel" class="tab-pane active" id="tab-1">
				<form id="formProcess">
					<div class="row row-100">
						<div class="col-sm-10">
							<h4 class="text-primary">Dados do P.I.A. / Ato Infracional</h4>
						</div>
						<div class="col-sm-2">
							<button type="button" id="idProcesso" class="btn btn-success btn-block btn-sm">
								<strong>SALVAR</strong></button>
						</div>
					</div> <!-- Titulo -->
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="dt_nasc">Data de Recepção:</label>
								<div class="input-group">
									<input type="text" class="form-control datepicker text-center mask_date"
										   id="data_recepcao" autofocus required
										   name="data_recepcao" minlength="10"
										   value="{{(isset($obj['data_recepcao']) ? $obj['data_recepcao'] : null)}}"/>

									<div class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="data_inicio">Data de Início da MSE:</label>
								<div class="input-group">
									<input type="text" class="form-control datepicker text-center mask_date"
										   id="data_inicio"
										   name="data_inicio" minlength="10"
										   value="{{(isset($obj['data_inicio']) ? $obj['data_inicio'] : null)}}"/>
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="ass_juridico">Assessoramento jurídico:</label>
								<select class="form-control" id="ass_juridico" name="ass_juridico" required>
									<option value="1">Defensor Público</option>
									<option value="2">Defensor Particular</option>
								</select>
							</div>
						</div>
					</div> <!-- Datas e defensor -->
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-5">
								<label for="numero_processo">Numero do Processo:</label>
								<input type="text" class="form-control" id="numero_processo" name="numero_processo"
									   value="{{(isset($obj['numero_processo']) ? $obj['numero_processo'] : null)}}">
							</div>
							<div class="col-sm-7">
								<label for="ato_infracional">Ato Infracional:</label>
								<input type="text" class="form-control" id="ato_infracional" name="ato_infracional"
									   maxlength="45"
									   value="{{(isset($obj['ato_infracional']) ? $obj['ato_infracional'] : null)}}">
							</div>
						</div>
					</div> <!-- processo e ato -->
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-3">
								<label for="medida_aplicada">Medida aplicada:</label>
								<select class="form-control" id="medida_aplicada" name="medida_aplicada" required>
									<option value=""> - SELECIONE -</option>
									<option value="1">L.A.</option>
									<option value="2">P.S.C.</option>
									<option value="2">L.A. e P.S.C.</option>
								</select>
							</div>
							<div class="col-sm-4 text-center" style="padding-top: 30px">
								<i class="fa fa-question-circle-o text-primary" style="cursor: pointer"
								   data-toggle="tooltip" title="Somente processos cadastrados no sistema GSE."></i>
								<strong>Outros processos: </strong>
								<button type='button' onclick='showProcessos({{$obj["adolescente_id"]}})'
										class='btn btn-default btn-sm'><span
											class='badge'>{{$obj["qtdeProcessos"]}}</span>
								</button>
							</div>
							<div class="col-sm-5">
								<label for="outros_processos">
									<i class="fa fa-question-circle-o text-primary"
									   style="cursor: pointer"
									   data-toggle="tooltip"
									   title="Incluir somente processos que não constem no sistema."></i>
									Outros Processos:</label>
								<input type="text" class="form-control" id="outros_processos" name="outros_processos"
									   value="{{(isset($obj['outros_processos']) ? $obj['outros_processos'] : null)}}">
							</div>
						</div>
					</div> <!-- medida e outros processos -->
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="motivacao">O que o motivou a praticar o ato infracional?</label>
								<textarea name="motivacao" id="motivacao"
										  class="form-control">{{(isset($obj['motivacao']) ? $obj['motivacao'] : null)}}</textarea>
							</div>
							<div class="col-sm-12">
								<label for="reflexao">Qual a sua reflexão frente as consequência do ato
									infracional?</label>
								<textarea name="reflexao" id="reflexao"
										  class="form-control">{{(isset($obj['reflexao']) ? $obj['reflexao'] : null)}}</textarea>
							</div>
						</div>
					</div> <!-- motivacao e reflexao -->
				</form>
			</div>
			
			<div role="tabpanel" class="tab-pane " id="tab-6">
				<form id="formEscol" action="#">
					<input type="hidden" id="id_situacao_escolar" name="id_situacao_escolar" value="{{$se['id_situacao_escolar']}}">
					<input type="hidden" id="adolescente_id" name="adolescente_id" value="{{$ado['id_adolescente']}}">
					<div class="row row-100">
						<div class="col-sm-10">
							<h4 class="text-primary">Escolarização</h4>
						</div>
						<div class="col-sm-2">
							<button type="button" id="salvarEscol" class="btn btn-success btn-block btn-sm">
								<strong>SALVAR</strong></button>
						</div>
					</div>
					<div class="row row-100">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="grau_escolaridade">Grau de Escolaridade:</label>
								<input type="text" class="form-control" id="grau_escolaridade" name="grau_escolaridade"
									   value="{{(isset($se['grau_escolaridade']) ? $se['grau_escolaridade'] : null)}}">
								<!-- <select class="form-control" id="grau_escolaridade" name="grau_escolaridade">
									<option value=""> - SELECIONE - </option>
									<option value="1"></option>
								</select> -->
							</div>
							<div class="col-sm-5">
								<label for="ultima_escola">Última Escola:</label>
								<input type="text" class="form-control" id="ultima_escola" name="ultima_escola"
									   value="{{(isset($se['ultima_escola']) ? $se['ultima_escola'] : null)}}">
							</div>
							<div class="col-sm-3">
								<label for="atestado_matricula">Atestado de Matrícula:</label>
								<div class="input-group">
									<input type="text" class="form-control datepicker text-center mask_date"
										id="atestado_matricula"
										name="atestado_matricula" minlength="10" value="{{(isset($se['atestado_matricula']) ? $se['atestado_matricula'] : null)}}">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="row row-100">
						<div class="form-group"></div>
							<div class="col-sm-4" style="padding-top: 25px;">
								<label for="estudando">
									<input type="checkbox" class="minimal-red" id="ativoE" name="ativoE"
									value="{{(isset($se['estudando']) ? '1' : '0')}}">Estudando
								</label>
							</div>
							<div class="col-sm-4">
								<label for="ano_abandono">Ano de Abandono:</label>
								<input type="text" class="form-control" id="ano_abandono" name="ano_abandono"
									   value="{{(isset($se['ano_abandono']) ? $se['ano_abandono'] : null)}}">
							</div>
							<div class="col-sm-4" style="padding-top: 25px;">
								<label for="retornar">
									<input type="checkbox" class="minimal-red" id="ativoR" name="ativoR">Pretende Retornar?
								</label>
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

		$('#ano_abandono').datepicker({
			viewMode: 'years',
			minViewMode: 'years',
			format: 'yyyy',
			orientation: 'bottom'
		});
		
		// Se for usar select no Grau de Escolaridade
		// @if(isset($obj['id_adolescente']))
		// $('#grau_escolaridade').val("{{$obj['grau_escolaridade']}}").trigger('change');
		// @endif

		$('#salvarEscol').on("click", function () {
			if ($("#formEscol").valid()){
				$.ajax({
					url: '/SituacaoEscolar/save',
					type: 'POST',
					data: {
						form: $("#formEscol").serialize()
					},
					success: function (result) {
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Escolarização salva com Sucesso!!!',
							showConfirmButton: true
						});
					}
				});
			}			
		});
	</script>
@endsection

<!-- 
		CAMPOS BINÁRIOS SALVAM CORRETAMENTE, MAS NÃO RETORNAR MARCADOS SE NO BANCO FOR 1
		SE 'ESTUDANDO' ESTIVER MARCADO, 'ANO DE ABANDONO' E 'PRETENDE RETORNAR?' DEVE FICAR DESABILITADO E VICE-VERSA
		QUANDO 'ANO DE ABANDONO' NÃO É PREENCHIDO, ESTÁ SALVANDO 0000
		MANIPULAR A DATA DO 'ATESTADO DE MATRICULA' NO RETORNO DO BANCO



