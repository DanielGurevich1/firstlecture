<?php
// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.




$array66 = [];

foreach (range(1, 10) as $key) {
    $array66[]=rand(333,777);
}

countDividers(0);
for ($i=0; $i < count($array66); $i++) { 
    if(countDividers($array66[$i]==0)) {
        unset($array66[$i]);
    }
}
print_r($array66);