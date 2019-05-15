@extends('templates.template')

@section('title')
Login
@stop

@section('content')
			<div id="formLogin" style="margin-bottom: 50px;">
				<h1>Login</h1>
				<div id="form">
					<form method="POST">
						{!! csrf_field() !!}

						@if (session('erro'))
				      <div class="alert alert-danger" style="text-align:center; width:50%;margin:0px auto 30px auto;">
				          {{ session('erro') }}
				      </div>
				    @endif

						<label>Usuário:</label><br>
						<input type="text" name="user" class="form-fields" placeholder="Digite o nome de usuário..." required><br>
						<label>Senha:</label><br>
						<input type="password" name="password" class="form-fields" placeholder="Digite a senha..." required><br>
						<a href="cadastro">Ainda não possui cadastro? Cadastre-se aqui.</a>
						<input type="submit" value="Entrar" id="submit">
					</form>
				</div>
			</div>
@stop