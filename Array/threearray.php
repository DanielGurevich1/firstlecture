<?php

$abcd = 'ABCD';
$rand1 = [];
$rand2 = [];
$rand3 = [];
for($i=0; $i<200; $i++){

$rand1[] = $abcd[rand(0,3)];
$rand2[]= $abcd[rand(0,3)];
$rand3[]= $abcd[rand(0,3)];
}

foreach($rand1 as $key => $val) {
    $bendrasmasyvas[] = $val.$rand2[$key].$rand3[$key];
}
_d($bendrasmasyvas);

$unique = [];
$po1karta = [];
foreach($bendrasmasyvas as $val) {
    if(!in_array($val, $unique)){
        $unique[]=$val; //pats sugeneruoja sekanti indeksa
    }
}
foreach($bendrasmasyvas as $key => $val) {
    unset($bendrasmasyvas[$key]);
    if(!in_array($val, $bendrasmasyvas)){
        $po1karta[]=$val; //pats sugeneruoja sekanti indeksa
    }
    $bendrasmasyvas[$key]=$val;
}
_dc(count($unique));
_dc(count($po1karta));