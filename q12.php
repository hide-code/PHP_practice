<?php

function distinguishNum ($val){
    if ($val % 2 === 0){
        return $val.'は偶数です。';
    } else {
        return $val.'は奇数です。';
    }
}
$num1 = 11;
$num2 = 24;
echo distinguishNum($num1);
echo distinguishNum($num2);