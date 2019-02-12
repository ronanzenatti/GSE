@extends('template')
<?php
$cor = (isset($cf['idcf'])) ? "warning" : "success";
?>
@section('titulo', 'Composição Familiar')
@section('box-color', 'box-' . $cor)
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header" style="padding-right: 10px; padding-left: 10px; margin: 10px 0 0 0;">
				<i class="fa fa-user"></i> <strong class="text-primary"> &nbsp;
					Adolescente: </strong>{{mb_strtoupper($ado['nome'], 'UTF-8')}}
				<span class="pull-right"><strong class="text-primary">RG:</strong> 56564654</span>
				<br/>
				<i class="fa fa-home"></i>&nbsp;
				<strong class="text-primary">Endereço: </strong> {{$end['logradouro'] . ", " .$end['numero']}}
				- {{$end['bairro']}}, {{$end['cidade']}}-{{$end['estado']}}<br>
			</h2>
		</div>
	</div>
	<form role="form" onsubmit="return false">
		<input name="idcf" id="idcf" type="hidden" value="{{(isset($cf['idcf']) ? $cf['idcf'] : null)}}"/>
		<input name="idendereco" id="idendereco" type="hidden"
			   value="{{(isset($end['idendereco']) ? $end['idendereco'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="col-sm-4">
					<label for="recebe_beneficio">Recebe Benefício:</label>
					<select class="form-control" id="recebe_beneficio" name="recebe_beneficio" required>
						<option value=""> - SELECIONE -</option>
						<option value="1">SIM</option>
						<option value="2">NÃO</option>
						<option value="3">Parou de Receber</option>
					</select>
				</div>
				<div class="col-sm-8">
					<label for="beneficios">Benefícios Recebidos:</label>
					<input type="text" class="form-control" disabled id="beneficios" name="beneficios"
						   value="{{(isset($cf['beneficios']) ? number_format($cf['beneficios'], 2, ',', '.') : null)}}">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="obs">Observações:</label>
					<textarea name="obs" id="obs"
							  class="form-control">{{(isset($cf['obs']) ? $cf['obs'] : null)}}</textarea>
				</div>
			</div>
			<hr/>
			<h3><strong>Residentes no endereço</strong>
				<a href="#" class="btn btn-sm btn-primary pull-right">Adicionar</a>
			</h3>
			<table id="tableResidentes">
				<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Parestesco</th>
					<th>Idade</th>
					<th>Escolaridade</th>
					<th>Formação Profissional</th>
					<th>Ocupação</th>
					<th>Salário Mensal</th>
					<th>Contribui na Renda?</th>
					<th>Ações</th>
				</tr>
				</thead>
			</table>
		</div>
		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("adolescente")}}" class="btn btn-default">Voltar</a>
				</div>
				<div class="col-sm-4 text-center">
					<button type="reset" class="btn btn-default">Limpar</button>
				</div>
				<div class="col-sm-4 text-right">
					<button type="button" class="btn btn-{{$cor}}">Salvar</button>
				</div>
			</div>

		</div>
	</form>
@endsection
@section('js')
	<!-- CKEditor -->
	<script src="{{base_url()}}assets/bower_components/ckeditor/ckeditor.js"></script>
	<script src="{{base_url()}}assets/bower_components/ckeditor/lang/pt-br.js"></script>

	<script>
		@if(isset($cf['idcf']))
		$('#tipo').val("{{$cf['tipo']}}").trigger('change');
		$('#situacao').val("{{$cf['situacao']}}").trigger('change');
		@endif

		$('input[type="checkbox"].minimal-blue, input[type="radio"].minimal-blue').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});
		$("form").validate();

		CKEDITOR.replace('obs', {
			customConfig: 'config.js'
		});

		$("#tableResidentes").DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{base_url('pessoafamilia/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					a.idcf = $("#idcf").val()
				}
			},
			pagingType: "full_numbers",
			columnDefs: [
				{targets: [9], orderable: false, search: false, class: "text-center"},
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
@endsection
