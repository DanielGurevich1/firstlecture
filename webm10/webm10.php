<?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $color = '#fff';
        } else {
            $color = '#000';
        }
            if(isset($_POST['checkButton'])) {
                if(empty($_POST['vilnius'])) {
                    echo 'nieko nepasirinkta';
                } else {

                    _d($_POST['vilnius']);
                    $sk = count($_POST['vilnius']);
                    
                    echo 'checked boxes: '.$sk;
                  
                    exit('<br><br><a href="http://localhost:8888/firstlecture/webm10/webm10.php">reload a task</a>');
                    
                    
                }
            }
            _d($_POST);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 10 </title>
</head>

<body style="background: <?= $color?>; color: blue;"> 

    <form action="" method="post">
    <button type="submit" name="checkButton" style="margin: 20px;">CLICK HERE</button><br>

<?php
$rand = rand(3, 10);
$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];
    session_start();
        $countChecks = (isset($_SESSION["countChecks"])) ? $_SESSION["countChecks"] : 0;
            $_SESSION["countChecks"] = $countChecks;    

for ($i=0; $i < $rand; $i++) { 
    ?>
                <label><?=$array[$i]?></label>
                <input type="checkbox" name="vilnius[]" value="1">
                <?php
                $countChecks++;
            echo '<br>';
        }
    
    echo "generated $countChecks";
    ?>

</form>
<!-- <br><a href="http://localhost:8888/firstlecture/webm9/webm9.php">reload a task</a> -->
</body>
<button><?=$countChecks?></button>

</html>

<!-- 10.	Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->
