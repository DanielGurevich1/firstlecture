<?php

echo '<br><br><br>'.'task 8 - Rhombus with colored stars'.'<br><br><br>';
$h = 21;

$star = '*';
for ($i=1; $i < $h/2; $i++) { // eil skaicius
    $color = dechex(rand(0x000000, 0xFFFFFF));
    // tusti laukeliai
    for ($j = $i; $j < $h; $j++) // eilutes spausdinimas
    echo "<span style=' color:$color; padding:3px;'>&nbsp;&nbsp;</span>";
    
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        // zvaigzdutes
        $color1 = dechex(rand(0x000000, 0xFFFFFF));
    echo "<span style=' color:$color1; padding:3px;'>$star</span>";
}
echo "<br>";
}
//apatine dalis
for ($i = $h/2; $i > 0; $i--) {
    for ( $j = $h - $i; $j > 1; $j--){
        
        
        echo "<span style=' color:$color3; padding:3px;'>&nbsp;&nbsp;</span>";
    }
    for ($j = 2 * $i; $j > 0; $j--){
        $color2 = dechex(rand(0x000000, 0xFFFFFF));

        echo "<span style=' color:$color2; padding:3px;'>$star</span>";
    } // zvaigzdutes
    echo "<br>";
}
echo '<br><br><br>'.'task 9'.'<br><br><br>';

$timeStart = microtime(true);
$c = "10 bezdzioniu \n suvalge 20 bananu.";

for ($i = 0; $i < 1000000; $i++) {
     $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."dvigubu kabuciu laikas: $time".'<br><br><br>';

$timeStart = microtime(true);
$c = '10 bezdzioniu \n suvalge 20 bananu.';

for ($i = 0; $i < 1000000; $i++) {
      $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."Viengubu kabuciu laikas:$time";


?>