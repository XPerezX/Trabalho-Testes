<?php
	include 'db.php';
	if (empty($_POST['search'])) {
		$sql = "SELECT * FROM grupo ORDER BY id";
		$con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
	} else {
		$procurar = $_POST['search'];
		$sql = "SELECT * FROM grupo WHERE nome like '%".$procurar."%' ";
		$con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
	}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="card text-center">
      <div class="card-body">
        <h1 class="card-title">Grupos</h1>
		<form class="bd-search d-flex align-items-center" style ="width:30%;"  role="search" id="nav-search-form" method="post" action="">
            <div class="">
                <button type="submit" class="btn btn-search pr-1">
                	<i class="fa fa-search search-icon"></i>
                </button>
            </div>
                <input type="text" class="form-control" placeholder="Pesquisar Nome do Grupo" name ="search">
                    <span class="algolia-autocomplete">
                        <button type="submit" class="btn btn-search pr-1"></button>
                    </span>
            </div>
        </form>
		<div class="table-responsive-sm">
  			<table class="table table-bordered">
				<tr>
					<center>
						<td><b>Código</b></td>
						<td><b>Nome do grupo</b></td>
						<td><b>Descrição</b></td>
						<td><b>Administrador</b></td>
						<td><b>Data de criação</b></td>
						<td><b>Modificar</b></td>
						<td><b>Deletar</b></td>
					</center>
				</tr>
    	</div>
		<!--h1>Lista de Clientes</h1>
		<hr-->
		<?php while($dados = mysqli_fetch_assoc($con)) { ?>
			<tr>
				<center>
					<td><b><?php echo $dados['id']; ?></b></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
					<td><?php echo $dados['colecionador_administrador']; ?></td>
					<td><?php echo $dados['data_de_criacao']; ?></td>
					<td><a href="atualizar.php?id=<?php echo $dados['id'] ?>"><i class="fas fa-edit"></i> </a></td>
					<td><a class="text-danger"  href="del.php?id=<?php echo $dados['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
				</center>
			</tr>	
		<?php } ?>
			</table>
		<a href="../index.php" class="btn btn-primary"></i>Voltar</a>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>