@extends('template')
<?php
$titulo = (isset($obj['id_cargo'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_cargo'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Cargo')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('cargo/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_cargo']) ? $obj['id_cargo'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome" required
							   value="{{(isset($obj['nome']) ? $obj['nome'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="descricao">Descrição:</label>
						<input type="text" class="form-control" id="descricao" name="descricao"
							   value="{{(isset($obj['descricao']) ? $obj['descricao'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("cargo")}}" class="btn btn-default">Voltar</a>
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
		$("form").validate();

		@if(isset($obj['identidade']))
		$('#estado').val("{{$obj['estado']}}").trigger('change');
		$('#tipo').val("{{$obj['tipo']}}").trigger('change');
		@endif

	</script>
@endsection
