<?php

// 1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function text($text){
    return "<h1>$text</h1>";
}
echo text('Kuku');
echo text('Ir tau Kuku');

// 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
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


// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

// function countDividers(int $num){
//     $dividers = 0;
// $arrayDividers = [];
// // if (!is_int($num)) {
// //     echo 'Entrer integer only';
// // } else {
//     for ($i=2; $i < $num; $i++) { 
//         if ($num % $i ===0) {
//             $dividers++;
//             echo $i.'<br>';
//         }
//     }
//     return $dividers; 
// }
    
// echo countDividers(20);

// 5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

// $array66 = [];

// foreach (range(1, 100) as $key) {
//     $array66[]=rand(333,777);
// }
// $ilgis = count($array66);
// countDividers(0);
// for ($i=0; $i < $ilgis; $i++) { 
//     if(countDividers($array66[$i])==0) {
//         unset($array66[$i]);
//     }
// }
// echo '<pre>';
// print_r($array66);
// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
$rand = rand(10, 30);
function generateFunction($rand) {
    $num1 = rand(10, 20);
    for ($i=0; $i < $num1; $i++) { 
        if ($i < $num1 - 1) {
            $array77[$i] = rand(10, 20);
        } else {
            if ($rand > 0) {
                $array77[$i] = generateFunction($rand - 1);

            } else {
                $array77[$i]=0;
            }
        }
    }
return $array77;
}
echo '<pre>';
print_r(generateFunction($rand)) ;
// print_r($array77) ;

// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, suma
// function suma77() {
// $sum = 0;
// foreach ($array77 as $key => $value) {
//     # code...
// }
// }

// array_sum($array77[$i]);
// 9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
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
    while (isPrime($array9[count($array9)-1]) || isPrime($array9[count($array9)-2]) || isPrime($array9[count($array9)-3])) {
        $array9[] = rand(1, 33);
    }
    echo '<pre>';   
print_r($array9);

//10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
