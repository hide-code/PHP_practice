<?php

$Prefectures = ['東京' => '新宿' , '神奈川' => '横浜', '埼玉' => 'さいたま', '千葉' => '千葉', '栃木' => '宇都宮', '茨城' => '茨城', '群馬' => '前橋' ,'愛知' =>'名古屋', '京都' =>'京都'];
$kantou = ['東京', '神奈川', '栃木', '千葉', '茨城', '埼玉', '群馬'];
foreach ($Prefectures as $ken => $shi) {
  
    if (in_array($ken, $kantou)){
        echo $ken.'県の県庁所在地は、' .$shi. '市です。'."\n";
    } else {
         echo $ken.'県は関東地方ではありません。'."\n";
    }
}
