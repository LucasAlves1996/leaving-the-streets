@extends('templates.template')

@section('title')
	Cadastro
@stop

@section('content')
			<div id="formCadastro" style="margin-bottom: 50px;">
				<h1>Cadastro</h1>
				<div id="form">
					<form method="POST" action="{{ url('user-insert') }}">
						{!! csrf_field() !!}

						@if (session('erro'))
				      <div class="alert alert-danger" style="text-align:center; width:50%;margin:0px auto 30px auto;">
				          {{ session('erro') }}
				      </div>
				    @endif

						<label>Nome:</label><br>
						<input type="text" name="name" class="form-fields" placeholder="Digite seu nome completo..." required><br>
						<label>Email:</label><br>
						<input type="email" name="email" class="form-fields" placeholder="Digite o seu email..." required><br>
						<label>Usuário:</label><br>
						<input type="text" name="user" class="form-fields" placeholder="Escolha um nome de usuário..." required><br>
						<label>Senha:</label><br>
						<input type="password" name="password" class="form-fields" placeholder="Escolha uma senha..." required><br>
						<label>Confirmar senha:</label><br>
						<input type="password" name="confirm_password" class="form-fields" placeholder="Digite a senha novamente..." required><br>
						<label style="display:none;">Foto:</label><br style="display:none;">
						<input style="display:none;" type="file" name="imagem" id="imagem"><br style="display:none;">
						<input type="submit" value="Cadastrar" id="submit">
					</form>
				</div>
			</div>
@stop