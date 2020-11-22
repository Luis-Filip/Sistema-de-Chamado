<?php

include 'conexao.php';

session_start();

//ESTE IF É PARA IMPEDIR QUE A PAGINA PÓS-LOGIN SEJA ACESSADA DIRETAMENTE
if(!$_SESSION['login']) {
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Abertura de Chamado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Anton|Libre+Baskerville&display=swap" rel="stylesheet"> <!– Linkando fonte –>

	<!- tamanho de cada conteiner ->
	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		#formTitulo{
			margin-top: 0px;
			background-color: #007bff;
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
<div class="container">
	<h4 style="color: #007bff;"><?php echo $_SESSION['login'];?></h4>
	<a id="formLogin" href="logout.php">Sair</a>
</div>
	<h1 id="formTitulo">Formulário para abertura de chamados</h1>
	<div class="container">
		<div style="text-align: left;">
		 		<a href="menu.php" role="button" class="btn btn-light" style="border-radius: 1px; border-color: black; border-radius: 5px;">Voltar</a>
		 	</div>
		<form action="_abre_chamado.php" method="POST">
			<div class="form-group" style="margin-top: 20px">
			    <label type="number" name="id_chamado" autocomplete="off"></label> 
		 	</div>
		 	<div class="form-group">
		 		<label>O que deseja?</label>
			    <select id="select" class="form-control" name="tipo_problema">
			    	<option value="reserva de sala">Reservar sala</option>
			    	<option value="manutencao de dispositivo">Manutenção de dispositivo</option>
			    </select>
		 	</div>
		 	<div class="form-group">
		    	<label for="comment">Selecione o local</label>
		    	<select id="select" class="form-control" name="sala">
			    	<option>Selecione a sala</option>
			    	<?php
		    		$sql0 = "SELECT * FROM `tb_item` WHERE tipo_item != 'dispositivo' ORDER BY tipo_item ASC";
		    		$busca0 = mysqli_query($conexao,$sql0);

		    		while ($array = mysqli_fetch_array($busca0)) {
		    			$tipo_item		=	$array['tipo_item'];
		    			$sala			=	$array['descricao_item'];
		    		?>
		      		<option value="<?php echo $result = $tipo_item.$sala ?>"><?php echo $result = $tipo_item.$sala ?></option>
		      	<?php } ?>
		      	</select>
		    </div>
		    <div>
		    <label>Descrição</label>
		    <textarea class="form-control" rows="4" name="descricao" placeholder="Descreva aqui o problema com o dispositivo de sua sala (caso seje reserva de sala pode deixar esta campo em branco)"></textarea>
		    	
		    </div>
		    <br>
		 	<div style="text-align: right;">
		 		<button type="submit" class="btn btn-primary">Abrir Chamado</button>
		 	</div>
			<?php
				$login = $_SESSION['login'];

				$sql = "SELECT * FROM `tb_usuario` WHERE login = '$login'";
		    	$busca1 			= 	mysqli_query($conexao,$sql);
		    	$array1 			= 	mysqli_fetch_array($busca1);
		    	$nome_user 			=	$array1['nome_user'];
		    	$id_user			=	$array1['id_user'];

		    	$id_user;
				
				date_default_timezone_set('America/Sao_Paulo');
				$hoje = date('d/m/Y H:i');				
			?>
			<input type="text" name="id_user" readonly="" style="display: none;" value="<?php echo $id_user ?>">
			<input type="text" name="hoje" readonly="" style="display: none;" value="<?php echo $hoje ?>">
			<input type="text" name="nome_user" readonly="" style="display: none;" value="<?php echo $nome_user ?>">
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>