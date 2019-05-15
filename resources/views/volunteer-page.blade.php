@extends('templates.template')

@section('title')
Ser um voluntário
@stop

@section('content')
			<div id="formVoluntario" style="width: 90%;margin-bottom: 50px;">
				<h1 style="font-size:40px">Seja um voluntário</h1>
				<div id="form">
					<form method="POST" style="display:grid;grid-template-columns:100%;">
						{!! csrf_field() !!}
						<h2 style="text-align:center;margin-bottom:50px;">Se deseja ser um voluntário, informe seu email abaixo que lhe enviaremos as instruções.</h2>
						<input type="text" name="email" class="form-fields" placeholder="Digite o seu email..." style="width:50%;margin:0px auto 20px auto;" required>
						<input type="submit" value="Enviar" id="submit" style="width:50%;margin:auto;">
					</form>
				</div>
			</div>
@stop