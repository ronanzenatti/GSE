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

				<div class="row row-100">
					<div class="col-sm-10">
						<h4 class="text-primary">Atividades Laborativas</h4>
					</div>
					<div class="col-sm-2">
						<a class="btn btn-success btn-block btn-sm" id="btnTrab" href="#" data-toggle="modal" data-target="#modalTrabalho">Novo Trabalho</a>
					</div>
				</div>
				<div class="row row-100">
					<div class="col-sm-12">
						<table id="tableTrab" class="table table-striped table-bordered table-hover" cellspacing="0">
							<thead>
								<tr>
									<th>Empresa</th>
									<th>Início</th>
									<th>Recisão</th>
									<th>Expediente</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>

				<div class="modal fade" id="modalTrabalho" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Trabalho</h4>
							</div>
							<div class="modal-body">
								<form id="formTrabalho" role="form" action="#" method="post">
									<input type="hidden" id="id_trabalho" name="id_trabalho">
									<input type="hidden" id="adolescente_id" name="adolescente_id" value="{{$ado['id_adolescente']}}">
									<div class="box-body">
										<div class="row">
											<div class="form-group">
												<div class="col-sm-6">
													<label for="empresa">Empresa:</label>
													<input type="text" class="form-control" name="empresa" id="empresa"
														required autofocus/>
												</div>
												<div class="col-sm-3">
													<label for="tipo">Tipo</label>
													<select name="tipo" class="form-control select2" id="tipo">
														<option> </option>
														<option value="F">Formal</option>
														<option value="I">Informal</option>
													</select>
												</div>
												<div class="col-sm-3">
													<label for="salario">Salário</label>
													<input type="text" class="form-control maskMoney text-center" id="salario" name="salario">
												</div>
											</div>
										</div>
										<div class=" row">
											<div class="form-group">
												<div class="col-sm-3">
													<label for="dt_inicio">Data de Início</label>
													<input type="text" class="form-control datepicker text-center mask_date" id="dt_inicio" name="dt_inicio"
														>
												</div>
												<div class="col-sm-3">
													<label for="dt_recisao">Data da Recisão</label>
													<input type="text" class="form-control datepicker text-center mask_date" id="dt_recisao" name="dt_recisao">
												</div>
												<div class="col-sm-3">
													<label for="horario_inicio">Horário da Entrada:</label>
													<input type="time" class="form-control text-center" id="horario_inicio" name="horario_inicio">
												</div>
												<div class="col-sm-3">
													<label for="horario_fim">Horário da Saída:</label>
													<input type="time" class="form-control text-center" id="horario_fim" name="horario_fim">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-sm-6">
													<label for="obs">Obs:</label>
													<input type="text" class="form-control" id="obs" name="obs">
												</div>
												<div class="col-sm-6">
													<label for="motivo_recisao">Motivo da Recisão:</label>
													<input type="text" class="form-control" id="motivo_recisao" name="motivo_recisao">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-success" id="salvarTrab">Salvar</button>
							</div>
						</div>
					</div>	
				</div>

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
			<!-- <div role="tabpanel" class="tab-pane " id="tab-2">
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
			</div> -->
		</div>
	</div>
@endsection

@section('js')
	<!-- CKEDITOR -->
	<script src="{{base_url()}}assets/bower_components/ckeditor/ckeditor.js"></script>
	<script src="{{base_url()}}assets/bower_components/ckeditor/lang/pt-br.js"></script>

	<script>
		$('body').addClass('sidebar-collapse');
		$('form').validate();

		$('#ass_juridico').val("{{$obj['ass_juridico']}}").trigger('change');
		$('#medida_aplicada').val("{{$obj['medida_aplicada']}}").trigger('change');

		CKEDITOR.replace('motivacao', {
			customConfig: 'config.js'
		});

		CKEDITOR.replace('reflexao', {
			customConfig: 'config.js'
		});
	</script>

	<script>
		$('#idProcesso').on("click", function () {
			$.ajax({
				url: '/pia/save',
				type: 'POST',
				data: {
					form: $('#formProcess').serialize(),
					idA: $('#adolescente_id').val(),
					idPia: $('#id_pia').val(),
					motivacao: CKEDITOR.instances.motivacao.getData(),
					reflexao: CKEDITOR.instances.reflexao.getData(),
				}, success: function (result) {
					swal({
						position: 'top-end',
						type: 'success',
						title: 'Ato infracional salvo com Sucesso!!!',
						showConfirmButton: true,
						timer: 1500
					});
				}
			});
		});
	</script>

	<!-- ESCOLARIZAÇÃO -->
	<script>
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
	<!-- ESCOLARIZAÇÃO -->

	<!-- ATIVIDADES LABORATIVAS -->
	<script> 
		$("#formTrabalho").validate();
		$('.mask_date').inputmask('99/99/9999');
		$('.datepicker').datepicker({
			language: 'pt-BR'
		});
		$(".maskMoney").maskMoney({
			showSymbol:true, symbol:"R$", decimal:",", thousands:"."
		});

		$("#salvarTrab").click(function (e) {
			if ($("#formTrabalho").valid()) {
				$.ajax({
					url: '/trabalho/save',
					type: 'POST',
					data: {
						form: $('#formTrabalho').serialize(),
						idA: $('#adolescente_id').val()
					},
					success: function (result) {
						$('#formTrabalho').each(function () {
							$(this).val(null);
						});
						$("#tableTrab").DataTable().ajax.reload();
						$("#modalTrabalho").modal('hide');
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Trabalho salvo com Sucesso!!!',
							showConfirmButton: true
						})	
					}
				});
			}
		});

		$('#tableTrab').dataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{base_url('trabalho/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					a.idA = $("#adolescente_id").val()
				}
			},
			pagingType: "full_numbers",
			columnDefs: [
				{targets: [4], orderable: false, class: "text-center"},
				{targets: 4, search: false},
			],
			language: {
				decimal: ",",
				thousands: "."
			},
			language: {
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ resultados por página",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": {
					"sFirst": "<i class='fa fa-angle-double-left'></i>",
					"sLast": "<i class='fa fa-angle-double-right'></i>",
					"sNext": "<i class='fa fa-angle-right'></i>",
					"sPrevious": "<i class='fa fa-angle-left'></i>"
				},
				"oAria": {
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				}
			},
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]]
		});
		
		function iuTrabalho(idT) {
			$.ajax({
				url: '/trabalho/alterar',
				type: 'POST',
				data: {
					idT: idT,
					idA: $("#adolescente_id").val()
				},
				success: function (result) {
					var obj = JSON.parse(result);
					$("#id_trabalho").val(obj.id_trabalho);
					$("#empresa").val(obj.empresa);
					$("#salario").val(obj.salario);
					$("#dt_inicio").val(obj.dt_inicio);
					$("#dt_recisao").val(obj.dt_recisao);
					$("#horario_inicio").val(obj.horario_inicio);
					$("#horario_fim").val(obj.horario_fim);
					$("#tipo").val(obj.tipo).trigger('change');
					$("#obs").val(obj.obs);
					$("#motivo_recisao").val(obj.motivo_recisao);
					
					$('#modalTrabalho').modal({
						show: true,
						keyboard: false,
					});
				}
			});
		}

		$('#modalTrabalho').on('hide.bs.modal', function (e) {
			if (e.target.id == "modalTrabalho") {
				$("#formTrabalho input[type=text], input[type=password], input[type=number], input[type=email], input[type=time], textarea").each(function () {
					$(this).val(null);
				});
				//Não está abrindo vazio na primeira opção
				$('#formTrabalho select option:first').prop('selected', true);
				$('#id_trabalho').val(null);
			}
		});

	// 		NOVO TRABALHO - CAMPO 'TIPO' DO MODAL DEVE INICIAR VAZIO
	// 		COLOCAR O DATATABLES NA MARGEM CORRETA
	// 		CAMPOS OBS E MOTIVO DA RECISÃO SERÃO IGUAIS MOTIVAÇÃO E REFLEXÃO DO PIA?

	</script>
	<!-- ATIVIDADES LABORATIVAS -->	
	
	<!-- ATIVIDADES CULTURAIS -->
	<script>
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
	<!-- ATIVIDADES CULTURAIS -->

@endsection
