@extends('template')
<?php
$titulo = (isset($obj['id_saude'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_saude'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Saúde')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('Saude/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_saude']) ? $obj['id_saude'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="problemas_saude">Problemas de Saúde:</label>
						<input type="text" class="form-control" id="problemas_saude" name="problemas_saude" required
							   value="{{(isset($obj['problemas_saude']) ? $obj['problemas_saude'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="tratamentos">Tratamentos:</label>
						<input type="text" class="form-control" id="tratamentos" name="tratamentos"
							   value="{{(isset($obj['tratamentos']) ? $obj['tratamentos'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="psicologico_psiquiatrico">Psicológico / Psiquiátrico:</label>
						<input type="text" class="form-control" id="psicologico_psiquiatrico" name="psicologico_psiquiatrico"
							   value="{{(isset($obj['psicologico_psiquiatrico']) ? $obj['psicologico_psiquiatrico'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="cigarro_inicio">Cigarros - Início:</label>
						<input type="text" class="form-control" id="cigarro_inicio" name="cigarro_inicio"
							   value="{{(isset($obj['cigarro_inicio']) ? $obj['cigarro_inicio'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="cigarros_frequencia">Cigarros - Frequencia:</label>
						<input type="text" class="form-control" id="cigarros_frequencia" name="cigarros_frequencia"
							   value="{{(isset($obj['cigarros_frequencia']) ? $obj['cigarros_frequencia'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="cigarros_quantidade">Cigarros - Quantidade:</label>
						<input type="text" class="form-control" id="cigarros_quantidade" name="cigarros_quantidade"
							   value="{{(isset($obj['cigarros_quantidade']) ? $obj['cigarros_quantidade'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="bebidas_inicio">Bebidas - Início</label>
						<input type="text" class="form-control" id="bebidas_inicio" name="bebidas_inicio"
							   value="{{(isset($obj['bebidas_inicio']) ? $obj['bebidas_inicio'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="bebidas_frequencia">Bebidas - Frequencia:</label>
						<input type="text" class="form-control" id="bebidas_frequencia" name="bebidas_frequencia"
							   value="{{(isset($obj['bebidas_frequencia']) ? $obj['bebidas_frequencia'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="bebidas_quantidade">Bebidas - Quantidade:</label>
						<input type="text" class="form-control" id="bebidas_quantidade" name="bebidas_quantidade"
							   value="{{(isset($obj['bebidas_quantidade']) ? $obj['bebidas_quantidade'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="drogas">Drogas:</label>
						<input type="text" class="form-control" id="drogas" name="drogas"
							   value="{{(isset($obj['drogas']) ? $obj['drogas'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="drogas_inicio">Drogas - Início</label>
						<input type="text" class="form-control" id="drogas_inicio" name="drogas_inicio"
							   value="{{(isset($obj['drogas_inicio']) ? $obj['drogas_inicio'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="drogas_frequencia">Drogas - Frequencia:</label>
						<input type="text" class="form-control" id="drogas_frequencia" name="drogas_frequencia"
							   value="{{(isset($obj['drogas_frequencia']) ? $obj['drogas_frequencia'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="drogas_quantidade">Drogas - Quantidade:</label>
						<input type="text" class="form-control" id="drogas_quantidade" name="drogas_quantidade"
							   value="{{(isset($obj['drogas_quantidade']) ? $obj['drogas_quantidade'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="medicamentos">Medicamentos:</label>
						<input type="text" class="form-control" id="medicamentos" name="medicamentos"
							   value="{{(isset($obj['medicamentos']) ? $obj['medicamentos'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="doenca_familia">Doença de Família:</label>
						<input type="text" class="form-control" id="doenca_familia" name="doenca_familia"
							   value="{{(isset($obj['doenca_familia']) ? $obj['doenca_familia'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("Saude")}}" class="btn btn-default">Voltar</a>
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
