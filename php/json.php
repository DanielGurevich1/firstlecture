<?php

// $masyvas = [
//     'spalva' => 'pilka',
//     'tipas' => 'kate',
//     'charakteris' => 'geras',
//     'diena' => [
//         'mega', 
//         'eda',
//         'mega'
//     ]
// ];

// _d($masyvas);

// $stringas = json_encode($masyvas);
// 
// rasom i faila
// file_put_contents('kate.json', $stringas);
$stringas = file_get_contents('kate.json');

_d($stringas);
$masyvas = json_decode($stringas, 1);

_d($masyvas);

$masyvas['dienotvarke'][] = 'zaisti';
$masyvas['dienotvarke'][] = 'miegoti';

$stringas = json_encode($masyvas);

file_put_contents('kate.json', $stringas);