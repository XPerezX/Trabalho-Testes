<?php
    function teste100Dados() {
        for ($i = 1; $i <= 100; $i++) {
            include 'db.php';
            $sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($sql, 'ssss', $i, $i, $i, $i);
            mysqli_stmt_execute($sql);
        }
    }

    function teste1000Dados() {
        for ($i = 1; $i <= 1000; $i++) {
            include 'db.php';
            $sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($sql, 'ssss', $i, $i, $i, $i);
            mysqli_stmt_execute($sql);
        }
    }

    function teste10000Dados() {
        for ($i = 1; $i <= 10000; $i++) {
            include 'db.php';
            $sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($sql, 'ssss', $i, $i, $i, $i);
            mysqli_stmt_execute($sql);
        }
    }

    //teste100Dados();
    //teste1000Dados();
    //teste10000Dados();
    /*

    Sistema consegue armazenar ate 100 dados rapidamente dentre de aproximadamente 3 segundos


    Sistema consegue armazenar em torno de 1000 dados entorno de 15 segundos

    Sistema não conseguiu armazenar 10000 dadods, apenas inseriu ate 2012 dentro de 31 segundos.

    Sistema não conseguiu novamente ao tentar armazenar 10000 dados simultaneos, apenas inseriu 2197 em 35 segundos

    Conclui se que a capacidade é de aproximadamente 2000 dados.

    */
?>