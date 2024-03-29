<?php
    // Função que valida cadastros
    function Validate(string $nome, string $descricao,string $administrador) {
        $data_de_criacao = date("d-m-Y"); 
        // Include com conexão com o banco de dados
        include 'db.php';
        $sql = "SELECT registration ,FULLNAME FROM collectors  WHERE fullName like '%".$administrador."%' ";  /* Seleciona o administrador
        escolhido para o grupo */
        $con = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
        $dados = mysqli_fetch_assoc($con);  // Declara uma variável que recebe o administrador se existir
        // Condição que verifica se o administrador realmente existe no banco e se não estiver imprime no banco
        if ($dados != null) {             
        // Condição que verifica se os valores do campo são nulos e se estiver imprime alerta
            if (empty($nome) == false and empty($descricao) == false) {
            /* Condição que verifica se há caracteres especiais nos campos e se tiver imprime alerta, caso contrario permite inserir
            no banco e redireciona para lista de grupos */
                if(preg_match("/^[0-9a-zA-Z\s]+$/", $nome) && preg_match("/^[0-9a-zA-Z\s]+$/", $descricao)) {
                    include 'db.php';
                    $sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
                    mysqli_stmt_bind_param($sql, 'ssss', $nome, $descricao, $data_de_criacao, $dados ["FULLNAME"]);
                    mysqli_stmt_execute($sql);
                    header("Location: http://localhost/Trabalho-testes/templates/lista.php");
                    return true;
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                        Campos não podem conter caracteres especiais!
                    </div>';
                    return false;
                }
            } else {
                 echo '<div class="alert alert-danger" role="alert">
                    É obrigatorio preencher os campos!
                </div>';
                return false;
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
                Não foi possível achar na base de dados o colecionador!
            </div>';
            return false;
        }           
    }

    // Função que valida a modificação de dados
    function ValidateAtua(int $id,string $nome, string $descricao, $administrador) {
         // Include com conexão com o banco de dados
        include 'db.php';
        $sql = "SELECT registration ,FULLNAME FROM collectors  WHERE fullName like '%".$administrador."%' "; /* Seleciona o administrador
        escolhido para o grupo */
        $con = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));  // Declara uma variável que recebe o administrador, se existir
        $dados = mysqli_fetch_assoc($con);                                      
        // Condição que verifica se o administrador realmente existe no banco e se não estiver imprime no banco
        if ($dados != null) {
            // Condição que verifica se os valores do campo são nulos e se estiver imprime alerta
            if (empty($nome) == false and empty($descricao) == false) {
                /* Condição que verifica se há caracteres especiais nos campos e se tiver imprime alerta, caso contrario permite inserir
                no banco e redireciona para lista de grupos */
                if(preg_match("/^[0-9a-zA-Z\s]+$/", $nome) && preg_match("/^[0-9a-zA-Z\s]+$/", $descricao)) {
                    $sql = mysqli_prepare($conexao, "UPDATE grupo SET nome = ?, descricao = ?, colecionador_administrador = ? WHERE id=".$id);
                    mysqli_stmt_bind_param($sql, 'sss', $nome, $descricao, $dados["FULLNAME"]);
                    mysqli_stmt_execute($sql);
                    header("Location: http://localhost/Trabalho-Testes/templates/lista.php");
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                        Insira dados válidos!
                    </div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    É obrigatorio preencher os campos!
                </div>';
                return false;
            }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    Não foi possível encontrar na base de dados o colecionador!
                </div>';
                return false;
            }
        }
?>