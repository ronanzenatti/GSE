<form role="form" id="formFamilia" method="post" action="#">
	<input name="idcf" id="idcf" type="hidden" value="{{(isset($cf['idcf']) ? $cf['idcf'] : null)}}"/>

	<div class="box-body">
		<div class="row">
			<div class="col-sm-4">
				<label for="recebe_beneficio">Recebe Benefício:</label>
				<select class="form-control" id="recebe_beneficio" name="recebe_beneficio" required>
					<option value=""> - SELECIONE -</option>
					<option value="1">NÃO</option>
					<option value="2">SIM</option>
					<option value="3">Parou de Receber</option>
				</select>
			</div>
			<div class="col-sm-8">
				<label for="beneficios">Benefícios Recebidos:</label>
				<input type="text" class="form-control" disabled id="beneficios" name="beneficios"
					   value="{{(isset($cf['beneficios']) ? $cf['beneficios'] : null)}}">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="obs">Observações:</label>
				<textarea name="obs" id="obs"
						  class="form-control">{{(isset($cf['obs']) ? $cf['obs'] : null)}}</textarea>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<div class="row">
			<div class="col-sm-4 text-left">
				<a href="{{base_url("adolescente")}}" class="btn btn-default">Voltar</a>
			</div>
			<div class="col-sm-4 text-center">

			</div>
			<div class="col-sm-4 text-right">
				<button type="button" class="btn btn-{{$cor}}" id="salvaFamilia">Salvar</button>
			</div>
		</div>
	</div>
</form>
<script>
	@if(isset($cf['idcf']))
	$('#recebe_beneficio').val("{{$cf['recebe_beneficio']}}").trigger('change');
	if ($('#recebe_beneficio').val() > 1) {
		$('#beneficios').removeAttr('disabled');
		$('#beneficios').prop('required', true);
	} else {
		$('#beneficios').val(null);
		$('#beneficios').prop('disabled', true);
		$('#beneficios').removeAttr('required');
	}
	$("#formFamilia").valid();
	@endif

	$('input[type="checkbox"].minimal-blue, input[type="radio"].minimal-blue').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue'
	});
	$("form").validate();

	// CKEDITOR.replace('obs', {
	// 	customConfig: 'config.js'
	// });

	$('#recebe_beneficio').on('change', function (e) {
		if ($('#recebe_beneficio').val() > 1) {
			$('#beneficios').removeAttr('disabled');
			$('#beneficios').prop('required', true);
		} else {
			$('#beneficios').val(null);
			$('#beneficios').prop('disabled', true);
			$('#beneficios').removeAttr('required');
		}
		$("#formFamilia").valid();
	});

	$("#salvaFamilia").click(function (e) {
		salvaFamilia();
	});
	function salvaFamilia() {
		if ($("#formFamilia").valid()) {
			$.ajax({
				url: '/ComposicaoFamiliar/save',
				type: 'POST',
				data: {
					form: $('#formFamilia').serialize(),
				},
				success: function (result) {
					$("#idcf").val(result);
					console.log(result);
					swal({
						position: 'top-end',
						type: 'success',
						title: 'Familia salva com Sucesso!!!',
						showConfirmButton: true,
						//timer: 1500
					});
				}
			});
		}
	}

</script>
