<?php 

$masyvas = [];
foreach(range(1, 10) as $index1 => $val1){
foreach(range(1, 5) as $index2 => $val2){
    $masyvas[$index1][$index2] = rand(5,25);
}
}
echo '<pre>';
print_r($masyvas) ;
foreach(range(1, 5) as $index1 => $val1){
    foreach(range(1, 2) as $index2 => $val2){
        // $masyvas[$index1][$index2] = rand(5,25);
        array_push($masyvas, range(1,5));
    }
    }

print_r($masyvas);