<?php
$a = 13;
function sudeti($vienas=8, $du=8)
{
    global $a;
    // $a++;
    // _dc($GLOBALS['a']);
   $rezultatas = $vienas + $du;
   return $rezultatas;
}
$array =['55'=>4, 888=>16];
//Norint iškviesti šią funkciją, reikia paduoti du parametrus:
echo sudeti(2,7,4,7);
echo '<br>';
echo sudeti(...$array);

//kintamieji nera matomi uz scoup rybu

function vidurkis(...$skaiciai) // tritaskia reiskia visi skaiciai patenka i masyva
   {
    _dc($skaiciai);  
    $sudetis = 0;
      foreach ($skaiciai as $val)
    {
      $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
   }
   echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
   echo '<br>';
   function foo() {
    static $index = 0;
    $index++;
    echo "$index\n";
}

foo();
foo();
foo();
echo '<br>'.'recursive'.'<br>';

function recursive($num){
    echo $num, '<br>'; //iejimo punktas
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
         recursive($num + 1); // return -> ismeta is funkcijos
    }
    echo "$num blabla<br>"; //isejimo punktas
}
// $startNum = 1;
recursive(1);
echo '<br>'.'anonimine funkcija'.'<br>';
$func = function($a, $b){
    return $a[0] <=> $b[0];
};
function aaa($a, $b){
    return $a[0] <=> $b[0];
};
    $masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, function ($a, $b){
    return $a[0] <=> $b[0];
}
);
_dc($masyvas);

echo '<br>'.'anonimine funkcija - matomumo rybos'.'<br>';

$result = 0;
$one = function()
{ 

};
var_dump($result); 

$two = function() use ($result) // kaip panaudoti $result
{ echo '<pre>';
    var_dump($result);
 };

$three = function() use (&$result)
{ var_dump($result); };
$four = function() use (&$result)
{ var_dump($result); };

$result++;

$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)
$result++;
$three();    // int(1)
$result++;
$four();

echo '<br>'.'anonimine rekursine funkcija '.'<br>';

$func = function ($limit = NULL) use (&$func) { 
    static $current = 10; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func(1,5); 
 }; 
  //  Kviečiam funkciją
 $func();
 

