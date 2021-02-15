<?php

$masyvas = ['mano knygos', 'zurnalai' => 'seni žurnalai', 'zaislai' => 'katės žaislai', 'mano batai', 'test'];
echo '<pre>'; //kad atrodytu graziai
print_r($masyvas);

//iteruojame su foreach

foreach($masyvas as $value) {
    echo '<br>';
    echo $value;
}
echo '<br>';
$masyvas = ['mano knygos', 'zurnalai' => 'seni žurnalai', 'zaislai' => 'katės žaislai', 'mano batai', 'test'];
echo '<pre>'; //kad atrodytu graziai
print_r($masyvas);

//iteruojame su foreach

foreach($masyvas as $index => $value) {
    if ('zurnalai' == $value) {
$value = 'kazkas';
    }
}
echo '<br>';

foreach($masyvas as $index => $value) {
    echo '<br>';
    echo $index.'==>'.$value;
}
echo '<br>';
echo 'naudojimas foreach yra labiausiai paplites';
echo '<br>';
foreach(range('a','z') as $value) {
    echo ',';
    echo $value;
}
echo '<br>';
print_r(range(1,8));
$m = range(0, 5);
shuffle($m);
print_r($m);

echo current($m).',';
echo next($m).',';
echo end($m).',';


// $masyvas = ['mano knygos', 'zurnalai' => 'seni žurnalai', 'zaislai' => 'katės žaislai', 'mano batai', 'test'];
// echo '<pre>'; //kad atrodytu graziai
// var_dump($masyvas);

// $masyvas = [];
// $masyvas['kojinės'] = [];
// $masyvas['kojinės']['zalios'] ['siltos'] ['slidinejimo']= 'visos žalios kojinės';
// $masyvas['kojinės']['juodos'] = 'visos juodos kojinės';
// $masyvas['kojinės']['margos'] = 'visos margos kojinės';
// $masyvas['pirstines'] = [];
// $masyvas['pirstines']['kailines'] = 'mano kailinės pirštinės';
// $masyvas['pirstines']['odines'] = 'mano odinės pirštinės';
// $masyvas['nosines'] = 'visos mano nosinės';
// echo '<pre>'; //kad atrodytu graziai
// print_r($masyvas);
echo '<br><br>';
$masyvas = ['red', 'green', 'yellow', 'blue'];

foreach($masyvas as &$value) {
    
unset($value);
}
foreach($masyvas as $value) {
    echo '<br>';
    echo $value; 

}

echo '<br><br><br>';
$A = 5;
$B = &$A;
$A = 17;
echo $B;
echo '<br><br><br>';
while(true) {

    for ($i = 1;$i <= 15;$i++){
        if (rand(0, 10)> 9){
            break 2;
        }
        echo $i;
        echo '<br>';
      }
      echo 'Ciklo pabaiga';
      
}
echo '<br><br><br>';
$i = 0;
for ($i = 0;$i <= 5;$i++){
   if ($i==5){
       continue;
   }
   echo $i;
   echo '<br>';
}
echo 'Ciklo pabaiga';

?>
<!-- // => skiria indekasa nuo reiksmes -->