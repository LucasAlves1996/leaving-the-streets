@extends('templates.template')

@section('title')
Fazer uma doação
@stop

@section('content')
			<div id="formDoacao" style="width: 90%;margin-bottom: 50px;">
				<h1 style="font-size:40px">Faça uma doação</h1>
				<div id="form">
					<form method="POST" style="display:grid;grid-template-columns:100%;">
						{!! csrf_field() !!}
						<h2 style="text-align:center;margin-bottom:50px;">Para fazer uma doação informe seu email que entraremos em contato.</h2>
						<input type="text" name="email" class="form-fields" placeholder="Digite o seu email..." style="width:50%;margin:0px auto 20px auto;" required>
						<input type="submit" value="Enviar" id="submit" style="width:50%;margin:auto;">
					</form>
				</div>
			</div>
@stop