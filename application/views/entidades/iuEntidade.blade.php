@extends('template')
<?php
$titulo = (isset($obj['identidade'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['identidade'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Entidade')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('entidade/save')}}" method="post">
		<input name="id_" id="id_" type="hidden" value="{{(isset($obj['identidade']) ? $obj['identidade'] : null)}}"/>
		<div class="box-body">
			<div class="row">
				<div class="form-group">
					<div class="col-sm-2">
						<label for="tipo">Tipo</label>
						<select class="form-control" id="tipo" name="tipo" required>
							<option value=""> - SELECIONE -</option>
							<option value="C">CREAS</option>
							<option value="M">MP-SP</option>
							<option value="S">Saúde</option>
							<option value="E">Educação</option>
							<option value="A">Assistencial</option>
							<option value="O">Outros</option>
						</select>
					</div>
					<div class="col-sm-7">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" required
							   value="{{(isset($obj['nome']) ? $obj['nome'] : null)}}">
					</div>
					<div class="col-sm-3">
						<label for="cnpj">CNPJ</label>
						<input type="text" class="form-control text-center mask_CNPJ" id="cnpj" name="cnpj"
							   minlength="18" value="{{(isset($obj['cnpj']) ? $obj['cnpj'] : null)}}">
					</div>
				</div>
			</div>
			<div class=" row">
				<div class="form-group">
					<div class="col-sm-2">
						<label for="cep">CEP</label>
						<input type="text" class="form-control text-center mask_CEP" id="cep" name="cep"
							   maxlength="10"
							   minlength="10" value="{{(isset($obj['cep']) ? $obj['cep'] : null)}}">
					</div>
					<div class="col-sm-8">
						<label for="logradouro">Logradouro</label>
						<input type="text" class="form-control" id="logradouro" name="logradouro"
							   value="{{(isset($obj['logradouro']) ? $obj['logradouro'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label for="numero">Numero</label>
						<input type="text" class="form-control" id="numero" name="numero"
							   value="{{(isset($obj['numero']) ? $obj['numero'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="bairro">Bairro</label>
						<input type="text" class="form-control" id="bairro" name="bairro"
							   value="{{(isset($obj['bairro']) ? $obj['bairro'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label for="estado">Estado</label>
						<select name="estado" class="form-control select2" id="estado">
							<option value="SP">SP - São Paulo</option>
							<option value="AC">AC - Acre</option>
							<option value="AL">AL - Alagoas</option>
							<option value="AP">AP - Amapá</option>
							<option value="AM">AM - Amazonas</option>
							<option value="BA">BA - Bahia</option>
							<option value="CE">CE - Ceará</option>
							<option value="DF">DF - Distrito Federal</option>
							<option value="ES">ES - Espírito Santo</option>
							<option value="GO">GO - Goiás</option>
							<option value="MA">MA - Maranhão</option>
							<option value="MT">MT - Mato Grosso</option>
							<option value="MS">MS - Mato Grosso do Sul</option>
							<option value="MG">MG - Minas Gerais</option>
							<option value="PA">PA - Pará</option>
							<option value="PB">PB - Paraíba</option>
							<option value="PR">PR - Paraná</option>
							<option value="PE">PE - Pernambuco</option>
							<option value="PI">PI - Piauí</option>
							<option value="RJ">RJ - Rio de Janeiro</option>
							<option value="RN">RN - Rio Grande do Norte</option>
							<option value="RS">RS - Rio Grande do Sul</option>
							<option value="RO">RO - Rondônia</option>
							<option value="RR">RR - Roraima</option>
							<option value="SC">SC - Santa Catarina</option>
							<option value="SE">SE - Sergipe</option>
							<option value="TO">TO - Tocantins</option>
						</select>
					</div>
					<div class="col-sm-5">
						<label for="cidade">Cidade</label>
						<input type="text" class="form-control" id="cidade" name="cidade" required
							   value="{{(isset($obj['cidade']) ? $obj['cidade'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-5">
						<label for="telefones">Telefones</label>
						<input type="text" class="form-control" id="telefones" name="telefones"
							   value="{{(isset($obj['telefones']) ? $obj['telefones'] : null)}}">
					</div>
					<div class="col-sm-2">

					</div>
					<div class="col-sm-5">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email"
							   value="{{(isset($obj['email']) ? $obj['email'] : null)}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="responsavel">Responsável</label>
						<input type="text" class="form-control" id="responsavel" name="responsavel" required
							   value="{{(isset($obj['responsavel']) ? $obj['responsavel'] : null)}}">
					</div>
					<div class="col-sm-4">
						<label for="resp_tel">Telefones do Responsável</label>
						<input type="text" class="form-control" id="resp_tel" name="resp_tel" required
							   value="{{(isset($obj['resp_tel']) ? $obj['resp_tel'] : null)}}">
					</div>
					<div class="col-sm-4">
						<label for="resp_email">E-mail do Responsável</label>
						<input type="email" class="form-control" id="resp_email" name="resp_email" required
							   value="{{(isset($obj['resp_email']) ? $obj['resp_email'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("entidade")}}" class="btn btn-default">Voltar</a>
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

		@if(isset($obj['identidade']))
		$('#estado').val("{{$obj['estado']}}").trigger('change');
		$('#tipo').val("{{$obj['tipo']}}").trigger('change');
		@endif

	</script>
@endsection
