@extends('template')
<?php
$titulo = (isset($obj['id_internacao'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_internacao'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Internação')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Internacao/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_internacao']) ? $obj['id_internacao'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="quando">Quando:</label>
						<input type="text" class="form-control" id="quando" name="quando" required
							   value="{{(isset($obj['quando']) ? $obj['quando'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="onde">Onde:</label>
						<input type="text" class="form-control" id="onde" name="onde"
							   value="{{(isset($obj['onde']) ? $obj['onde'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="periodo">Período:</label>
						<input type="text" class="form-control" id="periodo" name="periodo"
							   value="{{(isset($obj['periodo']) ? $obj['periodo'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Internacao")}}" class="btn btn-default">Voltar</a>
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
	</script>
@endsection
