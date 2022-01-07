<?php

echo '1から100までのFizzBuzzを実行します '."\n";

for ($i = 1; $i < 100; $i++) {
    if ($i % 15 === 0){
        echo 'FizzBuzz'."\n";
        continue;
    } elseif ($i % 3 === 0) {
        echo 'Fizz'."\n";
        continue;
    } elseif ($i % 5 === 0) {
        echo 'BUzz'."\n";
        continue;
    } else {
        echo $i."\n";
    }
    
}