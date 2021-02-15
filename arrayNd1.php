<?php

// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo '<br>'.'Home work Arrays, task nr. 1';
  $array_var = [];
  for ($i = 0;$i <= 29;$i++){
      $a = rand(5, 25);
      array_push($array_var, $a);
      if ($a > 10) {
          $countA++;
      }
} 
echo '<pre>';
print_r($array_var);
echo '<br>';
echo 'Home work Arrays, task nr. 2.1';
echo '<br>';
echo "Reksmiu didesniu uz 10 yra: $countA";
echo '<br>';
// var_dump(count($array_var, $a > 10));
echo "Reksmiu suma yra: ";
print_r(array_sum($array_var));
echo 'Ciklo pabaiga';
?>
