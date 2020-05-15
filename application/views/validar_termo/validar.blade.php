@extends($_SESSION['extends_module'])

<?php
	$horaValidacao = date('d/m/Y H:i:s');
?>

@section('titulo', 'Validar Termo')
@section('subtitulo',' - '.$objFuncionario['nome'])

@section('content')
	<div class="box-body">
		<h3 class="form-title">Entidade</h3>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<label>Nome:</label>
						<input type="text" class="form-control" id="nomeEntidade" name="nomeEntidade" disabled
									value="{{(isset($objEntidade['nome']) ? $objEntidade['nome'] : null)}}">
					</div>
					<div class="col-sm-6">
						<label>Responsável:</label>
						<input type="text" class="form-control" id="responsavelEntidade" name="responsavelEntidade" disabled
									value="{{(isset($objEntidade['responsavel']) ? $objEntidade['responsavel'] : null)}}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<div class="col-sm-6">
					<label>Email:</label>
						<input type="text" class="form-control" id="emailEntidade" name="emailEntidade" disabled
									value="{{(isset($objEntidade['email']) ? $objEntidade['email'] : null)}}">
					</div>
					<div class="col-sm-6">
						<label>Email do Responsável:</label>
						<input type="text" class="form-control" id="emailRespoEntidade" name="emailRespoEntidade" disabled
									value="{{(isset($objEntidade['resp_email']) ? $objEntidade['resp_email'] : null)}}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<label>Telefones:</label>
							<input type="text" class="form-control" id="telefonesEntidade" name="telefonesEntidade" disabled
										value="{{(isset($objEntidade['telefones']) ? $objEntidade['telefones'] : null)}}">
					</div>
					<div class="col-sm-6">
							<label>Telefone do Responsável:</label>
							<input type="text" class="form-control" id="telRespoEntidade" name="telRespoEntidade" disabled
										value="{{(isset($objEntidade['resp_tel']) ? $objEntidade['resp_tel'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<br/>
		<h3 class="form-title">Funcionário</h3>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<label>Nome:</label>
						<input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" disabled
									value="{{(isset($objFuncionario['nome']) ? $objFuncionario['nome'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label>CPF:</label>
						<input type="text" class="form-control" id="cpfFuncionario" name="cpfFuncionario" disabled
									value="{{(isset($objFuncionario['cpf']) ? $objFuncionario['cpf'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label>RG:</label>
						<input type="text" class="form-control" id="rgFuncionario" name="rgFuncionario" disabled
									value="{{(isset($objFuncionario['rg']) ? $objFuncionario['rg'] : null)}}">
					</div>
					<div class="col-sm-2">
						<label>Telefones:</label>
						<input type="text" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario" disabled
									value="{{(isset($objFuncionario['telefones']) ? $objFuncionario['telefones'] : null)}}">
					</div>
				</div>
			</div>
		</div>
		<br/>
		<h3 class="form-title">Termo de Compromisso</h3>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-12">
					<div class="col-sm-3">
						<label>Nome do Termo:</label>
							<input type="text" class="form-control" id="nomeTermo" name="nomeTermo" disabled
										value="{{(isset($objTermo['nome']) ? $objTermo['nome'] : null)}}">
					</div>
					<div class="col-sm-3">
						<label>Hora de Validação:</label>
						<input type="text" class="form-control datepicker" id="horaTermo" name="horaTermo" disabled
										value="{{(isset($horaValidacao) ? $horaValidacao : null)}}"/>
					</div>
					<div class="col-sm-2 text-center">
					<label>Visualizar Termo</label>
						<a class="btn btn-info btn-block" target="_blank" 
								href="{{base_url("TermoCompromisso/visualizar/" . $objTermo['id_termo'])}}">
							<i class='fa fa-book' aria-hidden='true'></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<div class="row">
			<div class="col-sm-6 text-left">
				<a href="{{base_url("ValidarTermo")}}" class="btn btn-default">Voltar</a>
			</div>
			<div class="col-sm-6 text-right">
				<button class="btn btn-success" id="validarTermo">Validar Termo</button>
			</div>
		</div>
	</div>

	{{---------------- MODAL  -------------------------------------------------------------------}}
	<div class="modal fade" id="modalTermo" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<form id="formTermo" role="form" action="{{base_url('ValidarTermo/save')}}" method="post">
					<input name="horaTermo" id="horaTermo" type="hidden" 
								value="{{(isset($horaValidacao) ? $horaValidacao : null)}}"/>
					<input name="idUsuario" id="idUsuario" type="hidden" 
								value="{{(isset($objUsuario['id_usuario']) ? $objUsuario['id_usuario'] : null)}}"/>
					<div class="modal-header bg-warning">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h1 class="modal-title"><strong>Aviso</strong></h1>
						<h4>Ao confirmar o usuário abaixo terá acesso completo ao sistema conforme a sua entidade.</h4>
					</div>
					<div class="modal-body">
						<div class="box-body">
							<h4>Usuário: <b>{{(isset($objFuncionario['nome']) ? $objFuncionario['nome'] : null)}}</b></h4>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-success pull-right">Confirmar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script>
		$("#validarTermo").click(function (e) {

			$('#modalTermo').modal({
				show: true,
				keyboard: false,
			});

		});
	</script>
@endsection

