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
                    die;
                    
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
    for ($i=0; $i < $rand; $i++) { 
            ?>
                <label><?=$array[$i]?></label>
                <input type="checkbox" name="vilnius[]" value="1">
            <?php
        echo '<br>';
    }?>


</form>
<br><a href="http://localhost:8888/firstlecture/webm9/webm9.php">reload a task</a>
</body>

</html>

<!-- 10.	Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->
