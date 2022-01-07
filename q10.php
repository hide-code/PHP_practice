<?php
function hello($name){
    return $name . 'さん、こんにちは。' . "\n";
}

$name = '安藤';
echo hello($name);

$name = '金谷';
echo hello($name);