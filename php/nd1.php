<?php
echo '<br>';

echo '6 uzduotis';
echo '<br>';
$s = (rand(1, 6));



echo $s;
echo '<br>';

if ($s == 1) 
    echo "<h1>$s</h1>";
if ($s == 2) 
    echo "<h2>$s</h2>";
if ($s == 3) 
    echo "<h3>$s</h3>";
if ($s == 4) 
    echo "<h4>$s</h4>";
if ($s == 5) 
    echo "<h5>$s</h5>";
if ($s == 6) 
    echo "<h6>$s</h6>";

echo '<br>';

echo '7 uzduotis';
echo '<br>';

$x = (rand(-10, 10));
$y = (rand(-10, 10));
$z = (rand(-10, 10));

if ($x < 0) {
    echo "<p><font color=green>$x</font></p>";
} 
elseif ($x == 0) {
    echo "<p><font color=red>$x</font></p>";
} 
else  {
    echo "<p><font color=blue>$x</font></p>";
} 

if ($y < 0) {
    echo "<p><font color=green>$y</font></p>";
} 
elseif ($y == 0) {
    echo "<p><font color=red>$y</font></p>";
} 
else  {
    echo "<p><font color=blue>$y</font></p>";
} 
if ($z < 0) {
    echo "<p><font color=red>$z</font></p>";
} 
elseif ($z == 0) {
    echo "<p><font color=green>$z</font></p>";
} 
else  {
    echo "<p><font color=blue>$z</font></p>";
} 

echo '<br>';

echo '8 uzduotis';
echo '<br>';

$zvakes = rand(5, 3000);
echo "Perkame $zvakes zvakiu";
echo '<br>';
// $kaina = $zvakes * 1;
if ($zvakes < 1000) {
    echo 'kaina yra 1 euras uz zvake';
    $kaina = $zvakes * 1;
} elseif ($zvakes < 2000) {
    echo 'Perkant urmu kaina yra 0.97 euras uz zvake';
    $kaina = $zvakes * 0.97;
} else {
    echo 'Kadangi jus esate pasaulinio lygio zvakiu pirkejas, kaina yra 0.96 euras uz zvake';
    $kaina = $zvakes * 0.96;
}
echo '<br>';
echo "Galutine kaina yra $kaina";
echo '<br>';

if ($kaina > 2000) {
    echo 'leiskit pasidometi, kam jums tiek zvakiu :)?';
}

echo '<br><br><br>';

echo '9 uzduotis';
echo '<br>';

$x = (rand(0, 100));
$y = (rand(0, 100));
$z = (rand(0, 100));

echo $x;
echo ' | ';
echo $y;
echo ' | ';
echo $z;
echo '<br>';

echo 'Skaiciu vidurkis: ';
echo ceil(($x + $y + $z)/3);
echo '<br><br>';
echo '2 dalis';
echo '<br>';
$x = (rand(10, 90));
$y = (rand(10, 90));
$z = (rand(10, 90));

echo $x;
echo ' | ';
echo $y;
echo ' | ';
echo $z;
echo '<br>';
echo 'Skaiciu vidurkis atmetus 0-10 ir 90-100: ';
echo ceil(($x + $y + $z)/3);

echo '<br><br><br>';

echo '10 uzduotis - laikrodis';
echo '<br>';

$h = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);

echo $h;
echo ' : ';
echo $min;
echo ' : ';
echo $sec;

echo '<br>';
$extra = rand(0, 300);
echo "papildomos sekundes $extra";
echo '<br>';
echo 'Naujas laikas:';
echo '<br>';
$naujoLaikoSekundes = $min*60+$sec+$extra;
echo $h;
echo ' : ';
echo floor($naujoLaikoSekundes/60);
echo ' : ';
echo $naujoLaikoSekundes - floor($naujoLaikoSekundes/60)*60;



?>