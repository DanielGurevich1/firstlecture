<?php
session_start();
$countV = (isset($_SESSION['countV'])) ? $_SESSION['countV'] :0;
$_SESSION['countV'] = $countV;
    if(empty($_POST)) {
        $form = '<form action="" method="post">';
            $num = rand(3, 10);
                foreach (range(3, $num) as $_) {
                    $form .='<input type="checkbox" name="checks[]" value="1">';
                }
                $form .= '<input type="submit" name="check">FORM</form>';
            $bgColor = '#222';
        $fontColor = '#fff';
    } else {
        $bgColor = '#fff';
        $fontColor = '#000';
        if (!isset($_POST['checks'])) {
            $form = '<span style="font-size: 40px;">0</span>';
                } else {
                    $form = '<span style="font-size: 40px;">'.count($_POST['checks']).'</span>';
            }
    }
$countV++;
echo " printed $countV";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9 new</title>
</head>
<body style='background: <?=$bgColor?> ; display: grid; place-items: center;'>

    <p style="color: <?=$fontColor?>;">Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).</p>

    <?=$form?>

    <a style="color: <?=$fontColor?>;" href="http://localhost:8888/firstlecture/webm9/webm9_1.php">reset</a>
    
</body>
</html>

<!-- 10.	Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->