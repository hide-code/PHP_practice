<?PHP
$date = new DateTime('2021-03-02');
echo $date->modify('-1 month')->format('Y-m-d')."\n";//1日後

$date1 = new DateTime('2021-03-02');
$date2 = new DateTime('1992-04-25');

$diff = $date1->diff($date2);
// $diffはDateIntervalクラスのインスタンス
echo 'あの日から'.abs($diff->format('%R%a')).'日経過ました。';

