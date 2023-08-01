<?php

$currentsAccounts = [
    "111.111.111-11" => [
        "Holder" => "Yuri",
        "Balance" => 2000
    ], 
    "222.222.222-22" => [
        "Holder" => "Fabricio",
        "Balance" => 500
    ], 
    "333.333.333-33" => [
        "Holder" => "Monteiro",
        "Balance" => 1000
    ],
];

$currentsAccounts[44444444444] = [
        "Holder" => "Luketa",
        "Balance" => 750
];

foreach ($currentsAccounts as $cpf => $Account) {
    echo $Account["Holder"] . PHP_EOL;
}