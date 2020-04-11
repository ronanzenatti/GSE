@extends('template')
<?php
$cor = "success";
?>
@section('titulo', 'Elaboração do P.I.A.')
@section('box-color', 'box-' . $cor)

<style>
	.select2-results__option {
		padding: 5px !important;
		border-bottom: 1px solid #ccc;
	}

	.strong {
		font-size: 16px;
		font-weight: bold;
		padding: 5px 5px 5px 5px !important;
	}

	.nome {
		font-weight: bold;
		font-size: 16px;
	}

	.responsavel {
		font-size: 16px;
	}

	.dados {
		padding: 5px 5px 5px 5px !important;
	}

	.line {
		margin-top: 10px;
		margin-bottom: 10px;
	}


</style>

@section('content')
	<form id="formPia" role="form" action="{{base_url('pia/save')}}" method="post" autocomplete="off">
		<div class="box-body">
			<h3 class="form-title">Buscar Adolescente</h3>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-9">
						<label for="idadolescente">Adolescente:</label>
						<div class="input-group input-group-sm">
							<select class="form-control" id="idadolescente"
									name="idadolescente" required>
							</select>
							<span class="input-group-btn">
								<a href="{{base_url("adolescente/inserir")}}" target="_blank"
								   class="btn btn-success btn-flat btn-select2">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>
							</span>
						</div>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>&nbsp;</label>
						<div class="input-group" style="width: 100%;">
							<button type="button" class="btn btn-success btn-block" onclick="toggleAdolescente(this)">
								Selecionar
							</button>
						</div>
					</div>
				</div>
			</div>
			<br/>
			<div id="dadosCadastro" class="hide">
				<h3 class="form-title">Dados do Adolescente
					<small style="margin-left: 20px">
						<a href="#" target="_blank" id="editAdolescente">
							<i class='fa fa-pencil' aria-hidden='true'> </i>
							Alterar dados
						</a>

						<buttton type="button" class="text-green" onclick="buscaAdolescente()"
								 style="float: right; margin-top: 7px; margin-right: 20px; cursor: pointer;">
							<i class='fa fa-refresh' aria-hidden='true'> </i>
							Recarregar dados
						</buttton>
					</small>
				</h3>
				<div class="row line">
					<div class="col-sm-6 ">
						<span class="strong">NOME:</span>
						<span class="nome text-primary dados"></span>
					</div>
					<div class="col-sm-6 ">
						<span class="strong">RESPONSÁVEL:</span>
						<span class="responsavel dados"></span>
					</div>

				</div>
				<div class="row line">
					<div class="col-sm-2">
						<span class="strong">IDADE:</span>
						<span class="idade dados"></span>
					</div>
					<div class="col-sm-3 ">
						<span class="strong">RG:</span>
						<span class="rg dados"></span>
					</div>
					<div class="col-sm-3 ">
						<span class="strong">CPF:</span>
						<span class="cpf dados"></span>
					</div>
					<div class="col-sm-4 ">
						<span class="strong">NASCIMENTO:</span>
						<span class="nascimento dados"></span>
					</div>
				</div>
				<h3 class="form-title">Dados do P.I.A.</h3>
				<div class="row">
					<div class="col-sm-4">
						<label for="dt_nasc">Data de Recepção:</label>
						<div class="input-group">
							<input type="text" class="form-control datepicker text-center mask_date"
								   id="data_recepcao" autofocus required
								   name="data_recepcao" minlength="10" value="{{date('d/m/Y')}}"
								   onblur="copiaData(this)"/>
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
					<div class="col-sm-offset-4 col-sm-4">
						<label for="data_inicio">Data de Início da MSE:</label>
						<div class="input-group">
							<input type="text" class="form-control datepicker text-center mask_date"
								   id="data_inicio"
								   name="data_inicio" minlength="10"/>
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("pia")}}" class="btn btn-default">Voltar</a>
				</div>
				<div class="col-sm-4 text-center">
					<button type="reset" class="btn btn-default">Limpar</button>
				</div>
				<div class="col-sm-4 text-right">
					<button id="salvar" type="button" class="btn btn-{{$cor}}">Salvar</button>
				</div>
			</div>

		</div>
	</form>
@endsection

@section('js')
	<script>
		var sel;
		const idAdolescente = $('#idadolescente');

		function copiaData(e) {
			$('#data_inicio').datepicker('setDate', e.value);
		}

		function toggleAdolescente(btn) {
			sel = idAdolescente.select2('data');
			if (sel.length > 0) {
				if ($(btn).hasClass('btn-success')) {
					preencheDados();
					$(btn).removeClass('btn-success');
					$(btn).addClass('btn-danger');
					$(btn).html('Remover');
					$('#data_recepcao').focus();
				} else {
					removeDados();
					$(btn).removeClass('btn-danger');
					$(btn).addClass('btn-success');
					$(btn).html('Selecionar');
				}
			} else {
				alert('escolhe alguem porra');
			}
		}

		function preencheDados() {
			idAdolescente.prop('disabled', true);
			$('.nome').html(sel[0].nome);
			$('.responsavel').html(sel[0].responsavel);
			$('.idade').html(sel[0].idade);
			$('.rg').html(sel[0].rg);
			$('.cpf').html(sel[0].cpf);
			$('.nascimento').html(sel[0].dt_nasc);
			$('#dadosCadastro').removeClass('hide');
			$('#editAdolescente').attr('href', '/adolescente/alterar/' + idAdolescente.val());
		}

		function removeDados() {
			idAdolescente.val(null).trigger("change");
			idAdolescente.prop('disabled', false);
			$('.nome').html(null);
			$('.responsavel').html(null);
			$('.idade').html(null);
			$('.rg').html(null);
			$('.cpf').html(null);
			$('.nascimento').html(null);
			$('#dadosCadastro').addClass('hide');
			select2Adolescente();
		}

		$("#salvar").click(function (e) {
			idAdolescente.prop('disabled', false);
			$('#formPia').submit();
		});

		function select2Adolescente() {
			idAdolescente.select2({
				ajax: {
					url: '/adolescente/select2Json',
					dataType: 'json',
					method: "post",
				},
				minimumInputLength: 3,
				templateResult: formatSelect,
				templateSelection: formatSelect,
				cache: true,
				placeholder: " - SELECIONE UM ADOLESCENTE -"
			});
		}

		select2Adolescente();

		function formatSelect(obj) {
			if (!obj.id) {
				return obj.text;
			}
			var $obj = $(
					'<span>' + obj.nome + ' - <strong>RG: </strong>' + obj.rg + ' - <strong>CPF: </strong>' + obj.cpf + '</span>'
			);
			return $obj;
		}

		function buscaAdolescente() {
			$.ajax({
				url: '/adolescente/getByIdJson',
				type: 'POST',
				data: {
					id: idAdolescente.val()
				},
				success: function (result) {
					result = JSON.parse(result);

					idAdolescente.select2({
						data: result,
						templateResult: formatSelect,
						templateSelection: formatSelect,
					}).trigger('change');
					sel = idAdolescente.select2('data');
					preencheDados();
				}
			});
		}

		$("form").validate();
		$('.datepicker').datepicker({
			language: 'pt-BR'
		});
	</script>
@endsection
