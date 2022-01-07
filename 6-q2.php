<?php
// Your code here!
$PersonalInfos = [
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
echo $PersonalInfos[1]['name'].'の電話番号は'.$PersonalInfos[1]['tel'].'です。'."\n"."\n";


foreach($PersonalInfos as $key=>$value){
    
    $number = $key + 1;
    echo $number.'番目の'.$value['name'].'さんのメールアドレスは'.$value['mail'].'で電話番号は'.$value['tel'].'です。'."\n";
    
}

echo "\n";

$ageList = [25, 30, 18];
foreach($ageList as $key=>$val){
    $PersonalInfos[$key]['age'] = $val;
}
var_dump($PersonalInfos);
