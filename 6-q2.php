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


foreach($personalInfos as $person=>$information){
    $person_number = $person + 1;
    echo $person_number . '番目の' . $information['name'] . 'さんのメールアドレスは'.$information['mail'] . 'で電話番号は'.$information['tel'] . 'です。' . "\n";
}

$ageList = [25, 30, 18];

foreach($ageList as $person=>$person_age){
    $personalInfos[$person]['age'] = $person_age;
}

var_dump($personalInfos);
