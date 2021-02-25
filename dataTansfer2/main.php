<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $x = (float) ($_POST['x'] ?? 0); //?? jeigu x == 0 ar x = null - priskiriam default reiksme 0;
    $y = (float) ($_POST['y'] ?? 0); 
    $sum = $x + $y;
    setcookie ( 'Rezultatas' , $sum);
    
    header('location: http://localhost:8888/firstlecture/dataTansfer2/main.php');
    die;
}



if(isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
setcookie('Rezultatas', '', time() - 555);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2 dataTransfer</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<main class="container">

<div class="left-column">
    <h1 style="margin-left:30px; color:darkorange" class="page-title">XY form</h1>
   
</div>

<div class="right-column">
    
    <form class="form" method="post">
        <div class="form-row">
            <label class="label" for="Username">X</label>
            <input class="input" name="x" placeholder="0">
        </div>
        <div class="form-row">
            <label class="label"for="">Y</label>
            <input class="input"name="y" placeholder="0">
        </div>
       
        <div class="form-row">
           <button style="padding:20px; margin: 20px">SUM</button>
            
             
        </div>
    </form>
    <div>
        <h3>Atsiųstų skaičių (x) ir (y) suma lygi  <?= $rez ?? '---' ?>.</h3>
    </div>
    

 </div>
</main>
</body>
</html>