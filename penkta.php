<?php

// $random_number_array = range(0, 100);
// shuffle($random_number_array );
// $random_number_array = array_slice($random_number_array, 0, 200);
// echo '<pre>';
// print_r($random_number_array);
// sort($random_number_array);
// print_r($random_number_array);

// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
// foreach ($array55 as $user_id => $value1) {
//     # code...
// }


// $n = 5;
// $rands = [];
// for($i=0; $i<$n;$i++) {
//   $ok = true;
//   while($ok) {
//     $x=mt_rand(0,$n);
//     $ok = in_array($x, $rands) ;
//   }
//   $rands[$i]=$x;
// }
// echo '<pre>';
// print_r($rands);

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
