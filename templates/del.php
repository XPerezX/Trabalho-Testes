<?php
	// Include que tem a conexão com o banco de dados
	include 'db.php';
	// Selecionar todos os dados de grupo
	$sql = "SELECT * FROM grupo";
?>

<?php
	$id = $_GET['id'];
	$sql = mysqli_query($conexao, "DELETE FROM grupo WHERE id=".$id); // Deleta só o grupo selecionado pelo ID 
	header("Location: http://localhost/Trabalho-Testes/templates/lista.php");
?>
