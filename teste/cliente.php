<?php

$salario = $_POST['salario'];
$reajuste = 0;

if($salario <= 3000){
    
    $reajuste = number_format($salario*1.5, 2, ',', '.');

}elseif($salario >= 3000.01 and $salario <= 10000){
    
    $reajuste = number_format($salario*1.2, 2, ',', '.');

}else{
    
    $reajuste = number_format($salario*1.15, 2, ',', '.');
}

echo json_encode("Seu salário passou de R$: ".number_format($salario, 2, ',', '.')."<br>". "Para R$: ".$reajuste);