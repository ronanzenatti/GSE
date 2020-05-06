@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_encaminhamento'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_encaminhamento'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Encaminhamento')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Encaminhamento/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_encaminhamento']) ? $obj['id_encaminhamento'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="descricao">Descrição:</label>
						<input type="text" class="form-control" id="descricao" name="descricao" required
							   value="{{(isset($obj['descricao']) ? $obj['descricao'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="data_limite">Data Limite:</label>
						<input type="text" class="form-control" id="data_limite" name="data_limite"
							   value="{{(isset($obj['data_limite']) ? $obj['data_limite'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="data_envio">Data do Envio:</label>
						<input type="text" class="form-control" id="data_envio" name="data_envio"
							   value="{{(isset($obj['data_envio']) ? $obj['data_envio'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="usuario">Usuário:</label>
						<input type="text" class="form-control" id="usuario" name="usuario"
							   value="{{(isset($obj['usuario']) ? $obj['usuario'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Encaminhamento")}}" class="btn btn-default">Voltar</a>
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
