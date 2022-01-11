<?php

$prefectures = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '埼玉' => 'さいたま市',
    '千葉' => '千葉市',
    '栃木' => '宇都宮市',
    '茨城' => '茨城市',
    '群馬' => '前橋市',
    '愛知' =>'名古屋市',
    '京都' =>'京都市'
];

$kanto = ['東京', '神奈川', '栃木', '千葉', '茨城', '埼玉', '群馬'];

foreach ($prefectures as $prefecture => $city) {
    if (in_array($prefecture, $kanto)){
        echo $prefecture . '県の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $prefecture . '県は関東地方ではありません。' . "\n";
    }
}

