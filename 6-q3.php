<?PHP
//日時を加算変更するmodifyメソッド
//指定したformatで返す
$date = new DateTime('2021-03-02');
echo $date->modify('-1 month')->format('Y-m-d')."\n";

// $diffはDateIntervalクラスのインスタンス
//　２つのふたつの DateTime オブジェクトの差を返す
$date1 = new DateTime('2021-03-02');
$date2 = new DateTime('1992-04-25');

$diff = $date1->diff($date2);

echo 'あの日から'.abs($diff->format('%R%a')).'日経過ました。';

