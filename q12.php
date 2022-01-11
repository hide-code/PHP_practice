<?php

function distinguishNum($number) {
    if ($number % 2 === 0){
        return $number . 'は偶数です。';
    } else {
        return $number . 'は奇数です。';
    }
}

$num1 = 11;
$num2 = 24;
echo distinguishNum($num1);
echo distinguishNum($num2);