<?php 

function info(string $name, int $birthYear){
    $age= date('Y')- $birthYear;
    echo "hello $name, you are $age years old";
}

info("tabira", 1990);
?>