@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_profissionalizacao'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_profissionalizacao'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Profissionalização')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Profissionalizacao/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_profissionalizacao']) ? $obj['id_profissionalizacao'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="registrado">Registrado:</label>
						<input type="text" class="form-control" id="registrado" name="registrado" required
							   value="{{(isset($obj['registrado']) ? $obj['registrado'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="interesses_cursos">Interesses em Cursos:</label>
						<input type="text" class="form-control" id="interesses_cursos" name="interesses_cursos"
							   value="{{(isset($obj['interesses_cursos']) ? $obj['interesses_cursos'] : null)}}">
					</div>
				</div>
			</div>			
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Profissionalizacao")}}" class="btn btn-default">Voltar</a>
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
