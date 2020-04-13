@extends('template')
<?php
$titulo = (isset($obj['id_funcionario'])) ? "Alterar" : "Inserir";
$cor = (isset($obj['id_funcionario'])) ? "warning" : "success";
?>
@section('titulo', $titulo .' Funcionário')
@section('box-color', 'box-' . $cor)

@section('content')
	<form role="form" action="{{base_url('funcionario/save')}}" method="post" autocomplete="off">
		<input name="id_" id="id_" type="hidden"
			   value="{{(isset($obj['id_funcionario']) ? $obj['id_funcionario'] : null)}}"/>
		<div class="box-body">
			<h3 class="form-title">Dados Pessoais</h3>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-8">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome" required
							   value="{{(isset($obj['nome']) ? $obj['nome'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label for="dt_nasc">Data de Nascimento:</label>
						<div class="input-group">
							<input type="text" class="form-control datepicker text-center mask_date" id="dt_nasc"
								   name="dt_nasc" minlength="10"
								   value="{{(isset($obj['dt_nasc']) ? $obj['dt_nasc'] : null)}}">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<label for="sexo">Sexo:</label>
						<select class="form-control" id="sexo" name="sexo" required>
							<option value=""> - SELECIONE -</option>
							<option value="F">Feminino</option>
							<option value="M">Masculino</option>
							<option value="O">Outro</option>
						</select>
					</div>
				</div>
			</div>
			<div class=" row">
				<div class="form-group">
					<div class="col-sm-2">
						<label for="cep">CEP</label>
						<input type="text" class="form-control mask_CEP" id="cep" name="cep"
							   maxlength="10" minlength="10" value="{{(isset($obj['cep']) ? $obj['cep'] : null)}}">
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
						<input type="text" class="form-control" id="cidade" name="cidade"
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
					<div class="col-sm-7">
						<label for="obs">Observações</label>
						<input type="text" class="form-control" id="obs" name="obs"
							   value="{{(isset($obj['obs']) ? $obj['obs'] : null)}}">
					</div>
				</div>
			</div>
			<br/>
			<h3 class="form-title">Vínculo Empregatício</h3>
			<div class="row">
				<div class="form-group">

					<div class="col-sm-6">
						<label for="id_entidade">Entidade:</label>
						<div class="input-group input-group-sm">
							<select class="form-control" id="id_entidade" name="id_entidade" required>
								<option value="" selected> - SELECIONE -</option>
							</select>
							<span class="input-group-btn">
								<a href="{{base_url("entidade/inserir")}}" target="_blank"
								   class="btn btn-success btn-flat btn-select2">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>
							</span>
						</div>
					</div>

					<div class="col-sm-6">
						<label for="id_cargo">Cargo:</label>
						<div class="input-group input-group-sm">
							<select class="form-control" id="id_cargo" name="id_cargo" required>
								<option value="" selected> - SELECIONE -</option>
							</select>
							<span class="input-group-btn">
								<a href="{{base_url("cargo/inserir")}}" target="_blank"
								   class="btn btn-success btn-flat btn-select2">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>
							</span>
						</div>
					</div>

					<div class="col-sm-6">
						<label for="id_termo">Termo de Compromisso:</label>
						<div class="input-group input-group-sm">
							<select class="form-control" id="id_termo" name="id_termo" required>
								<option value="" selected> - SELECIONE -</option>
							</select>
							<span class="input-group-btn">
								<a href="{{base_url("TermoCompromisso/inserir")}}" target="_blank"
								   class="btn btn-success btn-flat btn-select2">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>
							</span>
						</div>
					</div>

					<div class="col-sm-3">
						<label>Visualizar Termo:</label>
						<div class="input-group input-group-sm">
							<span class="input-group-btn">
								<a type="button" class="btn btn-info btn-block" id="visualizar" onclick="visualizarTermo()">
									Visualizar Termo
								</a>
							<span id="escolha-termo" class="error"></span>
							</span>
						</div>
					</div>

				</div>
			</div>
			<br/>
			<h3 class="form-title">Dados do Usuário</h3>
			<input name="id_usuario" id="id_usuario" type="hidden"
				   value="{{(isset($objU['id_usuario']) ? $objU['id_usuario'] : null)}}"/>
			<div class="row">
				<div class="col-sm-6">
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" id="email" name="email" required
						   value="{{(isset($objU['email']) ? $objU['email'] : null)}}">
				</div>
				<div class="col-sm-3">
					<label for="senha">Senha:</label>
					<input type="password" class="form-control" id="senha" name="senha" minlength="6"
							{{(!isset($obj['id_funcionario']) ? "required" : null)}} >
				</div>
				<div class="col-sm-3">
					<label for="confirma">Confirme a Senha:</label>
					<input type="password" class="form-control" id="confirma" name="confirma" minlength="6"
							{{(!isset($obj['id_funcionario']) ? "required" : null)}} >
				</div>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("funcionario")}}" class="btn btn-default">Voltar</a>
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

	{{---------------- MODAL  -------------------------------------------------------------------}}
	<div class="modal fade" id="modalCep">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<p id="loadingTexto">Aguarde</p>
				</div>
				<div class="modal-body" id="modalBody">
					<img id="loadingImagem" src="/assets/img/loading.gif">
				</div>
				<div class="modal-footer">
					<p id="loadingTexto">Buscando endereço...</p>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')

	<script>

		function visualizarTermo() {
			var termo = $("#id_termo").select2('data');
			if (termo[0].id) {
				if ($("#escolha-termo").hasClass("escolha-termo")) {
					$("#escolha-termo").html("");
				};
				$("#visualizar").attr("href", "/TermoCompromisso/visualizar/" + termo[0].id);
				$("#visualizar").attr("target", "_blank");
			} else {
				$("#escolha-termo").addClass('escolha-termo');
				$("#escolha-termo").html("Escolha um termo para ver sua descrição");
			};
		};


		$("#id_entidade").select2({
			ajax: {
				url: '/entidade/select2Json',
				dataType: 'json',
				method: "post",
			},
			cache: true
		});

		$("#id_cargo").select2({
			ajax: {
				url: '/cargo/select2Json',
				dataType: 'json',
				method: "post",
			},
			cache: true
		});

		$("#id_termo").select2({
			ajax: {
				url: '/TermoCompromisso/select2Json',
				dataType: 'json',
				method: "post",
			},
			cache: true
		});

		$("form").validate({
			rules: {
				senha: {
					equalTo: "#confirma"
				},
				confirma: {
					equalTo: "#senha"
				}
			}
		});
		$('.datepicker').datepicker({
			language: 'pt-BR'
		});
		
		@if(isset($obj['id_funcionario']))
		$('#estado').val("{{$obj['estado']}}").trigger('change');
		$('#sexo').val("{{$obj['sexo']}}").trigger('change');
		$('#id_entidade').empty().append('<option value="{{$obj['entidade_id']}}">{{$objE['nome']}}</option>').val({{$obj['entidade_id']}}).trigger('change');
		$('#id_cargo').empty().append('<option value="{{$objU['cargo_id']}}">{{$objC['nome']}}</option>').val({{$objU['cargo_id']}}).trigger('change');
		$('#id_termo').empty().append('<option value="{{$objU['termo_id']}}">{{$objTC['nome']}}</option>').val({{$objU['termo_id']}}).trigger('change');
		@endif
		
		$('#cep').focusout(function(){
			var cep = $('#cep').val();
			$.ajax({   
				url: "/Funcionario/consultaCep",   
				type : 'POST',   
				data : {   
					'cep': cep   
				},   
				dataType : 'json',   
				beforeSend: function(){                     
					$("#modalCep").modal('show');   
				},   
				success: function(dados){
					$('#logradouro').val(dados.logradouro);
					$('#bairro').val(dados.bairro);
					$('#cidade').val(dados.localidade);
					$('#estado').val(dados.uf);                     
				},   
				complete: function(){
					$("#modalCep").modal('hide')
				} 
			});
		});
	</script>
@endsection
