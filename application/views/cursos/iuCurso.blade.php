@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_curso'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_curso'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Curso')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Curso/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_curso']) ? $obj['id_curso'] : null)}}"/>
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
						<label for="instituicao">Instituição:</label>
						<input type="text" class="form-control" id="instituicao" name="instituicao"
							   value="{{(isset($obj['instituicao']) ? $obj['instituicao'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="conclusao">Ano de Conclusão:</label>
						<input type="text" class="form-control" id="conclusao" name="conclusao"
							   value="{{(isset($obj['conclusao']) ? $obj['conclusao'] : null)}}">
					</div>
				</div>
			</div>
			
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Curso")}}" class="btn btn-default">Voltar</a>
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
