<?php 
	if ($_SESSION['extends_module'] == 'sem_validacao/template') {
		redirect('/principal');
	}
?>
@extends($_SESSION['extends_module'])
<?php
$titulo = (isset($obj['id_beneficio_familia'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_beneficio_familia'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Benefício')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('BeneficioFamilia/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['id_beneficio_familia']) ? $obj['id_beneficio_familia'] : null)}}"/>
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
						<label for="valor">Valor:</label>
						<input type="text" class="form-control" id="valor" name="valor"
							   value="{{(isset($obj['valor']) ? $obj['valor'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="ativo">Ativo:</label>
						<input type="text" class="form-control" id="ativo" name="ativo"
							   value="{{(isset($obj['ativo']) ? $obj['ativo'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-7">
						<label for="motivo">Motivo:</label>
						<input type="text" class="form-control" id="motivo" name="motivo"
							   value="{{(isset($obj['motivo']) ? $obj['motivo'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("BeneficioFamilia")}}" class="btn btn-default">Voltar</a>
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
