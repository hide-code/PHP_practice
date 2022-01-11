<?php

$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}
    