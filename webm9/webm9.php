<?php
$rand = rand(3, 10);
$check = '<input type="checkbox" name="checks[]" value="1">';
// $masyvas = [];
$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];
// $letterArray = range('a', 'c');

for ($i=0; $i < $rand; $i++) { 
    
    print_r($array[$i].$check);
    echo '<br>';
   }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = '#fff';
    } else {
        $color = '#000';
    }

    if(isset($_POST["submit"])) {
        if (!empty($_POST["checks"])) {
            echo 'You have selected following letters';
            foreach ($_POST["checks"] as $check) {
                echo '$check';
            }
        } else {
            echo 'Please choose at least one';
        }
    }
       _d($_SERVER);
 ?>

<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C…  

Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9 </title>
</head>
<body>
<body style="background: <?= $color?>; color: blue;"> 

<form action="" method="post">

<button type="submit">POST</button>
</form>
</body>
</html>