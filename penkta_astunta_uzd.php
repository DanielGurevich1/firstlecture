<?php
echo '<br>'.'<h2>task 5.2.5</h2>';
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
$elements = 2;
for ($i=0; $i < $elements; $i++) { 

    $uniq = [];
    $uniq1 = [];
    $userIdMax = 5; // max value
        $userId = mt_rand(0, $userIdMax);
    foreach($uniq as $userId){
        if (!in_array($userId, $uniq)){
            array_push($uniq1, $userId);
        }
    }
    // $rands = [];
    // $num = false;
    // while(!$num) {
    //     $userIdMax = 5; // max value
    //     $userId = mt_rand(0, $userIdMax); // sukurtas elementas
    //     array_push($rands, $userId); // inserted into array rands
    //     print_r($rands);
    //     $num = !in_array($userId, $rands) ; // ar userID yra rands
    // }
    $array55[] = ['user_id'=>$userId, 'place_in_row'=>rand(0,100)];
   
    if($array55['user_id'] == $array55['user_id'+1]){
        $tempNum = $array55[$i];
        $array55[$i] = $array55[$i+ 1];
        $array55[$i+1] = $tempNum;
    }

}
echo '<pre>';
print_r($array55);

echo '</pre>';


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

echo '<br>'.'<h2>task 5.2.7</h2>';
// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

echo 'Letters: ';
$chars = 'qwertyuiopasdfghjklzxcvbnm';

for ($i=0; $i < $elements; $i++) { 
        
    $array55[$i]['name'] = substr(str_shuffle($chars), 0, rand(5, 15));
    $array55[$i]['surname'] = substr(str_shuffle($chars), 0, rand(5, 15));
}

print_r($array55);