<?php
// include
	include 'db.php';
	include 'colecionador_mock.php';
	include 'functions.php';
	//criando grupo no banco de dados.
	if (isset($_POST['nome'])){
	
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$administrador = $_POST['administrador'];
		

		Validate($nome, $descricao, $administrador );
		//$sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
		//mysqli_stmt_bind_param($sql, 'ssss', $nome, $descricao, $data_de_criacao, $administrador);

		//mysqli_stmt_execute($sql);

		//header("Location: http://localhost/testes-grupos/templates/lista.php");
		
		//header("Location: http://localhost/crud/templates/lista.php");
		
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CADASTRO</title>
  </head>
  <body>
  <center> 
  <div class="container" style="margin-top:25px">
  <div class="card" style="width: 30rem;">
  <div class="card-body">
  
 <center> <h1>Cadastro de Clientes</h1></center>
 <center>	
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
			for($i = 0; $i < count($colecionadores); $i++){

				$c = strval($colecionadores[$i]);
				echo "<option value=$c>	$colecionadores[$i]</option>";
				}		
		?>
		</select>
			</div>
						
			
		<button type="submit" class="btn btn-primary" style="margin-bottom:5px">Cadastrar</button>

			
			</form>

		<a href="../index.php"><input type="submit" value="Voltar" class="btn btn-primary"></a></center>
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