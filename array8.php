<?php

echo '<br>'.'<h2>task 5.2.8</h2>';
// 8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.



for ($i=0; $i < 3; $i++) { 
    $num = rand(0,5);
    echo $num.', ';
    for ($j=0; $j < $num; $j++) { 
        $int = rand(0,10);
        $masyvas[$i][$j] = $int;
        
    }
    if ($num == 0) {
        $masyvas[$i][$j] = rand(0, 10);

    }
}
echo '<pre>';
print_r($masyvas) ;
echo '<br>'.'<h2>Sorted array </h2>';
echo '<pre>';
array_multisort($masyvas, SORT_ASC);
echo '<pre>';
print_r($masyvas) ;

echo '<br>'.'<h2>task 5.2.9</h2>';
// 9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
$sumArray = [];
foreach ($masyvas as $i=>$subArray) {
  foreach ($subArray as $j=>$value) {
    $sumArray[$i]+=$value;
  }
}
print_r($sumArray);
echo '<br>'.'<h2>sum of Array value</h2>';
echo array_sum($sumArray).'<br>';
//sort
sort($sumArray);
echo '<br>'.'<h2>sorted array</h2>';

print_r($sumArray);

$sortedArray = [];
foreach ($masyvas as $i=>$subArray) {
  foreach ($subArray as $j=>$value) {
    $sumArray[$i]+=$value;
  }
}



