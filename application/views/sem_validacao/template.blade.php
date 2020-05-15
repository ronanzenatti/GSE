@extends('TermoTemplate')

@section('content')

	<div class="callout callout-danger">
		<h4>Seu termo ainda não foi validado.</h4>
		<p>Para ter acesso completo, seu termo de compromisso deve ser validado.</p>
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-sm-12">
				<div class="col-sm-2 text-center">
				<label>Visualizar Termo</label>
					<a class="btn btn-info btn-block" target="_blank" 
							href="{{base_url("TermoCompromisso/visualizar/" . $usuario['termo_id'])}}">
						<i class='fa fa-book' aria-hidden='true'></i>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection
