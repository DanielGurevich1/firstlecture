<?php

// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];
foreach(range(1, 30) as $val){
    $masyvas[] = rand(5,25);
}
echo '<pre>';
print_r($masyvas);
echo '<br>'.'Home work Arrays, task nr. 1';
  $array_var = [];
  for ($i = 0;$i <= 29;$i++){
      $a = rand(5, 25);
      array_push($array_var, $a);
      if ($a > 10) {
          $countA++;
      }
}
//perdaryti su foreach

echo '<pre>';
print_r($array_var);
echo '<br>';
echo 'Home work Arrays, task nr. 2.1';
echo '<br>';
echo "Reksmiu didesniu uz 10 yra: $countA";
echo '<br>';
// var_dump(count($array_var, $a > 10));
echo "Reksmiu suma yra: ";
print_r(array_sum($array_var));
echo '<br>';
echo "Max skaicius yra: ";
echo max($array_var);
echo '<br>';

echo "2.d".'<br>';

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
            array_push($array_var, rand(5, 25));
        echo '<pre>';
    print_r($array_var);
    echo '<br>';
echo "2.F".'<br>';
// Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
function odd($var) {
    return $var & 1;
}
function even($var){
    return!($var&1);
}
print_r(array_filter($array_var, "odd"));

echo '<br>';
print_r(array_filter($array_var, "even"));

echo '<br>';

echo '<br>';
echo "2.G".'<br>';
// Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach($array_var as $index => $value) {
   if($index > 15 && ($index % 2 ==0)) $value = '0';
    echo '<br>';
    print_r($index.'==>'.$value);
}
echo '<br>';
echo "2.H".'<br>';
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
foreach($array_var as $value) {
    
    
}
$key = array_search(($value > 10), $array_var).'<br>';
echo '<br>'.$key;
echo '<br>';
echo "2.I".'<br>';

foreach($array_var as $index => &$value) {
    if($index % 2 ==0) unset($index, $value);
     echo '<br>';
     print_r($index.'==>'.$value);
 }
 
echo '<br>'.'Ciklo pabaiga';



// array_multisort($array_var) ;
// echo '<pre>';
// print_r($array_var);
// echo  $array[28];
// echo '<br>';
// // $result = array_unique($array_var);
// // print_r($result);