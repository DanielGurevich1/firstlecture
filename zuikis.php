<?php 
echo '1 uzduotis';
echo '<br>';

$vardas = 'Daniel';
$pavarde = 'Gurevich';
$gimimoMetai = 1979;
$data = date("Y-m-d");
$amzius = $data - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai.";
echo '<br>';
echo '--------';
echo '<br>';

echo '2 uzduotis';
echo '<br>';

$pirmas = (rand(0, 4));
$antras = (rand(0, 4));

echo $pirmas;
echo '<br>';
echo $antras;
echo '<br>';
echo 'Ats:';
echo '<br>';
if ($pirmas > $antras) {
    echo ($pirmas / $antras);
} else {
    echo ($antras / $pirmas);
}

echo '<br>';
echo '--------';
echo '<br>';

echo '3 uzduotis';
echo '<br>';

$a = (rand(0, 25));
$b = (rand(0, 25));
$c = (rand(0, 25));

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';

echo 'vidurine reiksme:';
if ($a > $b && $a < $c) {
    echo $a; 
}
elseif ($a < $b && $c < $a) {
    echo $a; 
}
// elseif ($a < $c && $b < $c) {
//     echo $a; 
// }
 elseif ($b > $a && $b < $c) {
    echo $b;
 }
 elseif ($b < $a && $b > $c) {
    echo $b;
 }
 
 elseif ($c > $a && $c < $b) {
    echo $c;
}
 elseif ($c > $a && $c < $b) {
    echo $c;
}
 

elseif ($a == $b || $a == $c || $b == $c) {
    echo 'neimanoma pasirinkti vidurines reiksmes';
}

echo '<br>';
echo '--------';
echo '<br>';

echo '4 uzduotis';
echo '<br>';

$x = (rand(1, 10));
$y = (rand(1, 10));
$z = (rand(1, 10));

echo $x;
echo '<br>';
echo $y;
echo '<br>';
echo $z;
echo '<br>';

if ( $x >= $y && $x >= $z && ($y+$z) > $x) {
    echo 'galima sudaryti trikampi';
} 
elseif ($y >= $x && $y >= $z && ($x+$z) > $y) { 
    echo 'galima sudaryti trikampio';
} 
elseif (($z >= $x && $z >= $y && ($x+$y) > $z)) {
    echo 'galima sudaryti trikampio';
}
else { echo 'negalima sudaryti trikampio';}
echo '<br>';


echo '--------';
echo '<br>';

echo '5 uzduotis';
echo '<br>';

$s = (rand(0, 2));
$t = (rand(0, 2));
$u = (rand(0, 2));
$w = (rand(0, 2));


echo $s;
echo '<br>';
echo $t;
echo '<br>';
echo $u;
echo '<br>';
echo $w;
echo '<br>';

$nuliai = 0;
$vieniatai = 0;
$dvejatai = 0;

if ($s == 0) {
     $nuliai++;
} 
if ($t == 0 ) {
     $nuliai++;
} 
if ($u == 0) {
     $nuliai++;
} 
if ($w == 0) {
     $nuliai++;
}

echo "Random sugeneravo nuliu: $nuliai";
if ($s == 1) {
     $vienetai++;
} 
if ($t == 1) {
     $vienetai++;
} 
if ($u == 1) {
     $vienetai++;
} 
if ($w == 1) {
     $vienetai++;
}
echo '<br>';
echo "Random sugeneravo nuliu: $vienetai";
if ($s == 2) {
     $dvejatai++;
} 
if ($t == 2) {
     $dvejatai++;
} 
if ($u == 2) {
     $dvejatai++;
} 
if ($w == 2) {
     $dvejatai++;
}
echo '<br>';
echo "Random sugeneravo nuliu: $dvejatai";


?>