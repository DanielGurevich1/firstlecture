<?php
$x = (float) ($_POST['x'] ?? 0); //?? jeigu x == 0 ar x = null - priskiriam default reiksme 0;
$y = (float) ($_POST['y'] ?? 0); 

$sum = $x + $y;
setcookie ( 'Rezultatas' , $sum);
header('location: http://localhost:8888/firstlecture/webm1/calc.php');
die;


if(isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
setcookie('Rezultatas', '', time() - 5555);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc - Sum </title>
</head>
<body>
<h1>Sumatorius</h1>
<h3>Rezultatas: <?= $rez ?? '---' ?></h3>
    <form action="http://localhost:8888/firstlecture/webm1/calc.php" method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <button type="submit">Sum it</button>
    
    </form>
</body>
</html>