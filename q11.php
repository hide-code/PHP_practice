<?php
function calcTaxInPrice($price)
{
    return $price * 1.1; // echoだった箇所をreturnに置き換え
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';