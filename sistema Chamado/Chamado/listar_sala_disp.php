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
	<title>Lista de Salas e Dispositivos</title>

	<!– Linkando fonte do Font Awesome –>
	<script src="https://kit.fontawesome.com/9f30e32661.js" crossorigin="anonymous"></script>

	<!– Linkando CSS bootstrap –>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!– Linkando fonte –>
	<link href="https://fonts.googleapis.com/css?family=Anton|Libre+Baskerville&display=swap" rel="stylesheet"> 

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
		#buttonAbrir{
			font-family: 'Libre Baskerville', serif;
			margin-bottom: 40px;
			background-color: #80B3FF;
			border-radius: 5px;
			font-weight: bold;
			color: #ffffff;
		}
	</style>

</head>
<body>
	<div class="container">
		<h4><?php echo $_SESSION['login'];?></h4>
		<a style="color: black;" id="formLogin" href="logout.php">Sair</a>
	</div>
	<h1 id="formTitulo">Lista de Salas e Dispositivos</h1>
	<div class="container" style="margin-top: 40px">
		<div style="text-align: left;">
		 		<a href="menu.php" role="button" class="btn" style="border-radius: 1px; border-color: black; border-radius: 5px;">Voltar</a>
		 	</div>
		<br>
		<table class="table">
		  <thead style="background-color: #ffc107;">
		    <tr>
		      <!--<th scope="col">ID</th>-->
		      <th scope="col">SALA</th>
		      <th scope="col" style="width: 400px;">DESCRIÇÃO</th>
		      <th scope="col"><center>QUEM CADASTROU</center></th>
		      <th scope="col"><center>AÇÃO</center></th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    	<?php

		    		include 'conexao.php';
		    		$sql = "SELECT * FROM `tb_item` WHERE tipo_item != 'dispositivo' ORDER BY tipo_item ASC";
		    		$busca = mysqli_query($conexao,$sql);

		    		while ($array = mysqli_fetch_array($busca)) {
		    			$id_sala 			=	$array['id_item'];
		    			$sala				=	$array['tipo_item'];
		   				$descricao_sala		=	$array['descricao_item'];
		   				$responsavel		=	$array['quem_cadastrou'];

		    		?>
					<tr>
		      		<!--<td style="background-color: #F0F8FF;"><?php echo $id_sala									?></td>-->
		      		<td style="background-color: #F0F8FF;"><?php echo $sala 			 						?></td>
		      		<td style="background-color: #F0F8FF;" style="width: 400px;"><?php echo $descricao_sala		?></td>
		      		<td style="background-color: #F0F8FF;"><center><?php echo $responsavel			 					?></center></td>

		      		<td style="background-color: #F0F8FF;"><center>
		      			<a class="btn btn-warning btn-sm" href="editar_sala_disp.php?id_sala=<?php echo $id_sala ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

		      			<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_sala_disp.php?id_sala=<?php echo $id_sala ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

		      		</center></td>

		      	<?php } ?>

		    </tr>
		  </tbody>
	</div>
	<div class="container">
		<table class="table">
		  <thead style="background-color: #ffc107;">
		    <tr>
		      <!--<th scope="col">ID</th>-->
		      <th scope="col">DISPOSITIVO</th>
		      <th scope="col" style="width: 400px;">DESCRICAO</th>
		      <th scope="col"><center>QUEM CADASTROU</center></th>
		      <th scope="col"><center>AÇÃO</center></th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    	<?php

		    		include 'conexao.php';
		    		$sql = "SELECT * FROM `tb_item` WHERE tipo_item = 'dispositivo' ORDER BY descricao_item ASC";
		    		$busca = mysqli_query($conexao,$sql);

		    		while ($array = mysqli_fetch_array($busca)) {
		    			$id_sala 			=	$array['id_item'];
		    			$sala				=	$array['tipo_item'];
		   				$descricao_sala		=	$array['descricao_item'];
		   				$responsavel1		=	$array['quem_cadastrou'];

		    		?>
					<tr>
		      		<!--<td style="background-color: #F0F8FF;"><?php echo $id_sala									?></td>-->
		      		<td style="background-color: #F0F8FF;"><?php echo $sala 		 							?></td>
		      		<td style="background-color: #F0F8FF;" style="width: 400px;"><?php echo $descricao_sala		?></td>
		 			<td style="background-color: #F0F8FF;"><center><?php echo $responsavel1				 		 		?></center></td>

		      		<td style="background-color: #F0F8FF;"><center>
		      			<a class="btn btn-warning btn-sm" href="editar_sala_disp.php?id_sala=<?php echo $id_sala ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

		      			<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_sala_disp.php?id_sala=<?php echo $id_sala ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

		      		</center></td>

		      	<?php } ?>

		    </tr>
		  </tbody>
	</div>
	<!– Linkando scripts bootstrap –>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>