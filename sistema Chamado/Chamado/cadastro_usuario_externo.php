<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		#formTitulo{
			margin-top: 0px;
			background-color: #ffc107;
			color: #ffffff;
			align-items: center;
			justify-content: center;
			border-radius: 0px;
			font-weight: bold;
			font-family: 'Libre Baskerville', serif;
			height: 100px;
			display: flex;
		}
		
	</style>
</head>
<body>
	<h1 id="formTitulo" style="background-color: #007bff" >Cadastrar usuário</h1>
	
	<div class="container" style="margin-top: 20px">
		<div style="text-align: left;">
		 		<a href="index.php" role="button" class="btn" style="border-radius: 1px; border-color: black; border-radius: 5px;">Voltar</a>
		 	</div>
		<form action="_insert_usuario_externo.php" method="post">
			<div class="form-group">
				<label style="margin-top: 20px">Nome do usuário:</label>
				<input type="text" name="nome_user" class="form-control" required autocomplete="of" placeholder="Nome completo">
			</div>
			<div class="form-group">
				<label>Nome de login:</label>
				<input type="text" name="login_user" class="form-control" required autocomplete="of" placeholder="Login">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email_user" class="form-control" required autocomplete="of" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Senha:</label>
				<input id="txtSenha" type="password" name="senha_user" class="form-control" required autocomplete="of" placeholder="Senha">
			</div>
			<div class="form-group">
				<label>Repetir senha:</label>
				<input type="password" name="repetir" class="form-control" required autocomplete="of" placeholder="Repetir senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div class="form-group" style="display: none;">
				<label>Nível de acesso</label>
				<select name="nivel_user" class="form-control">
					<!--<optgroup>-->
						<option value="1">Usuário</option>
					<!--</optgroup>-->
				</select>
			</div>
			<div style="text-align: right;">
		 		<button type="submit" class="btn btn-primary">Cadastrar</button>
		 	</div>
		</form>
		
	</div>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<script>
		function validaSenha (input){
			if (input.value != document.getElementById('txtSenha').value) {
				input.setCustomValidity('A senha de repetição é diferente');
			} else {
				input.setCustomValidity('');
			}
		}
	</script>
</body>	