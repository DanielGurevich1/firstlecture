<!-- /* 
Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:

Iškritus herbui;

Tris kartus iškritus herbui;

Tris kartus iš eilės iškritus herbui; */ -->
<?php
echo '<br>'.'<h2>task 6.1</h2>';

while (true) {
    $coin = rand(0, 1);
    echo $coin == 0 ?  'H' : 'S'.'<br>';
    if ($coin == 0) {
        echo '<br>'.'Iskrito herbas';
        break;
    } 
}

echo '<br>'.'<h2>task 6.2</h2>';

while (true) {
    $coin = rand(0, 1);
    echo $coin == 0 ?  'H' : 'S'.'<br>';
    if ($coin == 0) {
       echo (($herbas++)+1).'<br>';     
    } 
   if ($herbas == 3) {
        echo '<br>'." Iskrito herbas: $herbas kartus";
        break;
    }
        
    }

    echo '<br>'.'<h2>task 6.3</h2>';
?>