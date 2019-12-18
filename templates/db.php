<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $banco = "cadastro";
   // Conexão com o banco de dados
   $conexao   = new MySQLi($host, $user, $pass, $banco);
   if($conexao  ->connect_error) {
      echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
   }  
?>