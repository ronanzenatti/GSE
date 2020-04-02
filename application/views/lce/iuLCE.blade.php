@extends('template')
<?php
$titulo = (isset($obj['id_lce'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_lce'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Lazeres, Culturas e Esporte')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('LazerCulturaEsporte/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_lce']) ? $obj['id_lce'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="cultural_participa">Cultural - Participa:</label>
						<input type="text" class="form-control" id="cultural_participa" name="cultural_participa" required
							   value="{{(isset($obj['cultural_participa']) ? $obj['cultural_participa'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="cultural_interesse">Cultural - Interesse:</label>
						<input type="text" class="form-control" id="cultural_interesse" name="cultural_interesse"
							   value="{{(isset($obj['cultural_interesse']) ? $obj['cultural_interesse'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="esportiva_participa">Esportiva - Participa:</label>
						<input type="text" class="form-control" id="esportiva_participa" name="esportiva_participa"
							   value="{{(isset($obj['esportiva_participa']) ? $obj['esportiva_participa'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="esportiva_interesse">Esportiva - Interesse:</label>
						<input type="text" class="form-control" id="esportiva_interesse" name="esportiva_interesse"
							   value="{{(isset($obj['esportiva_interesse']) ? $obj['esportiva_interesse'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="lazer">Lazer:</label>
						<input type="text" class="form-control" id="lazer" name="lazer"
							   value="{{(isset($obj['lazer']) ? $obj['lazer'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("LazerCulturaEsporte")}}" class="btn btn-default">Voltar</a>
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
