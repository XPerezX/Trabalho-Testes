<?php
    include 'functions.php';
    

function  Test1NumeroNome(){

$val = Validate(1111, '1111', 'david');

    if ($val == true){
    echo "Teste Ok";
    }else{

        echo "Teste error";
    }
}

function  Test2CampoVazio(){

    $val = Validate('', '', 'david');
    
        if ($val == true){
        echo "Teste Ok";
        }else{
    
            echo "Teste error";
        }
    }

    function  Test3DescricaoNum(){

        $val = Validate('Teste', 321, 'david');
        
            if ($val == true){
            echo "Teste Ok";
            }else{
        
                echo "Teste error";
            }
        }

    function  Test4DescriCaracter(){

        $val = Validate('Teste', '@#@', 'david');
        
            if ($val == true){
            echo "Teste Ok";
            }else{
        
                echo "Teste error";
            }
        }


    
function  Test5EspecialNome(){

    $val = Validate('@#$$', '1111', 'david');
    
        if ($val == true){
        echo "Teste Ok";
        }else{
    
            echo "Teste error";
        }
    }
    

Test1NumeroNome();
Test2CampoVazio();
Test3DescricaoNum();
Test4DescriCaracter();
Test5EspecialNome();


/*
 ---------Resultados Dos Testes -------

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

*/

?>