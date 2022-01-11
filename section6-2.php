<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

foreach($personalInfos as $index=>$information){
    $personNumber = $index + 1;
    echo $personNumber . '番目の' . $information['name'] . 'さんのメールアドレスは' . $information['mail'] . 'で電話番号は'.$information['tel'] . 'です。' . "\n";
}

$ageList = [25, 30, 18];

foreach($ageList as $index=>$personAge){
    $personalInfos[$index]['age'] = $personAge;
}

var_dump($personalInfos);
