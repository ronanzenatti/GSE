@extends('template')
@section('titulo', 'Listar Adolescentes')

@section('content')
	<div class="text-right">
		<a href="{{base_url('adolescente/inserir')}}" class="btn btn-success btn-novo">Novo</a>
	</div>

	<table id="tableAdolescente" class="table table-striped table-bordered table-hover" cellspacing="0">
		<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>RG</th>
			<th>Responsável</th>
			<th>Endereços</th>
			<th>Contatos</th>
			<th>Ações</th>
		</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@endsection

@section('js')
	<script>
		$(function () {
			$('#tableAdolescente').dataTable({
				responsive: true,
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{base_url('adolescente/Ajax_Datatables')}}",
					type: "POST",
				},
				"initComplete": function (settings, json) {
					$('[data-toggle="tooltip"]').tooltip();
				},
				pagingType: "full_numbers",
				columnDefs: [
					{targets: [4, 5, 6], orderable: false, search: false, class: "text-center"}
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
				dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
				buttons: [
					{extend: 'copy', className: 'btn-sm', text: 'Copiar'},
					{extend: 'csv', title: 'FileCSV', className: 'btn-sm'},
					{extend: 'pdf', title: 'FilePDF', className: 'btn-sm'},
					{extend: 'print', className: 'btn-sm', text: 'Imprimir'}
				]
			});
		});


		function showContatos(idA) {
			$('#showContato').modal({
				show: true,
				keyboard: false,
			});

			$('#tableCont').DataTable().clear();
			$('#tableCont').DataTable().destroy();
			$('#tableCont').dataTable({
				responsive: true,
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{base_url('contato/Ajax_Datatables')}}",
					type: "POST",
					data: function (a) {
						a.idadolescente = idA;
						a.listar = 1
					},
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
		}

		function showEnderecos(idA) {
			$('#showEndereco').modal({
				show: true,
				keyboard: false,
			});
			$('#tableEnd').DataTable().clear();
			$('#tableEnd').DataTable().destroy();
			$('#tableEnd').dataTable({
				responsive: true,
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{base_url('endereco/Ajax_Datatables')}}",
					type: "POST",
					data: function (a) {
						a.idadolescente = idA;
						a.listar = 1
					}
				},
				"initComplete": function (settings, json) {
					$('[data-toggle="tooltip"]').tooltip();
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
		}
	</script>
	{{---------------- MODAL  -------------------------------------------------------------------}}
	<div class="modal fade" id="showEndereco" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Lista de Endereços</h4>
				</div>
				<div class="modal-body">
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
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
				</div>
				<script>

				</script>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal Endereço -->

	<div class="modal fade" id="showContato" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Lista de Contatos</h4>
				</div>
				<div class="modal-body">
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
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal Contatos -->
@endsection

