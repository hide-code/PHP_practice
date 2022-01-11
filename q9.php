<?php

$prefectures = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '埼玉' => 'さいたま市',
    '千葉' => '千葉市',
    '栃木' => '宇都宮市',
    '茨城' => '茨城市',
    '群馬' => '前橋市',
];

$kantoArea = $prefectures;

$prefectures['愛知'] =  '名古屋市';
$prefectures['京都'] =  '京都市';

foreach ($prefectures as $prefecture => $city) {
    if (array_key_exists($prefecture, $kantoArea)) {
        echo $prefecture . '県の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $prefecture . '県は関東地方ではありません。' . "\n";
    }
}

