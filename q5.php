<?php

$device = 'mac';

if ($device === 'windows'){
    echo '使用OSはwindowsです。';
} else {
    if ($device === 'mac'){
        echo '使用OSはmacです。';
    } else {
         echo 'どちらでもありません。';
    }
    
}