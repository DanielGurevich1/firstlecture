<!-- Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t. -->
<?php
echo '<br>'."task 10".'<br>';
$array10 = [];
$array10[0] = rand(5,25);
$array10[1] = rand(5,25);


for ($i = 2; $i<15; $i++){
$array10[$i] = $array10[$i-1] + $array10[$i-2];
    
}
echo '<pre>';
print_r($array10);
echo '<br>';
?>
 