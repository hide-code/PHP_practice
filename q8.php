<?php

$prefectures = [
    '東京' => '新宿',
    '神奈川' => '横浜',
    '埼玉' => 'さいたま',
    '千葉' => '千葉',
    '栃木' => '宇都宮',
    '茨城' => '茨城',
    '群馬' => '前橋'
];

foreach ($prefectures as $prefecture => $city) {
    if ($prefecture === '埼玉'){
        echo $prefecture . '県の県庁所在地は、' . $city . '市です。';
    }
}

