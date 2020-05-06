@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_planejamento_futuro'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_planejamento_futuro'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Planejamentos de Futuros')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('PlanejamentoFuturo/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_planejamento_futuro']) ? $obj['id_planejamento_futuro'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="futuro">Futuro:</label>
						<input type="text" class="form-control" id="futuro" name="futuro"
							   value="{{(isset($obj['futuro']) ? $obj['futuro'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="interesse_familia">Interesse da Família:</label>
						<input type="text" class="form-control" id="interesse_familia" name="interesse_familia" required
							   value="{{(isset($obj['interesse_familia']) ? $obj['interesse_familia'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="influencia_negativa">Influência Negativa:</label>
						<input type="text" class="form-control" id="influencia_negativa" name="influencia_negativa" required
							   value="{{(isset($obj['influencia_negativa']) ? $obj['influencia_negativa'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("PlanejamentoFuturo")}}" class="btn btn-default">Voltar</a>
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
