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

