@extends('template')
<?php
$titulo = (isset($obj['id_termo'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_termo'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Termo')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('TermoCompromisso/save')}}" method="post">
		<input name="id_termo" id="id_termo" type="hidden" value="{{(isset($obj['id_termo']) ? $obj['id_termo'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-6">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome" required
							   value="{{(isset($obj['nome']) ? $obj['nome'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-12">
						<label for="descricao">Digite o termo completo:</label>
						<textarea class="form-control" id="descricao" 
										name="texto" required>{{(isset($obj['texto']) ? $obj['texto'] : null)}}</textarea>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("TermoCompromisso")}}" class="btn btn-default">Voltar</a>
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
	<script src="{{base_url()}}assets/bower_components/ckeditor/ckeditor.js"></script>
	<script src="{{base_url()}}assets/bower_components/ckeditor/lang/pt-br.js"></script>

	<script>
		$("form").validate();

		
		CKEDITOR.replace('descricao', {
				customConfig: 'config.js'
		});
	</script>
@endsection
