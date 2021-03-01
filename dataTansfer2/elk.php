<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2 Animal</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<main class="container">

<div class="left-column">
    <h1 style="margin-left:30px; color:darkorange" class="page-title">Who is this animal?</h1>
   <img src="./elk.jpeg" alt="elk">
</div>

<div class="right-column">
    
    <form class="form" method="post">
       
            <p><input type="checkbox" name="animal[]" value="elk" >ELK</p>
            <p><input type="checkbox" name="animal[]" value="cat" >CAT</p>
            <p><input type="checkbox" name="animal[]" value="dier" >DIER</p>
            <p><input type="checkbox" name="animal[]" value="boar" >BOAR</p>
            <p><input type="submit" name="submit" value="submit" ></p>
            

       
    </form> 
    <div>
        <!-- <h3>Atsiųstų skaičių (x) ir (y) suma lygi  <?= $rez ?? '---' ?>.</h3> -->
    </div>
    
 </div>
<?php
if(isset($_POST["submit"])) {
    if (!empty($_POST["animal"])) {
        
        foreach ($_POST["animal"] as $animal) {
            if ($_POST["animal"] == "elk") {
                echo "<p style='color:blue;'>You were right.$animal</p>";
            } else {
                echo 'You have selected'.'$animal';

            }
        }
    } else {        echo 'Please choose at least one';
    }
} _d($_POST); 
//  echo (value = "elk" ? 'you are right' : 'one more guess?');
?>
</main>
</body>
</html>