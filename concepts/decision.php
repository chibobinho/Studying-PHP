<?php 

$age = 18;

echo "You can only enter if you are over 18 years old." . PHP_EOL . PHP_EOL;

if ($idade >= 18){
    echo "You have $age years" . PHP_EOL;
    echo "You may come in!";
}

else {
    echo "You have $age years" . PHP_EOL;
    echo "You CANNOT enter!";
}