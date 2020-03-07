@extends($_SESSION['extends_module'])
<?php
$cor = "success";
?>
@section('titulo', 'Novo P.I.A.')
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

	.dados {
		padding: 5px 5px 5px 5px !important;
	}

	.line {
		margin-top: 10px;
		margin-bottom: 10px;
	}


</style>

@section('content')
	<form role="form" action="{{base_url('pia/save')}}" method="post" autocomplete="off">
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
				<h3 class="form-title">Dados do Adolescente</h3>
				<div class="row line">
					<div class="col-sm-8 ">
						<span class="strong">NOME:</span>
						<span class="nome text-primary dados"></span>
					</div>
					<div class="col-sm-4">
						<span class="strong">IDADE:</span>
						<span class="idade dados"></span>
					</div>
				</div>
				<div class="row line">
					<div class="col-sm-4 ">
						<span class="strong">RG:</span>
						<span class="rg dados"></span>
					</div>
					<div class="col-sm-4 ">
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
					<button type="submit" class="btn btn-{{$cor}}">Salvar</button>
				</div>
			</div>

		</div>
	</form>
@endsection

@section('js')
	<script>
		function toggleAdolescente(btn) {
			var sel = $('#idadolescente').select2('data');
			if (sel.length > 0) {
				if ($(btn).hasClass('btn-success')) {
					$(btn).removeClass('btn-success');
					$(btn).addClass('btn-danger');
					$(btn).html('Remover');
					$('#idadolescente').prop('disabled', true);
					$('.nome').html(sel[0].nome);
					$('.idade').html(sel[0].idade);
					$('.rg').html(sel[0].RG);
					$('.cpf').html(sel[0].CPF);
					$('.nascimento').html(sel[0].dt_nasc);
					$('#dadosCadastro').removeClass('hide');
				} else {
					$('#idadolescente').val(null).trigger("change");
					$(btn).removeClass('btn-danger');
					$(btn).addClass('btn-success');
					$(btn).html('Selecionar');
					$('#idadolescente').prop('disabled', false);
					$('.nome').html(null);
					$('.idade').html(null);
					$('.rg').html(null);
					$('.cpf').html(null);
					$('.nascimento').html(null);
					$('#dadosCadastro').addClass('hide');
				}

			}

		}

		$("#idadolescente").select2({
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

		function formatSelect(obj) {
			if (!obj.id) {
				return obj.text;
			}
			var $obj = $(
				'<span>' + obj.nome + ' - <strong>RG: </strong>' + obj.RG + ' - <strong>CPF: </strong>' + obj.CPF + '</span>'
			);
			return $obj;
		}

		$("form").validate();
		$('.datepicker').datepicker({
			language: 'pt-BR'
		});

		@if(isset($obj['idfuncionario']))
		$('#estado').val("{{$obj['estado']}}").trigger('change');
		$('#sexo').val("{{$obj['sexo']}}").trigger('change');

		$('#identidade').empty().append('<option value="{{$obj['identidade']}}">{{$objE['nome']}}</option>').val({{$obj['identidade']}}).trigger('change');
		$('#idcargo').empty().append('<option value="{{$objU['idcargo']}}">{{$objC['nome']}}</option>').val({{$objU['idcargo']}}).trigger('change');
		@endif

	</script>
@endsection
