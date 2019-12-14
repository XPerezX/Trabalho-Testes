<?php




function Validate(string $nome, string $descricao){
    $caracteresEspeciais = ['$','!','@','*','?'];
    $nomeArray = str_split($nome);
    foreach ($nomeArray as $value ){
        
        $car = in_array($value, $caracteresEspeciais);
        if ($car == true){

            $boleano1 = true;
         
        }
        } 




}


?>