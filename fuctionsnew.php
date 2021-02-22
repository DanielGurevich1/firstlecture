<?php

function countDividers(int $num){
    $dividers = 0;
$arrayDividers = [];
// if (!is_int($num)) {
//     echo 'Entrer integer only';
// } else {
    for ($i=2; $i < $num; $i++) { 
        if ($num % $i ===0) {
            $dividers++;
            echo $i.'<br>';
        }
    }
    return $dividers; 
}