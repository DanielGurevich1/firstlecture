<!-- 6.	Padarykite puslapį su dviem mygtukais. 
Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. 

Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->

<?php 
$b = '#ffffff';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b = '#fee227';
}
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $b = '#3cb043';
}

// if (isset($_POST['post'])) {
//     echo "style='background: #fee227';";
// }
// if(isset($_GET['get'])) {
//     echo "style='background: #3cb043';";

// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebMech6</title>
</head>
<body style="background:<?=$b?>">

    <form action=""method="get">
    <button type="submit" name="get">Green</button>
    </form>
<br>

    <form action=""method="post">
    <button type="submit" name="post">Yellow</button>
    </form>
</body>
</html>