<?php

// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

for ($i=0; $i < 30; $i++) { 
    
    $rands = [];
    $num = false;
    while(!$num) {
        $userIdMax = 1000000;
        $userId = mt_rand(0,$userIdMax);
        $num = !in_array($userId, $rands) ;
    }
    $array55[] = ["user_id"=>$userId, "place_in_row"=>rand(0,100)];

}
echo '<pre>';
print_r($array55);

echo '<br>'.'<h2>task 5.2.6</h2>';
// 6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

usort($array55, function($a, $b){
    return $a["user_id"] <=> $b["user_id"];
});

print_r($array55);

echo '<br>'.'second part'.'<br>';

usort($array55, function($a, $b) {
    return $b["place_in_row"] <=> $a["place_in_row"];
});

print_r($array55).'<br>';
