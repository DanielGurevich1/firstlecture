<?php

echo '<br>'.'<h2>task 5.2.1</h2>';
// 1.	Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
// $masyvas = [];
// foreach(range(1, 10) as $index1 => $val1){
// foreach(range(1, 5) as $index2 => $val2){
//     $masyvas[$index1][$index2] = rand(5,25);
// }
// }
echo "Su for loop----<br>";
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        $masyvas[$i][$j] = rand(5,25);
    }
}
echo '<pre>';
print_r($masyvas) ;

// per paskaita
$arrayx = [];

foreach (range(1, 10) as $index => $value) {
    foreach (range(1,5) as $index1 => $value1) {
        // $arrayx[$index][$index1] = rand(5, 40);
        $arrayx[$index][] = rand(5, 40); // [] -> autoatiskai generuojamas
    }
    # code...
}
echo '<pre>';
print_r($arrayx) ;

// _dc($masyvas);

echo '<br>'.'<h2>task 5.2.2.a)</h2>';
// a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$counter = 0;
foreach($masyvas as $smallArray){
    _d($smallArray, '$smallArray');
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
// b)	Raskite didžiausio elemento reikšmę;
// $max =  0;
// foreach($masyvas as $value){
//     foreach($value as $value1){
//        if ($value1 > $max) {
//            $max = $value1;
//        }
//     }
// }
$maxValue = PHP_INT_MIN;
// foreach($masyvas as $value){
//     $maxValue[] = max($value);
// }
$arraySum1 =[];
$Sum = [];
foreach ($arrayx as $index => $value) {
    $Sum[$index] = array_sum($value);
    foreach ($value as $index1 => $value1) {
        $arrayx[$index][$index1] = rand(5, 40);
        // $arrayx[$index][] = rand(5, 40); // [] -> autoatiskai generuojamas
        if ($value1 > $maxValue) {
            $maxValue = $value1;
        }
        $arraySum1[$index] = ($arraySum1[$index] ?? 0) + $value1;
    }
    $arrayx[$index][]=rand(100, 200);
    $arrayx[$index][]=rand(1000, 2000);
    
}

_dc($maxValue);
echo 'sum value in this array is:';
_dc($arraySum1);
echo 'E value in this array is:';
_dc($Sum);
echo '<pre>';
print_r($arrayx) ;

echo '<pre>';
echo 'max value in this array is:';
print_r($maxValue);
echo max($maxValue);

echo '<br>'.'<h2>task 5.2.2.c)</h2>';
// c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
$sumuMasyvas = [];

foreach ($masyvas as $mazasMasyvas) {
  foreach ($mazasMasyvas as $index=>$value) {
      //needs explanation
      if(!isset($sumuMasyvas[$index])){
          $sumuMasyvas[$index] = 0;
      }
    $sumuMasyvas[$index]+=$value;
  }
}
// }
echo '<pre>'; 
print_r($sumuMasyvas);
echo '<br>'.'<h2>task 5.2.2.d)</h2>';
// d)	Visus masyvus “pailginkite” iki 7 elementų
foreach ($masyvas as &$value) {
    while (count($value) < 7) {
        $value[] = rand(1,5);
    }
}

echo '<pre>';
print_r($masyvas) ;

echo '<br>'.'<h2>task 5.2.2.e)</h2>';
// e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

$masyvasIsSumu = [];
foreach ($masyvas as $mazasMasyvas) {
        $masyvasIsSumu[]= array_sum($mazasMasyvas);
    }
  echo '<pre>'; 
  print_r($masyvasIsSumu);


  echo '<br>'.'<h2>task 5.2.3</h2>';
//   3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
//Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$array5 = [];


        for ($i=0; $i < 10; $i++) { 
            $array5[$i]=[];
            $arrayLength = rand(2, 20);
                for ($j=0; $j < $arrayLength; $j++) { 
                    // array_push($array5, chr(rand(65,90)));
                    $array5[$i][$j]=chr(rand(65,90));
                }
            sort($array5[$i]);
        }
            echo '<br>';
            echo '<pre>';
            print_r($array5) ;
$az = range('A', 'Z');
_dc($az);
$dvimatisMasyvas = [];
foreach (range(1,10) as $key => $value3) {
    $length = rand(2, 20);
    foreach (range(1, $length) as $key1 => $value4) {
        $dvimatisMasyvas[$key][$key1] = $az[rand(0, 25)];
        range('A', 'Z');
    }
    sort($dvimatisMasyvas[$key]);
}
echo '<br>'.'<h2>task 5.2.3 New</h2>';
_dc($dvimatisMasyvas);

echo '<br>'.'<h2>task 5.2.4</h2>';
// 4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.
sort($array5);
print_r($array5);


echo '<br>'.'<h2>task 5.2.5</h2>';
// 5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 




echo '<br>'.'<h2>task 5.2.6</h2>';
// 6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

echo '<br>'.'<h2>task 5.2.7</h2>';
// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

echo '<br>'.'<h2>task 5.2.8</h2>';
// 8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

echo '<br>'.'<h2>task 5.2.9</h2>';
// 9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.


echo '<br>'.'<h2>task 5.2.10</h2>';
// 10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
