<?php

// A ideia é, a partir de uma altura e peso definidas, calcularmos o IMC. Para isso, você precisará pesquisar a fórmula na internet (que é bastante simples).

// A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário está abaixo, dentro ou acima do nível recomendado.

// A tabela:
// IMC              | CLASSIFICAÇÃO     | OBESIDADE(Grau)
// MENOR QUE 18,5	    MAGREZA	            0
// ENTRE 18,5 E 24,9	NORMAL	            0
// ENTRE 25,0 E 29,9	SOBREPESO	        I
// ENTRE 30,0 E 39,9	OBESIDADE	        II
// MAIOR QUE 40,0	    OBESIDADE GRAVE	    III

$nome = "Yuri";
$peso = 64;
$altura = 1.76;

$imc = $peso / $altura  **2;
$imc_formatado = number_format($imc, 1);

echo "Olá $nome! Seu IMC é de $imc_formatado" . PHP_EOL;
echo PHP_EOL;

if ($imc_formatado < 18.5){
    echo "Seu IMC é menor que 18,5." . PHP_EOL;
    echo "Classificação: Magreza." . PHP_EOL;
    echo "Obesidade(grau): 0" . PHP_EOL;
} else if($imc_formatado >= 18.5 && $imc_formatado < 24.9){
    echo "Seu IMC é entre 18,5 e 24,9." . PHP_EOL;
    echo "Classificação: Normal." . PHP_EOL;
    echo "Obesidade(grau): 0" . PHP_EOL;
} else if($imc_formatado >= 25 && $imc_formatado < 29.9){
    echo "Seu IMC é entre 25,0 e 29,9." . PHP_EOL;
    echo "Classificação: Sobrepeso." . PHP_EOL;
    echo "Obesidade(grau): I" . PHP_EOL;
} else if($imc_formatado >= 30 && $imc_formatado < 39.9){
    echo "Seu IMC é entre 30,0 e 39,9." . PHP_EOL;
    echo "Classificação: Obesidade." . PHP_EOL;
    echo "Obesidade(grau): II" . PHP_EOL;
} else if($imc_formatado > 40){
    echo "Seu IMC é maior que 40,0." . PHP_EOL;
    echo "Classificação: Obesidade grave." . PHP_EOL;
    echo "Obesidade(grau): III" . PHP_EOL;
}