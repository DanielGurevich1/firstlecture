<?php

// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

echo '<br>'."task 3".'<br>';

$array = ['A', 'B', 'C', 'D'];
$aa = 0;
$bb = 0;
$cc = 0;
$dd = 0;
$newArray = [];
for($i = 0; $i < 200; $i++) {
    $randomElement = $array[array_rand($array)];
    // echo '<pre>';
    print_r($randomElement);
    array_push($newArray, $randomElement);
if ($randomElement == 'A') $aa++;
if ($randomElement == 'B') $bb++;
if ($randomElement == 'C') $cc++;
if ($randomElement == 'D') $dd++;
}
echo '<br>';
echo "$aa.$bb.$cc.$dd";
echo '<br>';
echo $aa + $bb + $cc + $dd;
echo '<br>';
echo $randomElement;

echo '<br>'."task 4".'<br>';

array_multisort($newArray) ;
echo '<pre>';
print_r($newArray);

// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.
echo '<br>'."task 5".'<br>';
echo '<br>'."Array1".'<br>';
$array1 = ['A', 'B', 'C', 'D'];
$newArray1 = [];
for($i = 0; $i < 200; $i++) {
    $randomElement1 = $array[array_rand($array1)];
    echo $randomElement1;
    array_push($newArray1, $randomElement1);
    echo ',';
}  
echo '<br>'."Array2".'<br>';
// $array2 = ['A', 'B', 'C', 'D'];
$newArray2 = [];
for($i = 0; $i < 200; $i++) {
    $randomElement2 = $array[array_rand($array1)];
    echo $randomElement2;
    array_push($newArray2, $randomElement2);
    echo ',';
}  
echo '<br>'."Array3".'<br>';
// $array3 = ['A', 'B', 'C', 'D'];
$newArray3 = [];
for($i = 0; $i < 200; $i++) {
    $randomElement3 = $array[array_rand($array1)];
    echo $randomElement3;
    array_push($newArray3, $randomElement3);
echo ',';
}  
echo '<br>'."Merge of 3 Arrays matching values".'<br>';

$newABCDarray = [];
for ($i = 0; $i < 200; $i++) {
    $newValue = $newArray1[$i].$newArray2[$i].$newArray3[$i];
    array_push($newABCDarray, $newValue);
}
print_r($newABCDarray);
echo '<br>';

$combinations = array_count_values($newABCDarray);
echo '<pre>'.
print_r($combinations);
// $result = array_merge($newArray1, $newArray2, $newArray3);
// print_r($result);
$rezultUnique = array_unique($newABCDarray);
print_r($rezultUnique);

?>