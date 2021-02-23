<?php

// 1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<br>'.'<h2>task 6.1</h2>';
function text($text){
    return "<h1>$text</h1>";
}
echo text('Kuku');
echo text('Ir tau Kuku');

// 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo '<br>'.'<h2>task 6.2</h2>';
function textTag($text, $nr){
    return "<h$nr>$text</h$nr>";
}
echo textTag('Labas main', 1);
echo textTag('Labas lower', 2);
echo textTag('Labas', 3);
echo textTag('Labas', 4);
echo textTag('Labas', 5);
echo textTag('Labas', 6);

// 3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();

echo '<br>'.'<h2>task 6.3</h2>';
function textToH1($text) {
    return "<h1>$text</h1>";
};
echo textToH1('Task 3, test function H1');

$string = md5(time());
echo $string;

function numbersToH1($text){
    $stringNum = preg_replace_callback('/\d+/', 
    function($matches){
        return textToH1($matches[0]);
    }, 
    $text);
    return $stringNum;
}
echo numbersToH1($string);


// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo '<br>'.'<h2>task 6.4</h2>';
function countDividers(int $num){
    $dividers = 0;
$dividers = [];
// ask Arvydas
// if (!is_int($num)) {
//         echo 'Entrer integer only';
//     } else {
    if(!is_int($num)) {
        echo 'Entrer integer only';
    }
    for ($i=2; $i < $num; $i++) { 
        if ($num % $i == 0) {
            $dividers[] = $i;
            
            // echo $i.'<br>';
        }
    }
    return ['number' => $num, 'dividers' => $dividers, 'count' =>count($dividers)];
}
   echo '<pre>'; 
   print_r(countDividers(20)) ;
   echo '</pre>'; 

// 5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo '<br>'.'<h2>task 6.5</h2>';

function sortByDividersCount($a, $b) {
    return countDividers($b)['count'] <=> countDividers($a)['count'];
}

foreach (range(1, 100) as $_ ) {
    $randomNumbers[]=rand(33, 77);
}
echo 'Masyvas: '.implode(', ',$randomNumbers).'<br>';

usort($randomNumbers, 'sortByDividersCount');

echo 'Sorted by dividers count: ';
echo '<pre>'; 
   print_r($randomNumbers) ;
   echo '</pre>'; 

// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
echo '<br>'.'<h2>task 6.6</h2>';
// $array66 = [];

foreach (range(1, 100) as $key) {
    $array66[]=rand(333,777);
}

foreach ($array66 as $key => $value) {
    if(countDividers($value)['count']===0) {
        // echo $ilgis;
        unset($array66[$key]);
        
    }
}
echo '<pre>';
print_r($array66);
_dc(count($array66));
// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
// echo '<br>'.'<h2>task 6.7</h2>';
// $rand = rand(10, 30);
// function generateFunction($rand) {
//     $num1 = rand(10, 20);
//     for ($i=0; $i < $num1; $i++) { 
//         if ($i < $num1 - 1) {
//             $array77[] = rand(0, 10);
//         } else {
//             if ($rand > 0) {
//                 $array77[$i] = generateFunction($rand - 1);

//             } else {
//                 $array77[$i]=0;
//             }
//         }
//     }
// return $array77;
// }
// echo '<pre>';
// print_r(generateFunction($rand)) ;
// print_r($array77) ;

// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, suma
// echo '<br>'.'<h2>task 6.8</h2>';
// function countRecursiveArrayValues($array) {
// $sum = 0;
// foreach ($array as $value) {
//     if (is_numeric($value)) {
//         $sum += $value;
//         } else if (is_array($value)){
//             $sum += countRecursiveArrayValues($value);
//         }
// }
// return $sum;
// }
// echo 'Array values sum: '.countRecursiveArrayValues(generateFunction($rand));

// array_sum($array77[$i]);
// 9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
echo '<br>'.'<h2>task 6.9</h2>';
function isPrime($num) {
    if (0 == $num || 1==$num) return false;
    if (2== $num) return true;
    for ($i=2; $i < $num; $i++) { 
        if($num % $i == 0) return false;
    }
    return true;
}
for ($i=0; $i < 3; $i++) { 
    $array9[$i] = rand(1, 33);
}
    while (!isPrime($array9[count($array9)-1]) || !isPrime($array9[count($array9)-2]) || !isPrime($array9[count($array9)-3])) {
        $array9[] = rand(1, 33);
    }
    echo '<pre>';   
print_r($array9);

//10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 

//Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 

//Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
echo '<br>'.'<h2>task 6.10</h2>';

// surandame visus prime numbers

//suskaiciuojame vidurki

//jei jis < 70 - pridedame prie min - 3

// vel skaiciuojame vidurki - kvieciame rekursine funkcija dar karta

$array = [];
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $array[$i][$j]=rand(1, 100);
    }
}
function countAveragePrimeNums($array) {
    print_r($array);
     $countPrimes = 0;
     $sumOfPrimeNums = 0;
     
    foreach ($array as $value) {
        foreach ($value as $number) {
            if (isPrime($number)) {
                $sumOfPrimeNums += $number;
                $countPrimes++;
            }
        } 
    }
    return  $sumOfPrimeNums / $countPrimes; 
  
}
echo 'Average of all prime numbers is:'. countAveragePrimeNums($array);

function smallest($array) {
    $smallestNum = 101;
    foreach ($array as $value) {
        foreach ($value as $number) {
            if ($number < $smallestNum) {
                $smallestNum = $number;
            }
        }
    }
    return $smallestNum;
}
$x = smallest($array);
while (countAveragePrimeNums($array) < 70 ){
    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            if ($array[$i][$j] == $x) {
                $array[$i][$j] = $x+3;
                break 2;
            }
        }
    }
    $x = smallest($array);
}
echo '<br>'.'kas cia'.countAveragePrimeNums($array).'<br>';
