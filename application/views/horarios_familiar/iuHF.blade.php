@extends('template')
<?php
$titulo = (isset($obj['id_horario_familia'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_horario_familia'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Horários Familiares')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('HorarioFamiliar/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_horario_familia']) ? $obj['id_horario_familia'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="chega_tarde">Chega Tarde:</label>
						<input type="text" class="form-control" id="chega_tarde" name="chega_tarde" required
							   value="{{(isset($obj['chega_tarde']) ? $obj['chega_tarde'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="compromissos">Compromissos:</label>
						<input type="text" class="form-control" id="compromissos" name="compromissos"
							   value="{{(isset($obj['compromissos']) ? $obj['compromissos'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="periodo_rua">Período na Rua:</label>
						<input type="text" class="form-control" id="periodo_rua" name="periodo_rua"
							   value="{{(isset($obj['periodo_rua']) ? $obj['periodo_rua'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("HorarioFamiliar")}}" class="btn btn-default">Voltar</a>
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
