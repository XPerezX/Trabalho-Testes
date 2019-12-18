<?php
    // Puxa as funções de validação
    include 'functions.php';
    // Funções para testes unitários que testam cada campo dos formulários
    function  Test1NumeroNome() {
        $val = Validate(1111, '1111', 'Ravix');
        if ($val == true) {
            echo "Teste Ok <br>:";
        } else {
            echo "Teste error <br>";
        }
    }

    function  Test2CampoVazio() {
        $val = Validate('', '', 'Ravix');
        if ($val == true) {
            echo "Teste Ok <br>";
        } else {
            echo "Teste error <br>";
        }
    }

    function  Test3DescricaoNum() {
        $val = Validate('Teste', 321, 'Ravix');
        if ($val == true) {
            echo "Teste Ok <br>";
        } else {
            echo "Teste error <br>";
        }
    }

    function  Test4DescriCaracter() {
        $val = Validate('Teste', '@#@', 'Ravix');
        if ($val == true) {
            echo "Teste Ok <br>";
        } else {
            echo "Teste error <br>";
        }
    }
   
    function  Test5EspecialNome() {
        $val = Validate('@#$$', '1111', 'Ravix');
        if ($val == true) {
            echo "Teste Ok <br>";
        } else {
            echo "Teste error <br>";
        }
    }

    function  Test6EspecialNome() {
        $val = Validate('dawdwa', 'dawdaw', 'David');
        if ($val == true) {
            echo "Teste Ok <br>";
        } else {        
            echo "Teste error <br>";
        }
    }

    Test1NumeroNome();
    Test2CampoVazio();
    Test3DescricaoNum();
    Test4DescriCaracter();
    Test5EspecialNome();
    Test6EspecialNome();

    /*
    --------- Resultados Dos Testes ---------

    Teste 1
    TesteNumeroNome() - Nome de Grupos não pode conter numeros ou caracteres especiais  ""Teste error""    (Esperado)

    Teste 2 
    Test2CampoVazio() - É obrigatorio preencher os campos!  ""Teste error""       (Esperado)

    Teste 3 
    Test3DescricaoNum() - CADASTRADO COM SUCESSO! ""Teste Ok""   (Esperado)

    Teste 4 
    Test4DescriCaracter() - Descrição não pode conter caracteres especiais ""Teste error"" (Esperado)

    Teste 5 
    Test5EspecialNome() - Nome de Grupos não pode conter numeros ou caracteres especiais Teste error

    Teste 6 
    Test6EspecialNome() - Não foi possível achar na base de dados o colecionador! Teste error

    */
?>