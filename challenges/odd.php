<?php

// O primeiro desafio será executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100

// 1° forma: (ele vai pulando do 1 de 2 em 2)
// for ($i = 1; $i <= 100 ; $i = $i + 2) { 
//     echo $i . PHP_EOL;
// }

// 2° forma: (se resto da divisão for diferente de 0 ele escreve os numeros)
// for ($i = 0; $i <= 100; $i++) {
//     if ($i % 2 != 0) {
//         echo $i . PHP_EOL;
//     } 
// }

// 3° forma: (se resto da divisão for igual a 0 ele ignora os numeros)
for ($i=0; $i <= 100 ; $i++) { 
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}