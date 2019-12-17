<?php
	include 'db.php';
	$sql = "SELECT * FROM grupo";
?>

<?php 
	$id = $_GET['id'];
	$sql = mysqli_query($conexao, "DELETE FROM grupo WHERE id=".$id);
	header("Location: http://localhost/Trabalho-Testes/templates/lista.php");
?>
