<?php
// phpinfo();
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];
foreach(range(1, 30) as $val){
    $masyvas[] = rand(5,25);
}
echo '<pre>';

echo '<br>'.'Home work Arrays, task nr. 1';

$countA = 0;
foreach($masyvas as $val){
    if ($val > 10) {
        $countA++;
    }
}

echo '<pre>';
print_r($masyvas);
echo '<br>';
echo 'Home work Arrays, task nr. 2.1';
echo '<br>';
echo "Reksmiu didesniu uz 10 yra: $countA";
echo '<br>';

echo "Reksmiu suma yra: ";
print_r(array_sum($masyvas));
echo '<br>';
echo "Max skaicius yra: ";
echo max($masyvas);
echo '<br>';

echo "2.d".'<br>';
// Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$arraynew = [];
  for ($i = 0;$i <= 29;$i++){
      $a = rand(5, 25);
      echo $a.'->'.'<br>';
      array_push($arraynew, ($a - $i));
    
} 

echo '<pre>';
print_r($arraynew);
// end of 2.d
    echo "2.e".'<br>';
        for ($i = 0;$i <= 9;$i++)
            array_push($masyvas, rand(5, 25));
        echo '<pre>';
    print_r($masyvas);
    echo '<br>';
echo "2.F".'<br>';
// Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
function odd($var) {
    return $var & 1;
}
function even($var){
    return!($var&1);
}
print_r(array_filter($masyvas, "odd"));

echo '<br>';
print_r(array_filter($masyvas, "even"));

echo '<br>';

echo '<br>';
echo "2.G".'<br>';
// Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach($masyvas as $index => $value) {
   if($index > 15 && ($index % 2 ==0)) $value = '0';
    echo '<br>';
    print_r($index.'==>'.$value);
}
echo '<br>';
echo "2.H".'<br>';
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
foreach($masyvas as $value) {
    
    
}
$key = array_search(($value > 10), $masyvas).'<br>';
echo '<br>'.$key;
echo '<br>';
echo "2.I".'<br>';

foreach($masyvas as $index => &$value) {
    // echo "$index.'==>'.$value";
}
if($index % 2 ==0) unset($index, $value);
echo '<br>';
print_r($masyvas);
echo '<br>'.'Ciklo pabaiga';



// array_multisort($array_var) ;
// echo '<pre>';
// print_r($array_var);
// echo  $array[28];
// echo '<br>';
// // $result = array_unique($array_var);
// // print_r($result);