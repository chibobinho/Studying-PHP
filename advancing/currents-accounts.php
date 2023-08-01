<?php

$Account1 = [
    "Holder" => "Yuri",
    "Balance" => 2000
];

$Account2 = [
    "Holder" => "Fabricio",
    "Balance" => 500
];

$Account3 = [
    "Holder" => "Monteiro",
    "Balance" => 1000
];

$currentsAccounts = [$Account1, $Account2, $Account3];

for ($i=0; $i < count($currentsAccounts) ; $i++) { 
    echo $currentsAccounts[$i] ["Holder"] . PHP_EOL;
}