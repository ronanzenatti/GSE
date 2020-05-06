@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_situacao_escolar'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_situacao_escolar'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Situações Escolares')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('SituacaoEscolar/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_situacao_escolar']) ? $obj['id_situacao_escolar'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="grau_escolaridade">Grau de Escolaridade:</label>
						<input type="text" class="form-control" id="grau_escolaridade" name="grau_escolaridade" required
							   value="{{(isset($obj['grau_escolaridade']) ? $obj['grau_escolaridade'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="estudando">Estudando:</label>
						<input type="text" class="form-control" id="estudando" name="estudando"
							   value="{{(isset($obj['estudando']) ? $obj['estudando'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="ano_abandono">Ano de Abandono:</label>
						<input type="text" class="form-control" id="ano_abandono" name="ano_abandono"
							   value="{{(isset($obj['ano_abandono']) ? $obj['ano_abandono'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="ultima_escola">Última Escola:</label>
						<input type="text" class="form-control" id="ultima_escola" name="ultima_escola"
							   value="{{(isset($obj['ultima_escola']) ? $obj['ultima_escola'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="retornar">Retornar:</label>
						<input type="text" class="form-control" id="retornar" name="retornar"
							   value="{{(isset($obj['retornar']) ? $obj['retornar'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="atestado_matricula">Atestado de Matrícula:</label>
						<input type="text" class="form-control" id="atestado_matricula" name="atestado_matricula"
							   value="{{(isset($obj['atestado_matricula']) ? $obj['atestado_matricula'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("SituacaoEscolar")}}" class="btn btn-default">Voltar</a>
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
