<?php
	include 'db.php';
	include 'colecionador_mock.php';
	include 'functions.php';
	$sql = "SELECT * FROM grupo WHERE id=$_GET[id]";
	$con = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
	  
	if(!empty($_POST['nome'])) {
		$nome 	= $_POST['nome'];
		$descricao 	= $_POST['descricao'];
		$administrador = $_POST['colecionador_administrador'];
		
		$id = $_GET['id'];
		
		
		ValidateAtua($id, $nome, $descricao, $administrador);
		
	}

	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Atualizar Cliente</title>
		 <!-- Bootstrap CSS -->
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body>

	<center> 
  <div class="container" style="margin-top:25px">
  <div class="card" style="width: 30rem;">
  <div class="card-body">
  
 <center> 
		<h1>Atualizar Cliente</h1></center>
		<center>
			<form method="post" action="">
				<?php if($dados = mysqli_fetch_array($con)) { ?>
			
					<div class="form-group">
						<label for= "nome">Nome do Grupo:</label>
						<input type="text" style = "max-width:50%" class="form-control" name="nome" value=<?php echo $dados['nome']; ?>>
					</div>
						

					<div class="form-group">
						<label for= "descricao">Descrição:</label>
						<input type="text" style = "max-width:50%" class="form-control"  name="descricao" value=<?php echo $dados['descricao']; ?>>
					</div>
						

					<div class="form-group">
						<label for="administrador">Selecione o Administrador:</label>
							<select  style = "max-width:50%" class="form-control"  name="colecionador_administrador">
							<?php
				include 'db.php';
				$sql = "SELECT registration ,FULLNAME FROM collectors ORDER BY registration";
				$con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
				
				while($dados = mysqli_fetch_assoc($con)) { 
					$c = $dados ["FULLNAME"];
					echo "<option value=$c>	$c</option>";
				}
		?>
							</select>
				
					</div>


				
				<button type="submit" class="btn btn-primary" value="Atualizar" style="margin-bottom:5px">Atualizar</button>
				<?php } ?>
			</form>
			<a class="btn btn-primary" href="lista.php">Voltar</a>
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