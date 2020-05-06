@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_meta'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_meta'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Metas')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Meta/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_meta']) ? $obj['id_meta'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="descricao">Descrição:</label>
						<input type="text" class="form-control" id="descricao" name="descricao"
							   value="{{(isset($obj['descricao']) ? $obj['descricao'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="data_limite">Data Limite:</label>
						<input type="text" class="form-control" id="data_limite" name="data_limite" required
							   value="{{(isset($obj['data_limite']) ? $obj['data_limite'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="usuario_id">Usuário:</label>
						<input type="text" class="form-control" id="usuario_id" name="usuario_id" required
							   value="{{(isset($obj['usuario_id']) ? $obj['usuario_id'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Meta")}}" class="btn btn-default">Voltar</a>
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
