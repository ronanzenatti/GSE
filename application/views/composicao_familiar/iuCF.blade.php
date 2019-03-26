@extends('template')
<?php
$cor = (isset($cf['idcf'])) ? "warning" : "success";
?>
@section('titulo', 'Composição Familiar')
@section('subtitulo',' - '.$end['descricao'] )
@section('box-color', 'box-' . $cor)
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header" style="padding-right: 10px; padding-left: 10px; margin: 10px 0 0 0;">
				<i class="fa fa-user"></i> <strong class="text-primary"> &nbsp;
					Adolescente: </strong>{{mb_strtoupper($ado['nome'], 'UTF-8')}}
				<span class="pull-right"><strong class="text-primary">RG:</strong> {{$doc['RG']}}</span>
				<br/>
				<i class="fa fa-home"></i>&nbsp;
				<strong class="text-primary">Endereço: </strong> {{$end['logradouro'] . ", " .$end['numero']}}
				- {{$end['bairro']}}, {{$end['cidade']}}-{{$end['estado']}}<br>
			</h2>
		</div>
	</div>
	<form role="form" id="formFamilia" method="post" action="#">
		<input name="idcf" id="idcf" type="hidden" value="{{(isset($cf['idcf']) ? $cf['idcf'] : null)}}"/>
		<input name="idendereco" id="idendereco" type="hidden"
			   value="{{(isset($end['idendereco']) ? $end['idendereco'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="col-sm-4">
					<label for="recebe_beneficio">Recebe Benefício:</label>
					<select class="form-control" id="recebe_beneficio" name="recebe_beneficio" required>
						<option value=""> - SELECIONE -</option>
						<option value="1">NÃO</option>
						<option value="2">SIM</option>
						<option value="3">Parou de Receber</option>
					</select>
				</div>
				<div class="col-sm-8">
					<label for="beneficios">Benefícios Recebidos:</label>
					<input type="text" class="form-control" disabled id="beneficios" name="beneficios"
						   value="{{(isset($cf['beneficios']) ? $cf['beneficios'] : null)}}">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="obs">Observações:</label>
					<textarea name="obs" id="obs"
							  class="form-control">{{(isset($cf['obs']) ? $cf['obs'] : null)}}</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("adolescente")}}" class="btn btn-default">Voltar</a>
				</div>
				<div class="col-sm-4 text-center">

				</div>
				<div class="col-sm-4 text-right">
					<button type="button" class="btn btn-{{$cor}}" id="salvaFamilia">Salvar</button>
				</div>
			</div>
		</div>
	</form>
	<hr style="margin-top: 0px; margin-bottom: 0px;"/>
	<div style="padding: 0 10px 0 10px;">
		<h3><strong>Residentes no endereço</strong>
			<button type="button" class="btn btn-sm btn-primary pull-right" id="addResidente"><i class="fa fa-plus"></i>
				Adicionar
			</button>
		</h3>
		<table id="tableResidentes" class="table table-striped table-bordered table-hover" cellspacing="0">
			<thead>
			<tr>
				<th>Nome</th>
				<th>Parestesco</th>
				<th>Idade</th>
				<th>Sexo</th>
				<th>Escolaridade</th>
				<th>Formação</th>
				<th>Ocupação</th>
				<th>Renda</th>
				<th>Telefones</th>
				<th>Ações</th>
			</tr>
			</thead>
		</table>
	</div>
@endsection

@section('js')
	<!-- CKEditor -->
	<script src="{{base_url()}}assets/bower_components/ckeditor/ckeditor.js"></script>
	<script src="{{base_url()}}assets/bower_components/ckeditor/lang/pt-br.js"></script>

	<script>
		@if(isset($cf['idcf']))
		$('#recebe_beneficio').val("{{$cf['recebe_beneficio']}}").trigger('change');
		if ($('#recebe_beneficio').val() > 1) {
			$('#beneficios').removeAttr('disabled');
			$('#beneficios').prop('required', true);
		} else {
			$('#beneficios').val(null);
			$('#beneficios').prop('disabled', true);
			$('#beneficios').removeAttr('required');
		}
		$("#formFamilia").valid();
		@endif

		$('input[type="checkbox"].minimal-blue, input[type="radio"].minimal-blue').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});
		$("form").validate();

		// CKEDITOR.replace('obs', {
		// 	customConfig: 'config.js'
		// });

		$('#recebe_beneficio').on('change', function (e) {
			if ($('#recebe_beneficio').val() > 1) {
				$('#beneficios').removeAttr('disabled');
				$('#beneficios').prop('required', true);
			} else {
				$('#beneficios').val(null);
				$('#beneficios').prop('disabled', true);
				$('#beneficios').removeAttr('required');
			}
			$("#formFamilia").valid();
		});

		$("#salvaFamilia").click(function (e) {
			salvaFamilia();
		});

		$("#addResidente").click(function (e) {
			if ($("#idcf").val() > 0) {
				$('#showIUResidente').modal({
					show: true,
					keyboard: false,
				});
			} else {
				swal({
					type: "error",
					animation: false,
					customClass: 'animated tada',
					title: 'Primeiro Salve a Familia!!!',
					showConfirmButton: true,
					//timer: 1500
				});
			}
		});

		function salvaFamilia() {
			if ($("#formFamilia").valid()) {
				$.ajax({
					url: '/ComposicaoFamiliar/save',
					type: 'POST',
					data: {
						form: $('#formFamilia').serialize(),
					},
					success: function (result) {
						$("#idcf").val(result);
						console.log(result);
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Familia salva com Sucesso!!!',
							showConfirmButton: true,
							//timer: 1500
						});
					}
				});
			}
		}

		function iuResidente(idR) {
			$.ajax({
				url: '/PessoaFamilia/alterar',
				type: 'POST',
				data: {
					idpf: idR,
				},
				success: function (result) {
					var obj = JSON.parse(result);
					$("#idpf").val(obj.idpf);
					$("#nome").val(obj.nome);
					$("#parentesco").val(obj.parentesco).trigger('change');
					$("#dt_nasc").val(obj.dt_nasc);
					$("#sexo").val(obj.sexo).trigger('change');
					$("#escolaridade").val(obj.escolaridade).trigger('change');
					$("#formacao_profissional").val(obj.formacao_profissional);
					$("#ocupacao").val(obj.ocupacao).trigger('change');
					$("#renda").val(obj.renda);
					$("#telefones").val(obj.telefones);
					$("#obsR").val(obj.obs);

					$('#showIUResidente').modal({
						show: true,
						keyboard: false,
					});
				}
			});
		}


		$("#tableResidentes").DataTable({
			paging: false,
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{base_url('PessoaFamilia/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					a.idcf = $("#idcf").val()
				}
			},
			columnDefs: [
				{targets: [9], orderable: false, search: false, class: "text-center"},
				{targets: [1, 2, 3, 4, 5, 6, 7, 8], searchable: false},
				{targets: [2, 3], class: "text-center"},
				{targets: [7], class: "text-right"},
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
	</script>

	{{---------------- MODAL  -------------------------------------------------------------------}}
	<div class="modal fade" id="showIUResidente" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><strong>Dados do Residente</strong></h4>
				</div>
				<div class="modal-body">
					<form id="formResidente" role="form" action="#" method="post">
						<input name="idpf" id="idpf" type="hidden"/>
						<div class="box-body">
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="nome">Nome:</label>
										<input type="text" class="form-control" id="nome" name="nome" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-4">
										<label for="parentesco">Parentesco:</label>
										<select name="parentesco" class="form-control select2" id="parentesco" required>
											<option value=""> - SELECIONE -</option>
											<option value="0">Própria</option>
											<option value="1">Mãe</option>
											<option value="2">Pai</option>
											<option value="3">Madastra</option>
											<option value="4">Padastro</option>
											<option value="5">Irmã(o)</option>
											<option value="6">Avó(Avo)</option>
											<option value="7">Tia(o)</option>
											<option value="8">Prima(o)</option>
											<option value="9">Outros</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="dt_nasc">Data de Nascimento:</label>
										<div class="input-group">
											<input type="text" class="form-control datepicker text-center mask_date"
												   id="dt_nasc" name="dt_nasc" minlength="10" required>
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<label for="sexo">Sexo:</label>
										<select class="form-control" id="sexo" name="sexo" required>
											<option value=""> - SELECIONE -</option>
											<option value="F">Feminino</option>
											<option value="M">Masculino</option>
											<option value="O">Outro</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-6">
										<label for="escolaridade">Escolaridade:</label>
										<select name="escolaridade" class="form-control select2" id="escolaridade">
											<option value=""> - SELECIONE -</option>
											<option value="0">Sem idade escolar</option>
											<option value="1">Creche</option>
											<option value="2">Pré-Escola</option>
											<option value="3">Ensino Fundamental</option>
											<option value="4">Ensino Médio</option>
											<option value="5">Ensino Fundamental EJA</option>
											<option value="6">Ensino Médio EJA</option>
											<option value="7">Alfabetização para Adultos</option>
											<option value="8">Superior/Aperfeiçoamento/Especialização/Doutorado</option>
											<option value="9">Nunca Frequentou mas lê e escreve</option>
											<option value="10">Não sabe ler e escrever</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formacao_profissional">Formação:</label>
										<input type="text" class="form-control" id="formacao_profissional"
											   name="formacao_profissional">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-8">
										<label for="ocupacao">Ocupação:</label>
										<select name="ocupacao" class="form-control select2" id="ocupacao">
											<option value=""> - SELECIONE -</option>
											<option value="0">Não Trabalha</option>
											<option value="1">Autônomo Formal</option>
											<option value="2">Rural</option>
											<option value="3">Empregado sem Carteira</option>
											<option value="4">Empregado com Carteira</option>
											<option value="5">Doméstica(o)</option>
											<option value="6">Trabalhador não remunerado</option>
											<option value="7">Militar ou Servidor Público</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="renda">Renda:</label>
										<input type="text" class="form-control text-right Money2" id="renda"
											   name="renda">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-sm-6">
										<label for="telefones">Telefones:</label>
										<input type="text" class="form-control" id="telefones" name="telefones">
									</div>
									<div class="col-sm-6">
										<label for="obsR">Observações:</label>
										<input type="text" class="form-control" id="obsR" name="obsR">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-success pull-right" id="salvaResidente">Salvar</button>
				</div>
				<script>
					$(".Money2").maskMoney({
						decimal: ",",
						thousands: ".",
						allowZero: true,
						allowNegative: true,
						precision: 2,
					});

					$('.mask_date').inputmask('99/99/9999');

					$.fn.select2.defaults.set("language", "pt-BR");
					$.fn.select2.defaults.set("width", "100%");
					$('select').select2();
					$('select').on('select2:select', function (e) {
						$(this).valid();
					});

					$('.datepicker').datepicker({
						language: 'pt-BR'
					});

					$('#showIUResidente').on('hide.bs.modal', function (e) {
						if (e.target.id != "dt_nasc") {
							$("#formResidente input[type=text], input[type=password], input[type=number], input[type=email], textarea").each(function () {
								$(this).val(null);
							});
							$('#formResidente select').each(function (e) {
								$(this).val('').trigger('change');
							});
						}
					});

					$("#salvaResidente").click(function (e) {
						if ($("#idcf").val() > 0) {
							salvaResidente();
						} else {
							salvaFamilia();
						}
					});

					function salvaResidente() {
						if ($("#formResidente").valid()) {
							$.ajax({
								url: '/PessoaFamilia/save',
								type: 'POST',
								data: {
									form: $('#formResidente').serialize(),
									idcf: $("#idcf").val()
								},
								success: function (result) {
									$('#formResidente').each(function () {
										$(this).val(null);
									});
									$("#tableResidentes").DataTable().ajax.reload();
									$("#showIUResidente").modal('hide');
								}
							});
						}
					}
				</script>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal Endereço -->

@endsection
