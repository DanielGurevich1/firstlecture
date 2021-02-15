<?php

// Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių. (hammer)
// “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.

$nail = 85;
$viniuSkaicius = 5;
$smugiuSkaicius = 0;

for ($i = 0; $i < $viniuSkaicius; $i++){
    $remainingNail = 0;
    while ($remainingNail < 85) {
        $hammer = rand(5, 25);
        echo $hammer.'  |  ';
    $remainingNail += $hammer;
    $smugiuSkaicius++;
}
$x = $i+1;
echo "<span style=' color:red;'>$x vinis sukalta per $smugiuSkaicius</span>".'<br>';
$smugiuSkaicius = 0;
}

echo '<br><br>'.'Antras variantas'.'<br><br>';
for ($i = 0; $i < $viniuSkaicius; $i++){
    $remainingNail = 0;
    while ($remainingNail < 85) {
        $hit = rand(0,1);
        if ($hit == 1) {
        $hammer = rand(20, 30);
        echo $hammer.'  |  ';
        $remainingNail += $hammer;
    } else {
        continue;
    }
    $smugiuSkaicius++;
}
$x = $i+1;
echo "<span style=' color:red;'>$x vinis sukalta per $smugiuSkaicius</span>".'<br>';
$smugiuSkaicius = 0;
}
?>
