<?php

// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).


echo '<br>'."task 6".'<br>';

$arrayFirst = [];
  for ($i = 0;$i <= 100;$i++){
      $a = rand(100, 999);
      array_push($arrayFirst, $a);
    
} 
echo '<pre>';
print_r($arrayFirst);
echo '<br>';
$arraySecond = [];
  for ($i = 0;$i <= 100;$i++){
      $a = rand(100, 999);
      array_push($arraySecond, $a);
    
} 
echo '<pre>';
print_r($arraySecond);
echo '<br>';

$rezultUnique = array_unique($arrayFirst);
print_r($rezultUnique);
$rezultUnique = array_unique($arraySecond);
print_r($rezultUnique);

echo '<br>'."task 7".'<br>';
// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
$intersectArray = array_intersect($arrayFirst, $arraySecond);
echo '<pre>';
print_r($intersectArray);
echo '<br>';
$intersectArray = array_intersect($arraySecond, $arrayFirst);
echo '<pre>';
print_r($intersectArray);
echo '<br>';

echo '<br>'."task 8".'<br>';

$diff = array_diff($arrayFirst, $arraySecond);
echo '<pre>';
print_r($intersectArray);
echo '<br>';

// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
echo '<br>'."task 9".'<br>';
$combine = array_combine($arrayFirst, $arraySecond);
echo '<pre>';
print_r($combine);
echo '<br>';
?>

<!-- $arr_05 = [];

foreach($arr_01 as $key => $value) {​​

    $arr_05[$value] = $arr_02[$key];

}​​ -->