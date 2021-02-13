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
    $herbas=0;
    
    while ($herbuSuma < 3) {
        $coin = rand(0, 1);
                
                    if ($coin == 0 ) {
                        echo 'H ';
                        $herbuSuma++;
                        } else {
                            echo 'S ';
                            $herbuSuma=0;
                        }
                    }
                    
echo '<br>'.'<h2>task 7</h2>';

// Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, 
//Kazys surenka taškų kiekį nuo 5 iki 25. 

//Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 

//Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.



 

while ($Taskai1 < 222 && $Taskai2 < 222) {
    $kazioTaskai = rand(10, 20);
    $petroTaskai = rand(5, 25);


    if ($kazioTaskai > $petroTaskai) {
        $Taskai1 += $kazioTaskai;
    echo "Petras surinko $petroTaskai, Kazys surinko $kazioTaskai, tad laimejo Kazys surinkes $Taskai1.".'<br>';
} else {
    $Taskai2 += $petroTaskai;
    echo "Petras surinko $petroTaskai, Kazys surinko $kazioTaskai, tad laimejo Petras surinkes $Taskai2.".'<br>';

}
}

?>