@extends('template')
<?php
$titulo = (isset($obj['idcargo'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['idcargo'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' P. I. A.')
@section('box-color', 'box-' . $cor)

<style>
	.list-group{
		padding-right: 5px;
		border-right: 1px solid #000;
	}
</style>

@section('content')
	<div class="row">
		<div class="col-sm-3">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					Dados do P. I. A.
				</a>
				<a href="#" class="list-group-item">Situação Processual</a>
				<a href="#" class="list-group-item">Situação Habitacional</a>
				<a href="#" class="list-group-item">Composição Familiar</a>
				<a href="#" class="list-group-item">Rede de Serviços</a>
				<a href="#" class="list-group-item">Histórico Familiar</a>
				<a href="#" class="list-group-item">Histórico do Adolescente</a>
				<a href="#" class="list-group-item">Escolarização</a>
				<a href="#" class="list-group-item">Profissionalização</a>
				<a href="#" class="list-group-item">Atividades Laborativas</a>
				<a href="#" class="list-group-item">Atividadades Culturais, Esportivas e Lazer</a>
				<a href="#" class="list-group-item">Expectativas do Adolescente e Familia ou Responsável</a>
				<a href="#" class="list-group-item">Planejamento dos Atendimentos</a>
			</div>
		</div>
		<div class="col-sm-9">

			<form role="form" action="{{base_url('cargo/save')}}" method="post">
				<input name="id_" id="id_" type="hidden" value="{{(isset($obj['idcargo']) ? $obj['idcargo'] : null)}}"/>
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
								<label for="descricao">Descrição:</label>
								<input type="text" class="form-control" id="descricao" name="descricao"
									   value="{{(isset($obj['descricao']) ? $obj['descricao'] : null)}}">
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="row">
						<div class="col-sm-4 text-left">
							<a href="{{base_url("cargo")}}" disabled class="btn btn-default">Voltar</a>
						</div>
						<div class="col-sm-4 text-center">
							<button type="submit" class="btn btn-{{$cor}}">Salvar</button>
						</div>
						<div class="col-sm-4 text-right">
							<a href="{{base_url("cargo")}}" disabled class="btn btn-default">Próximo</a>
						</div>
					</div>

				</div>
			</form>

		</div>
	</div>
@endsection



@section('js')
	<script>
		$('body').addClass('sidebar-collapse')
	</script>
@endsection
