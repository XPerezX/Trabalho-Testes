<?php
	// includes
	include 'db.php';
	include 'colecionador_mock.php';
	include 'functions.php';
	//Condição que escuta a alteração de valores através do submit
	if (isset($_POST['nome'])){
		// Declarando variaveis para ser mais facil passar na funcao de validacao
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$data_de_criacao = date("d-m-Y"); 
		$administrador = $_POST['administrador'];
		//Funcao que valida os campos para ser adicionado no banco
		Validate($nome, $descricao, $administrador);
	}
?>
<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Cadastro de Grupos</title>
</head>
<body>
	<center> 
		<div class="container" style="margin-top:25px">
			<div class="card" style="width: 30rem;">
				<div class="card-body">
					<h1>Cadastro de Grupos</h1>
						<form method="post" action="">
							<div class="form-group">
								<label for= "nome">Nome do Grupo:</label>
								<input style = "max-width:50%" class="form-control" type="text" name="nome">
							</div>
								<div class="form-group">
								<label for= "descricao">Descrição:</label>
									<input style = "max-width:50%" class="form-control"  type="text" name="descricao">
							</div>
								<div class="form-group">
								<label for="administrador">Selecione o Administrador:</label>
									<select style = "max-width:50%"class="form-control" name="administrador">
									<?php
									//Parte do codigo que lista os colecionadores do banco de dados 
										include 'db.php';
										$sql = "SELECT registration ,FULLNAME FROM collectors ORDER BY registration"; //puxa os nomes dos colecionadores 
										$con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));			//Executa a consulta no banco
										while($dados = mysqli_fetch_assoc($con)) { 	//pega os resultados em forma de matriz
											$c = $dados ["FULLNAME"];
											echo "<option value=$c>	$c</option>";
										}
									?>
									</select>
								</div>	
								<button type="submit" class="btn btn-primary" style="margin-bottom:5px">Cadastrar</button>	
							</form>
						<a href="../index.php"><input type="submit" value="Voltar" class="btn btn-primary"></a>
					</div>
				</div>
			</div>
	</center>				
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>