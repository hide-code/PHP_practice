<?PHP

$date = new DateTime('-1 month');
echo $date->format('Y-m-d') . "\n";

$now = new DateTime('2021-03-02');
$past = new DateTime('1992-04-25');
$diff = $now->diff($past);

echo 'あの日から' . $diff->format('%a') . '日経過ました。';