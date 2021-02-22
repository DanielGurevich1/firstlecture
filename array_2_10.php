<?php

echo '<br>'.'<h2>task 5.2.10</h2>';
// 10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
$array10 = [];
$size = 10;
$size1 = 10;

// for ($i=0; $i < $size; $i++) { 
//     for ($j=0; $j < $size1; $j++) { 
//         $arrayOfSymbols =['#','%','+','*','@','裡'];
//         $randSymb = array_rand($arrayOfSymbols,2);
//         $color = dechex(rand(0x000000, 0xFFFFFF)); 
//         $array10[$i][$j] = ['value'=>$arrayOfSymbols[$randSymb[0]], 'color'=>$color];
//     }
// }

// echo '<pre>';
// print_r($array10);

// for ($i=0; $i < 20; $i++) { 
//     for ($j=0; $j < 20; $j++) { 
//         echo "<span style='color:$color; padding:5px';>".$array10[$i][$j]['value'].'</span>';
//     }
//     echo '<br>';

// }
echo '<br>';


echo '<br>';
$trimatis =[];
$arrayOfSymbols =['#','%','+','*','@','裡'];
foreach (range(1,10) as $key => $value) {
    foreach (range(1,10) as $key1 => $value1) {
        $trimatis[$key][$key1]['value'] = $arrayOfSymbols[rand(0, 5)];
        $trimatis[$key][$key1]['color'] = '#'.dechex(rand(0x000000, 0xFFFFFF));
    }
}

foreach ($trimatis as $row) {
    // echo 'div';
    foreach ($row as $el) {
        echo '<span style="color:'.$el['color'].'>'.$el['value'].'</span>';
    }
    echo '<br>';
}

echo '<pre>';
print_r($trimatis);