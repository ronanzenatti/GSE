@extends('template')
@section('titulo', 'Visualizar Termo')

@section('content')
		<div class="box-body">
			<div class="row">
				<div class="col-sm-12">
					<h3>{{$termo['nome']}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					{!!$termo['texto']!!}
				</div>
			</div>
		</div>

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 text-left">
					<a href="{{base_url("TermoCompromisso")}}" class="btn btn-default">Voltar</a>
				</div>
			</div>
		</div>
@endsection

@section('js')

@endsection

