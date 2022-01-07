<?php

$grade = 'C';
evaluateGrade($grade);

$grade = 'A';
evaluateGrade($grade);

function evaluateGrade($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            echo '合格です。' . "\n";
            break;
        case 'C':
            echo '合格ですが追加課題があります。' . "\n";
            break;
    
        case 'D':
            echo '不合格です。' . "\n";
            break;
    
        default:
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            break;
    }
}