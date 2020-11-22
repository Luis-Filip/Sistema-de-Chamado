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
	<title>Menu</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

	<?php 
		$usuario = $_SESSION['login'];

		$sql = "SELECT categoria FROM tb_usuario WHERE login = '$usuario' AND status = 'ativo'";
		$buscar = mysqli_query($conexao,$sql);
		$array = mysqli_fetch_array($buscar);
		$nivel = $array['categoria'];
	?>

	<div class="container">
		<h4 style="color: #007bff;">Seja bem vindo <?php echo $_SESSION['login'];?>!</h4>
		<a id="formLogin" href="logout.php">Sair</a>
	</div>
	<h1 id="formTitulo">Menu</h1>
	<div class="container">
		<?php 
			if (($nivel == 0)||($nivel == 1)) {
		?>
			<div style="margin-top: 50px">
				<div class="row">
				  <div class="col-sm-6">
				    <div class="card">
				      <div class="card-body" style="background-color: #F0F8FF;">
				        <h5 class="card-title">Emitir Solicitação</h5>
				        <p class="card-text">Aqui você poderá emitir solicitações para reservar uma sala, reportar ao setor de Tecnologia sobre um dispositivo de sala que precisa de reparos ou emitir uma solicitação de compra de novos dispositivos. É possível somente enviar solicitações.</p>
				        <center><a href="pagina_chamado.php" class="btn btn-primary" style="width: 250px;">Abrir</a></center>
				      </div>
				    </div>
				  </div>
				  <?php } ?>
				  <?php 
			if ($nivel == 1) {
		?>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Suas Solicitações</h5>
			        <p class="card-text">Aqui você terá acesso as solicitações que você emitiu, podendo visualizar todas as solicitações. Você poderá editar e excluir solicitações que ainda não foram atendidas. Solitações atendidas não será mais editável </p>
			        <center><a href="minhas_solicitacoes.php" class="btn btn-primary" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Lista dos Chamados</h5>
			        <p class="card-text">Aqui você terá acesso de poder administrativo, podendo visualizar todos as solicitações, alterá-las e anexar os devidos responsáveis técnicos. A tela de cor amarela representa que você tem acesso privilegiado</p>
			        <center><a href="listar_chamado.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
		<div style="margin-top: 20px">
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Cadastrar Salas ou Dispositivos</h5>
			        <p class="card-text">Precisou realizar compra de dispositivos? Então cadastre-os aqui e mantenha seu estoque sempre atualizado em relação ao estoque físico.</p>
			        <center><a href="cadastro_sala_disp.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Lista de Salas e Dispositivos</h5>
			        <p class="card-text">Consulte os dispositivos cadastrados, faça as devidas alterações necessárias para manter a integridade do mesmo.</p>
			        <center><a href="listar_sala_disp.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
		<div style="margin-top: 20px">
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Cadastrar Usuário</h5>
			        <p class="card-text">Sempre que uma nova pessoa for utilizar o sistema faça o cadastro dela para ela ter acesso ao formulário de solicitação.</p>
			        <center><a href="cadastro_usuario.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Lista dos Usuários</h5>
			        <p class="card-text">Consulte todas as pessoas que estão utilizando o sistema. Você também pode editar o usuário delas.</p>
			        <center><a href="listar_usuario.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
		<div style="margin-top: 20px">
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Cadastrar Técnico</h5>
			        <p class="card-text">Sempre que um novo técnico for utilizar o sistema faça o cadastro dele para garantir a integridade do sistema, pois seu nome é registrado.</p>
			        <center><a href="cadastro_tecnico.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
		<?php } ?>
		<?php
			if ($nivel == 0) {
		?>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body" style="background-color: #F0F8FF;">
			        <h5 class="card-title">Lista dos Técnicos</h5>
			        <p class="card-text">Consulte todas os técnicos que estão utilizando o sistema. Você também pode editar o usuário deles.</p>
			        <center><a href="listar_tecnico.php" class="btn btn-warning" style="width: 250px;">Abrir</a></center>
			      </div>
			    </div>
			  </div>
			  <?php } ?>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>