@extends('template')
<?php
$titulo = (isset($obj['id_planejamento_atendimento'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_planejamento_atendimento'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Planejamentos de Atendimentos')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('PlanejamentoAtendimento/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_planejamento_atendimento']) ? $obj['id_planejamento_atendimento'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="tipo">Tipo:</label>
						<input type="text" class="form-control" id="tipo" name="tipo"
							   value="{{(isset($obj['tipo']) ? $obj['tipo'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="periodo">Período:</label>
						<input type="text" class="form-control" id="periodo" name="periodo" required
							   value="{{(isset($obj['periodo']) ? $obj['periodo'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="data_inicio">Data de Início:</label>
						<input type="text" class="form-control" id="data_inicio" name="data_inicio" required
							   value="{{(isset($obj['data_inicio']) ? $obj['data_inicio'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("PlanejamentoAtendimento")}}" class="btn btn-default">Voltar</a>
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
