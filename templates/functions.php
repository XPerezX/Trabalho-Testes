<?php


function Validate(string $nome, string $descricao, $administrador){
    $caracteresEspeciaiseNumeros = ['[',']','&','#','%','/','$','!','@','*','\/','?','0','1','2','3','4','5','6','7','8','9','|'];
    $caracteresEspeciais = ['[',']','&','#','%','/','$','!','@','*','?','+','-','_','|','\/'];
    $nomeArray = str_split($nome);
    $descricaoArray = str_split($descricao);
    $findInArray1 = false;
    $findInArray2 = false;
    $nomeValido = false;
    $descricaoValido = false;
    $data_de_criacao = date("Y-m-d"); 
    if (empty($nome) == false and empty($descricao) == false){
        foreach ($nomeArray as $value ){
            
            $car = in_array($value, $caracteresEspeciaiseNumeros);
            if ($car == true){
                $findInArray1 = true;
            break;
            }
        }
        if ($findInArray1 == false){
        $nomeValido = true;
        }else{

            echo '<div class="alert alert-danger" role="alert">
            Nome de Grupos não pode conter numeros ou caracteres especiais
        </div>';
        return false;
        }

        foreach ($descricaoArray as $value ){       
            $car2 = in_array($value,  $caracteresEspeciais);
            if ($car2 == true){
                $findInArray2 = true;
            break;
            }
        }
        
        if ($findInArray2 == false){
            $descricaoValido = true;
            }else{

            echo '<div class="alert alert-danger" role="alert">
        Descrição não pode conter  caracteres especiais
        </div>';

        return false;
        }
        
        if($nomeValido == true and $descricaoValido == true){

            return true;
        }
    }else{

        echo '<div class="alert alert-danger" role="alert">
        É obrigatorio preencher os campos!
        </div>';
        return false;
    }
}


function ValidateAtua(int $id,string $nome, string $descricao, $administrador){
    $caracteresEspeciaiseNumeros = ['[',']','&','#','%','/','$','!','@','*','?','+','-','_','|','\/','0','1','2','3','4','5','6','7','8','9'];
    $caracteresEspeciais = ['[',']','&','#','%','/','$','!','@','*','?','+','-','_','|','\/'];
    $nomeArray = str_split($nome);
    $descricaoArray = str_split($descricao);
    $findInArray1 = false;
    $findInArray2 = false;
    $nomeValido = false;
    $descricaoValido = false;
   
    foreach ($nomeArray as $value ){
        
        $car = in_array($value, $caracteresEspeciaiseNumeros);
        if ($car == true){
            $findInArray1 = true;
           break;
        }
    }
    if ($findInArray1 == false){
    $nomeValido = true;
    }else{

        echo '<div class="alert alert-danger" role="alert">
       Nome de Grupos não pode conter numeros ou caracteres especiais
      </div>';
    }

    foreach ($descricaoArray as $value ){       
        $car2 = in_array($value,  $caracteresEspeciais);
        if ($car2 == true){
            $findInArray2 = true;
           break;
        }
    }
    
    if ($findInArray2 == false){
        $descricaoValido = true;
        }else{

        echo '<div class="alert alert-danger" role="alert">
       Descrição Não pode conter caracteres especiais
      </div>';

    }

    if($nomeValido == true and $descricaoValido == true){
        return true;
    }else{
        return false;
    }

}



?>