<?php
	//Include que tem a conexão com o banco
	include 'db.php';
	//Selecionar todos so dados de grupo
	$sql = "SELECT * FROM grupo";
?>

<?php
	
	$id = $_GET['id'];
	$sql = mysqli_query($conexao, "DELETE FROM grupo WHERE id=".$id);			//deleta só o grupo selecionado pelo Id 
	header("Location: http://localhost/Trabalho-Testes/templates/lista.php");
?>
