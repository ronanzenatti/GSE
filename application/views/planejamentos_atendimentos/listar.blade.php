@extends($_SESSION['extends_module'])
@section('titulo', 'Listar Planejamentos de Atendimentos')

@section('content')
	<div class="text-right">
		<a href="{{base_url('PlanejamentoAtendimento/inserir')}}" class="btn btn-success btn-novo">Novo</a>
	</div>
	<table id="tablePlanejamentosAtendimentos" class="table table-striped table-bordered table-hover" cellspacing="0">
		<thead>
		<tr>
			<th>#</th>
			<th>Tipo</th>
			<th>Período</th>
			<th>Data de Início</th>
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
			$('table').dataTable({
				responsive: true,
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{base_url('PlanejamentoAtendimento/Ajax_Datatables')}}",
					type: "POST"
				},
				pagingType: "full_numbers",
				columnDefs: [
					{targets: [4], orderable: false,}
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
	</script>
@endsection

