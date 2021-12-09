e<?php

$numeroFuncionario   = fgets(STDIN);
$horaTrabalho        = fgets(STDIN);
$valorPorHora        = fgets(STDIN); 

$salario = number_format($horaTrabalho * $valorPorHora, 2, '.', '');

echo "NUMBER = $numeroFuncionario";
echo "SALARY = U$ $salario\n"

?>