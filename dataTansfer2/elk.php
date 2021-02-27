<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $x = (float) ($_POST['x'] ?? 0); //?? jeigu x == 0 ar x = null - priskiriam default reiksme 0;
//     $y = (float) ($_POST['y'] ?? 0); 
//     $sum = $x + $y;
//     setcookie ( 'Rezultatas' , $sum);
    
//     header('location: http://localhost:8888/firstlecture/dataTansfer2/elk.php');
//     die;
// }



// if(isset($_COOKIE['Rezultatas'])) {
//     $rez = $_COOKIE['Rezultatas'];
// setcookie('Rezultatas', '', time() - 555);
// }

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
   
</div>

<div class="right-column">
    
    <form class="form" method="post">
       
            <label class="label" for="Username">X</label>
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
                echo '<p style="color:red;"> You have selected</p>';

            }
        }
    } else {
        echo 'Please choose at least one';
    }
} 
//  echo (value = "elk" ? 'you are right' : 'one more guess?');
?>
</main>
</body>
</html>