<?php

$prefectures = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '埼玉' => 'さいたま市',
    '千葉' => '千葉市',
    '栃木' => '宇都宮市',
    '茨城' => '茨城市',
    '群馬' => '前橋市'
];

foreach ($prefectures as $prefecture => $city) {
    echo  $city . "\n";
}

