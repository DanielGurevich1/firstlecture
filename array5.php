<?php

echo '<br>'.'<h2>task 5.2.1</h2>';

$masyvas = [];
foreach(range(1, 10) as $index1 => $val1){
foreach(range(1, 5) as $index2 => $val2){
    $masyvas[$index1][$index2] = rand(5,25);
}
}
echo '<pre>';
print_r($masyvas) ;
// _dc($masyvas);

echo '<br>'.'<h2>task 5.2.2.a)</h2>';
$counter = 0;
foreach($masyvas as $smallArray){
foreach($smallArray as $value){
    if ($value > 10){
        $counter++;
    }
}
}
// echo $counter.'<br>';
echo '<pre>';
echo "masyve yra $counter  elementų didesnių už 10";
echo '<pre>';

echo '<br>'.'<h2>task 5.2.2.b)</h2>';
$max =  0;
foreach($masyvas as $value){
    foreach($value as $value1){
       if ($value1 > $max) {
           $max = $value1;
       }
    }
}
echo '<pre>';
echo 'max value in this array is:';
print_r($max);

echo '<br>'.'<h2>task 5.2.2.c)</h2>';

$mazasMasyvas = [];
$index2 = 0;
foreach ($masyvas as $index1=>$val1) {
  foreach ($val1 as $index2=>$value) {
    $mazasMasyvas[$index2]+=$value;
  }
}
 
print_r($mazasMasyvas);

