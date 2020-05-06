@extends($_SESSION['extends_module'])

@section('titulo', 'Auditoria')
@section('box-color', 'box-danger')

@section('content')
	<form role="form" action="#" method="post">
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-3">
						<label for="tabela">Tabela:</label>
						<select class="form-control" id="model" name="model" required>
							<option value=""> - SELECIONE -</option>
							<option value="adolescentes">Adolescentes</option>
							<option value="cargos">Cargos</option>
							<option value="composicao_familiar">Composição Familiar</option>
							<option value="contatos">Contatos</option>
							<option value="documentos">Documentos</option>
							<option value="enderecos">Endereços</option>
							<option value="entidades">Entidades</option>
							<option value="funcionarios">Funcionários</option>
							<option value="pia">P. I. A.</option>
							<option value="situacao_habitacional">Situação Habitacional</option>
							<option value="usuarios">Usuários</option>

						</select>
					</div>
					<div class="col-sm-2">
						<label for="tipo">Operação:</label>
						<select class="form-control" id="tipo" name="tipo" required>
							<option value="T"> - TODAS -</option>
							<option value="C">Novo</option>
							<option value="U">Alterado</option>
							<option value="D">Deletado</option>
						</select>
					</div>
					<div class="col-sm-2">
						<label for="model_id">Código:</label>
						<input type="text" class="form-control text-right" id="model_id" name="model_id">
					</div>
					<div class="col-sm-3">
						<label for="contenha">Contenha:</label>
						<input type="text" class="form-control text-right" id="contenha" name="contenha">
					</div>
					<div class="col-sm-2">
						<label for=""> &nbsp;</label>
						<button class="btn btn-block btn-primary" type="button" onclick="filterSearch()">
							Buscar &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<hr style="margin: 0"/>
	<div class="content">
		<table id="audit" class="table table-bordered table-responsive table-hover">
			<thead>
			<tr>
				<th>Operação</th>
				<th>Data e Hora</th>
				<th>Usuário</th>
				<th>Tabela</th>
				<th>Código</th>
				<th>Antes</th>
				<th>Depois</th>
				<th>IP</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
@endsection

@section('js')
	<script>
		$('body').addClass('sidebar-collapse');
		$('table').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			filter: false,
			ajax: {
				url: "{{base_url('audit/Ajax_Datatables')}}",
				type: "POST",
				data: function (a) {
					if ($('form').valid()) {
						a.form = $('form').serialize()
					}
				}
			},
			"order": [[1, "desc"]],
			pagingType: "full_numbers",
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
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
			rowCallback: function (row, data) {
				if (data[0] === "Novo") {
					$(row).addClass('success');
				} else if (data[0] === "Alterado") {
					$(row).addClass('warning');
				} else if (data[0] === "Deletado") {
					$(row).addClass('danger');
				}
			}
		});

		function filterSearch() {
			if ($('form').valid()) {
				$("#audit").DataTable().ajax.reload();
			}
		}
	</script>
@endsection
