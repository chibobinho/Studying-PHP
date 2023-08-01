<?php 

// A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9

$number = 5;

for ($i=1; $i <= 10; $i++) { 
    $result = $number * $i;
    echo "$number x $i = $result" .  PHP_EOL;
}