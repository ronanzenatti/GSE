@extends('template')
<?php
$titulo = (isset($obj['id_adolescente'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_adolescente'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Adolescente')
@if(!isset($obj['id_adolescente']))
	@section('subtitulo', " - Salve o Adolescente para habilitar os demais dados.")
@endif
@section('box-color', 'box-' . $cor)

@section('content')
	<div class="box-body">
		<div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li role="presentation" class="active">
					<a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">Dados Pessoais</a>
				</li>
				<li role="presentation" class="">
					<a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">Documentos</a>
				</li>
				<li role="presentation" class="disabled tabEnd">
					<a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">Endereços</a>
				</li>
				<li role="presentation" class="disabled tabCont">
					<a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">Contatos</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tab-1">
					<form id="formAdolescente" role="form" action="{{base_url('adolescente/save')}}" method="post">
						<input name="id_adolescente" id="id_adolescente" type="hidden"
							   value="{{(isset($obj['id_adolescente']) ? $obj['id_adolescente'] : null)}}"/>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-8">
									<label for="nome">Nome:</label>
									<input type="text" class="form-control" id="nome" name="nome" required
										   value="{{(isset($obj['nome']) ? $obj['nome'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="dt_nasc">Data de Nascimento:</label>
									<div class="input-group">
										<input type="text" class="form-control datepicker text-center mask_date"
											   id="dt_nasc"
											   name="dt_nasc" minlength="10"
											   value="{{(isset($obj['dt_nasc']) ? $obj['dt_nasc'] : null)}}">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
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
						<div class=" row">
							<div class="col-sm-2">
								<label for="estado_civil">Estado Civil:</label>
								<select class="form-control" id="estado_civil" name="estado_civil">
									<option value="S" selected>Solteiro(a)</option>
									<option value="C">Casado(a)</option>
									<option value="V">Viúvo(a)</option>
									<option value="J">Separação Judicial</option>
									<option value="D">Divorciado(a)</option>
									<option value="U">União Estável</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label for="natural">Natural:</label>
								<input type="text" class="form-control" id="natural" name="natural"
									   value="{{(isset($obj['natural']) ? $obj['natural'] : null)}}">
							</div>
							<div class="col-sm-6">
								<label for="responsavel">Responsável pelo Adolescente:</label>
								<input type="text" class="form-control" id="responsavel" name="responsavel" required
									   value="{{(isset($obj['responsavel']) ? $obj['responsavel'] : null)}}">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<label for="obs">Observações:</label>
								<textarea name="obs" id="obs"
										  class="form-control">{{(isset($obj['obs']) ? $obj['obs'] : null)}}</textarea>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane " id="tab-2">
					<form role="form" id="formDocumento" action="{{base_url('documento/save')}}" method="post">
						<input name="id_documento" id="id_documento" type="hidden"
							   value="{{(isset($objD['id_documento']) ? $objD['id_documento'] : null)}}"/>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-3">
									<label for="cert_nasc">Nº da Certidão:</label>
									<input type="text" class="form-control" id="cert_nasc" name="cert_nasc"
										   value="{{(isset($objD['cert_nasc']) ? $objD['cert_nasc'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="cert_livro">Livro:</label>
									<input type="text" class="form-control" id="cert_livro" name="cert_livro"
										   value="{{(isset($objD['cert_livro']) ? $objD['cert_livro'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="cert_folhas">Folhas:</label>
									<input type="text" class="form-control" id="cert_folhas" name="cert_folhas"
										   value="{{(isset($objD['cert_folhas']) ? $objD['cert_folhas'] : null)}}">
								</div>
								<div class="col-sm-5">
									<label for="bairro_cartorio">Bairro do Cartório:</label>
									<input type="text" class="form-control" id="bairro_cartorio" name="bairro_cartorio"
										   value="{{(isset($objD['bairro_cartorio']) ? $objD['bairro_cartorio'] : null)}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-7">
									<label for="cert_cartorio">Cartório:</label>
									<input type="text" class="form-control" id="cert_cartorio" name="cert_cartorio"
										   value="{{(isset($objD['cert_cartorio']) ? $objD['cert_cartorio'] : null)}}">
								</div>
								<div class="col-sm-5">
									<label for="municipio_cartorio">Cidade do Cartório:</label>
									<input type="text" class="form-control" id="municipio_cartorio"
										   name="municipio_cartorio"
										   value="{{(isset($objD['municipio_cartorio']) ? $objD['municipio_cartorio'] : null)}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-3">
									<label for="cpf">cpf:</label>
									<input type="text" class="form-control mask_CPF" id="cpf" name="cpf"
										   value="{{(isset($objD['cpf']) ? $objD['cpf'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="rg">rg:</label>
									<input type="text" class="form-control" id="rg" name="rg" required
										   value="{{(isset($objD['rg']) ? $objD['rg'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="rg_emissao">Data de Emissão:</label>
									<input type="text" class="form-control mask_date datepicker" id="rg_emissao"
										   name="rg_emissao"
										   value="{{(isset($objD['rg_emissao']) ? $objD['rg_emissao'] : null)}}">
								</div>
								<div class="col-sm-offset-1 col-sm-2">
									<label for="ctps">CTPS:</label>
									<input type="text" class="form-control" id="ctps" name="ctps"
										   value="{{(isset($objD['ctps']) ? $objD['ctps'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="ctps_serie">Série:</label>
									<input type="text" class="form-control" id="ctps_serie" name="ctps_serie"
										   value="{{(isset($objD['ctps_serie']) ? $objD['ctps_serie'] : null)}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-3">
									<label for="titulo_eleitor">Titulo de Eleitor:</label>
									<input type="text" class="form-control" id="titulo_eleitor" name="titulo_eleitor"
										   value="{{(isset($objD['titulo_eleitor']) ? $objD['titulo_eleitor'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="te_secao">Seção:</label>
									<input type="text" class="form-control" id="te_secao" name="te_secao"
										   value="{{(isset($objD['te_secao']) ? $objD['te_secao'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="te_zona">Zona:</label>
									<input type="text" class="form-control" id="te_zona" name="te_zona"
										   value="{{(isset($objD['te_zona']) ? $objD['te_zona'] : null)}}">
								</div>
								<div class="col-sm-offset-1 col-sm-4">
									<label for="pis">PIS:</label>
									<input type="number" class="form-control" id="pis" name="pis"
										   value="{{(isset($objD['pis']) ? $objD['pis'] : null)}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-4">
									<label for="cartao_sus">Cartão SUS:</label>
									<input type="number" class="form-control" id="cartao_sus" name="cartao_sus"
										   value="{{(isset($objD['cartao_sus']) ? $objD['cartao_sus'] : null)}}">
								</div>
								<div class="col-sm-offset-4 col-sm-2">
									<label for="cam" data-toggle="tooltip" data-placement="top"
										   title="Certificado de Alistamento Militar">CAM:</label>
									<input type="text" class="form-control" id="cam" name="cam"
										   value="{{(isset($objD['cam']) ? $objD['cam'] : null)}}">
								</div>
								<div class="col-sm-2">
									<label for="cdi_cr" data-toggle="tooltip" data-placement="top"
										   title="Certificado de Dispensa de Incorporação / Certificado de Reservista">
										CDI / CR:
									</label>
									<input type="text" class="form-control" id="cdi_cr" name="cdi_cr"
										   value="{{(isset($objD['cdi_cr']) ? $objD['cdi_cr'] : null)}}">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane " id="tab-3">
					<table id="tableEnd" class="table table-striped table-bordered table-hover" cellspacing="0">
						<thead>
						<tr>
							<th>Descrição</th>
							<th>Logradouro</th>
							<th>Nº</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>Ativo</th>
							<th>Ações</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane " id="tab-4">
					<table id="tableCont" class="table table-striped table-bordered table-hover" cellspacing="0">
						<thead>
						<tr>
							<th>Descrição</th>
							<th>Tipo</th>
							<th>Contato</th>
							<th>Ativo</th>
							<th>Ações</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div style="margin-top: 8px;">
				<a id="ant" href="#" class="btn btn-primary">Anterior</a> &nbsp;&nbsp;&nbsp;
				<a id="prox" href="#" class="btn btn-primary">Próximo</a>&nbsp;&nbsp;&nbsp;
				<a class="btn btn-success hide" id="btnEnd" href="#" data-toggle="modal" data-target="#modalEndereco">
					Novo Endereço</a>
				<a class="btn btn-success hide" id="btnCont" href="#" data-toggle="modal" data-target="#modalContato">
					Novo Contato</a>
			</div>
		</div>
	</div>

	<!-- /.box-body -->

	<div class="box-footer">
		<div class="row">
			<div class="col-sm-4 text-left">
				<a href="{{base_url("adolescente")}}" class="btn btn-default">Voltar</a>
			</div>
			<div class="col-sm-4 text-center">
				<button type="reset" class="btn btn-default">Limpar</button>
			</div>
			<div class="col-sm-4 text-right">
				<button type="submit" id="save" class="btn btn-{{$cor}}">Salvar</button>
			</div>
		</div>

	</div>
@endsection



@section('js')
	<script>
		$("#formAdolescente").validate();
		$("#formDocumento").validate();
		$("form").valid();

		// numero de tabs geradas
		$numTabs = $(".nav-tabs li").length;

		$("#prox").click(function () {
			// aba que esta ativa no momento
			$currentTab = parseInt($(".nav-tabs li.active a").attr("href").replace(/\D/g, ''));

			// se for a ultima, nao deixa mudar
			// caso contrário, vai pra prox
			if ($currentTab < $numTabs) {
				var next = $currentTab + 1;
				$("a[href='#tab-" + next + "']").click();
			}
		});

		$("#ant").click(function () {
			// aba que esta ativa no momento
			$currentTab = parseInt($(".nav-tabs li.active a").attr("href").replace(/\D/g, ''));
			// se for a ultima, nao deixa mudar
			// caso contrário, vai pra prox
			if ($currentTab > 1) {
				var next = $currentTab - 1;
				$("a[href='#tab-" + next + "']").click();
			}
		});

		$('a[data-toggle="tab"]').on('click', function (e) {
			e.preventDefault();
			if ($(this).parent().hasClass("disabled")) {
				e.stopPropagation();
				return false;
			}
			$("form").each(function () {
				$(this).validate();
				if (!$(this).valid()) {
					e.stopPropagation();
					return false;
				}
			});
		});

		$('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
			$("form").each(function () {
				$(this).validate();
				if (!$(this).valid()) {
					e.stopPropagation();
					return false;
				}
			});
		});

		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			if ($(e.target).attr("href") == "#tab-3") {
				$("#btnEnd").removeClass("hide");
				$("#btnCont").addClass("hide");
			} else if ($(e.target).attr("href") == "#tab-4") {
				$("#btnCont").removeClass("hide");
				$("#btnEnd").addClass("hide");
			} else {
				$("#btnCont").addClass("hide");
				$("#btnEnd").addClass("hide");
			}
			$("form").each(function () {
				$(this).validate();
				if (!$(this).valid()) {
					e.stopPropagation();
					return false;
				}
			});
		});

		$('#sexo').change(function (e) {
			$("#formAdolescente").valid();
		});

		@if(isset($obj['id_adolescente']))
		$('#estado_civil').val("{{$obj['estado_civil']}}").trigger('change');
		$('#sexo').val("{{$obj['sexo']}}").trigger('change');
		$(".tabEnd").removeClass("disabled");
		$(".tabCont").removeClass("disabled");
		@endif

		$('#tableEnd').dataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{base_url('endereco/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					a.id_adolescente = $("#id_adolescente").val()
				}
			},
			pagingType: "full_numbers",
			columnDefs: [
				{targets: [6, 5], orderable: false, class: "text-center"},
				{targets: 5, search: false},
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

		$('#tableCont').dataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{base_url('contato/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					a.id_adolescente = $("#id_adolescente").val()
				}
			},
			pagingType: "full_numbers",
			columnDefs: [
				{targets: [3, 4], orderable: false, class: "text-center"},
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

		$("#save").click(function (e) {
			$("a[href='#tab-2']").click();
			if ($("a[href='#tab-2']").attr('aria-expanded') && $("#formDocumento").valid()) {
				$("a[href='#tab-1']").click();
				var salvoA = false;
				var salvoD = false;
				$.ajax({
					url: '/adolescente/save',
					type: 'POST',
					data: {
						form: $('#formAdolescente').serialize(),
						id_adolescente: $("#id_adolescente").val()
					},
					success: function (result) {
						$("#id_adolescente").val(result);
						if ($.isNumeric(parseInt(result))) {
							$.ajax({
								url: '/documento/save',
								type: 'POST',
								data: {
									form: $('#formDocumento').serialize(),
									id_adolescente: $("#id_adolescente").val(),
									id_documento: $("#id_documento").val()
								},
								success: function (result) {
									$("#id_documento").val(result);
									if ($.isNumeric(parseInt(result))) {
										salvoD = true;
										swal({
											position: 'top-end',
											type: 'success',
											title: 'Adolescente salvo com Sucesso!!!',
											showConfirmButton: true,
											//timer: 1500
										});
										$(".tabEnd").removeClass("disabled");
										$(".tabCont").removeClass("disabled");
									} else {
										salvoD = false;
									}
								},
								error: function (jqXHR, exception) {
									salvoD = false;
								}
							});
						} else {
							salvoA = false;
						}
					},
					error: function (jqXHR, exception) {
						salvoA = false;
					}
				});
			}
		});

		function iuEndereco(idE) {
			$.ajax({
				url: '/endereco/alterar',
				type: 'POST',
				data: {
					idE: idE,
					id_adolescente: $("#id_adolescente").val()
				},
				success: function (result) {
					var obj = JSON.parse(result);
					$("#id_endereco").val(obj.id_endereco);
					$("#dt_mudanca").val(obj.dt_mudanca);
					$("#descricaoE").val(obj.descricao);
					$("#cep").val(obj.cep);
					$("#logradouro").val(obj.logradouro);
					$("#numero").val(obj.numero);
					$("#bairro").val(obj.bairro);
					$("#estado").val(obj.estado);
					$("#cidade").val(obj.cidade);
					$("#complemento").val(obj.complemento);
					$("#referencia").val(obj.referencia);
					$("#motivo").val(obj.motivo);

					if (obj.dt_mudanca) {
						$("#ativoE").removeAttr("checked");

					}

					$('#modalEndereco').modal({
						show: true,
						keyboard: false,
					});
				}
			});
		}

		function iuContato(idC) {
			$.ajax({
				url: '/contato/alterar',
				type: 'POST',
				data: {
					idC: idC,
					id_adolescente: $("#id_adolescente").val()
				},
				success: function (result) {
					var obj = JSON.parse(result);
					$("#id_contato").val(obj.id_contato);
					$("#descricaoC").val(obj.descricao);
					$("#contato").val(obj.contato);
					$("#tipo_cont").val(obj.tipo_cont);

					if (obj.ativo == 0) {
						$("#ativoE").removeAttr("checked");
					}

					$('#modalContato').modal({
						show: true,
						keyboard: false,
					});
				}
			});
		}
	</script>

	<div class="modal fade" id="modalEndereco" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Endereço</h4>
				</div>
				<div class="modal-body">
					<form id="formEndereco" role="form" action="#" method="post">
						<input name="id_endereco" id="id_endereco" type="hidden"/>
						<div class="box-body">
							<div class="row">
								<div class="form-group">
									<div class="col-sm-10">
										<label for="descricaoE">Descrição:</label>
										<input type="text" class="form-control" name="descricaoE" id="descricaoE"
											   autofocus maxlength="100" required
											   placeholder='Uma identificação do Endereço Ex: "Casa da Mãe"'/>

									</div>
									<div class="col-sm-2" style="padding-top: 25px;">
										<label>
											<input type="checkbox" class="minimal-red" checked id="ativoE"
												   name="ativoE">
											Ativo ?
										</label>
									</div>
								</div>
							</div>
							<div class=" row">
								<div class="form-group">
									<div class="col-sm-2">
										<label for="cep">CEP</label>
										<input type="text" class="form-control mask_CEP" id="cep" name="cep"
											   maxlength="10" minlength="10">
									</div>
									<div class="col-sm-8">
										<label for="logradouro">Logradouro</label>
										<input type="text" class="form-control" id="logradouro" name="logradouro"
											   required>
									</div>
									<div class="col-sm-2">
										<label for="numero">Numero</label>
										<input type="text" class="form-control" id="numero" name="numero">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-5">
										<label for="bairro">Bairro</label>
										<input type="text" class="form-control" id="bairro" name="bairro">
									</div>
									<div class="col-sm-2">
										<label for="estado">Estado</label>
										<select name="estado" class="form-control select2" id="estado">
											<option value="SP">SP - São Paulo</option>
											<option value="AC">AC - Acre</option>
											<option value="AL">AL - Alagoas</option>
											<option value="AP">AP - Amapá</option>
											<option value="AM">AM - Amazonas</option>
											<option value="BA">BA - Bahia</option>
											<option value="CE">CE - Ceará</option>
											<option value="DF">DF - Distrito Federal</option>
											<option value="ES">ES - Espírito Santo</option>
											<option value="GO">GO - Goiás</option>
											<option value="MA">MA - Maranhão</option>
											<option value="MT">MT - Mato Grosso</option>
											<option value="MS">MS - Mato Grosso do Sul</option>
											<option value="MG">MG - Minas Gerais</option>
											<option value="PA">PA - Pará</option>
											<option value="PB">PB - Paraíba</option>
											<option value="PR">PR - Paraná</option>
											<option value="PE">PE - Pernambuco</option>
											<option value="PI">PI - Piauí</option>
											<option value="RJ">RJ - Rio de Janeiro</option>
											<option value="RN">RN - Rio Grande do Norte</option>
											<option value="RS">RS - Rio Grande do Sul</option>
											<option value="RO">RO - Rondônia</option>
											<option value="RR">RR - Roraima</option>
											<option value="SC">SC - Santa Catarina</option>
											<option value="SE">SE - Sergipe</option>
											<option value="TO">TO - Tocantins</option>
										</select>
									</div>
									<div class="col-sm-5">
										<label for="cidade">Cidade</label>
										<input type="text" class="form-control" id="cidade" name="cidade">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-6">
										<label for="complemento">Complemento:</label>
										<input type="text" class="form-control" id="complemento" name="complemento">
									</div>
									<div class="col-sm-6">
										<label for="referencia">Referência:</label>
										<input type="text" class="form-control" id="referencia" name="referencia">
									</div>
								</div>
							</div>
							<div class="row" id="mudanca_div">
								<div class="form-group">
									<div class="col-sm-2">
										<label for="dt_mudanca" class="text-danger">Data da Mudança:</label>
										<input type="text" class="form-control mask_date text-center datepicker"
											   maxlength="10" name="dt_mudanca" id="dt_mudanca">
									</div>
									<div class="col-sm-10">
										<label for="motivo" class="text-danger">Motivo:</label>
										<textarea class="form-control" id="motivo" name="motivo"
												  style="resize: vertical"></textarea>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-success" id="salvarEnd">Salvar</button>
				</div>

				<div class="modal fade" id="modalCep">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<p id="loadingTexto">Aguarde</p>
							</div>
							<div class="modal-body" id="modalBody" style="text-align: center">
								<img id="loadingImagem" src="/assets/img/loading.gif">
							</div>
							<div class="modal-footer">
								<p id="loadingTexto">Buscando endereço...</p>
							</div>
						</div>
					</div>
				</div>

				<script>
					$("#formEndereco").validate();
					$('.mask_CEP').inputmask('99.999-999');
					$('.mask_date').inputmask('99/99/9999');
					$('.datepicker').datepicker({
						language: 'pt-BR'
					});

					$('#modalEndereco').on('show.bs.modal', function (e) {
						var a = $('#dt_mudanca').val();
						if (a != "") {
							$('#ativoE').iCheck('uncheck');
							$('input').iCheck('update');
							$("#mudanca_div").show();
						} else {
							$('#ativoE').iCheck('check');
							$('input').iCheck('update');
							$("#mudanca_div").hide();
						}
					});

					$('#modalEndereco').on('hide.bs.modal', function (e) {
						if (e.target.id == "modalEndereco") {
							$("#formEndereco input[type=text], input[type=password], input[type=number], input[type=email], textarea").each(function () {
								$(this).val(null);
							});
							$('#formEndereco').find('input[type=checkbox]').prop('checked', true);
							$('#formEndereco select option:first').prop('selected', true);
							$('#id_endereco').val(null);
						}
					});

					$("#ativoE").on('ifChecked', function () {
						$("#mudanca_div").hide();
					});

					$("#ativoE").on('ifUnchecked', function () {
						// não: não mostro o campo select
						$("#mudanca_div").show();
					});

					if ($("#ativoE").is(':checked')) {
						$("#mudanca_div").hide();
					}

					$("#salvarEnd").click(function (e) {
						if ($("#formEndereco").valid()) {
							$.ajax({
								url: '/endereco/save',
								type: 'POST',
								data: {
									form: $('#formEndereco').serialize(),
									id_adolescente: $("#id_adolescente").val()
								},
								success: function (result) {
									$('#formEndereco').each(function () {
										$(this).val(null);
									});
									$("#tableEnd").DataTable().ajax.reload();
									$("#modalEndereco").modal('hide');
								}
							});
						}
					});

					$('#cep').focusout(function () {
						var cep = $('#cep').val().replace('.', '').replace('-', '');

						$.ajax({
							url: `https://viacep.com.br/ws/${cep}/json/`,
							type: 'GET',
							dataType: 'json',
							beforeSend: function () {
								$("#modalCep").modal('show');
							},
							success: function (dados) {
								$('#logradouro').val(dados.logradouro);
								$('#bairro').val(dados.bairro);
								$('#cidade').val(dados.localidade);
								$('#estado').val(dados.uf).trigger('change');
							},
							complete: function () {
								$("#modalCep").modal('hide')
							}
						});
					});

				</script>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal Endereço -->

	<div class="modal fade" id="modalContato" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contato</h4>
				</div>
				<div class="modal-body">
					<form id="formContato" role="form" action="#" method="post">
						<input name="id_contato" id="id_contato" type="hidden"/>
						<div class="box-body">
							<div class="row">
								<div class="form-group">
									<div class="col-sm-10">
										<label for="descricaoC">Descrição:</label>
										<input type="text" class="form-control" name="descricaoC" id="descricaoC"
											   autofocus maxlength="100"
											   placeholder='Uma identificação do Contato Ex: "Telefone da Mãe"'/>

									</div>
									<div class="col-sm-2" style="padding-top: 25px;">
										<label>
											<input type="checkbox" class="minimal-red" checked id="ativoC"
												   name="ativoC">
											Ativo ?
										</label>
									</div>
								</div>
							</div>
							<div class=" row">
								<div class="form-group">
									<div class="col-sm-3">
										<label for="tipo_cont">Tipo do Contato:</label>
										<select name="tipo_cont" class="form-control" id="tipo_cont">
											<option value="C">Celular</option>
											<option value="F">Fixo</option>
											<option value="E">E-mail</option>
											<option value="O">Outros</option>
										</select>
									</div>
									<div class="col-sm-9">
										<label for="contato">Contato:</label>
										<input type="text" class="form-control" id="contato" name="contato" required>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-success" id="salvarCont">Salvar</button>
				</div>
				<script>
					$("#formContato").validate();
					//Red color scheme for iCheck
					$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
						checkboxClass: 'icheckbox_minimal-red',
						radioClass: 'iradio_minimal-red'
					});

					$('#modalContato').on('hide.bs.modal', function (e) {
						$("#formContato input[type=text], input[type=password], input[type=number], input[type=email], textarea").each(function () {
							$(this).val(null);
						});
						$('#formContato').find('input[type=checkbox]').prop('checked', true);
						$('#formContato select option:first').prop('selected', true);
						$('#id_contato').val(null);
					});

					$("#tipo_cont").change(function () {
						$("#contato").focus();
						$("#descricao").focus();
						$("#contato").focus();
					});

					$("#contato").focusin(function (elemt) {
						if ($("#tipo_cont").val() == 'F' || $("#tipo_cont").val() == 'C') {
							$('#contato').attr('type', "text");
							$('#contato').inputmask("(99) 99999-9999").on('focusout', function (event) {
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
						} else if ($("#tipo_cont").val() == 'E') {
							$('#contato').inputmask('remove');
							$('#contato').attr('maxlength', 200);
							$('#contato').attr('type', "email");
							$('#contato').removeAttr('placeholder');
							if ($('#contato').val().indexOf('@') < 0) {
								$('#contato').val(null);
							}
						} else {
							$('#contato').inputmask('remove');
							$('#contato').attr('maxlength', 200);
							$('#contato').attr('type', "text");
							$('#contato').removeAttr('placeholder');
							$('#contato').val(null);
						}
					}).trigger('focusout');

					$("#salvarCont").click(function (e) {
						if ($("#formContato").valid()) {
							$.ajax({
								url: '/contato/save',
								type: 'POST',
								data: {
									form: $('#formContato').serialize(),
									id_adolescente: $("#id_adolescente").val()
								},
								success: function (result) {
									$('#formContato').each(function () {
										$(this).val(null);
									});
									$("#tableCont").DataTable().ajax.reload();
									$("#modalContato").modal('hide');
								}
							});
						}
					});
				</script>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal Contatos -->
@endsection

