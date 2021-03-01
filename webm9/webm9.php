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
                  exit('<br><a href="http://localhost:8888/firstlecture/webm9/webm9.php">reload a task</a>');
                    
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
    <title>task 9 </title>
</head>

<body style="background: <?= $color?>; color: blue;"> 

    <form action="" method="post">
    <button style="margin-left:200px; padding: 20px;" type="submit" name="checkButton" >CLICK HERE</button><br>

<?php
$rand = rand(3, 10);
$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];
    // for ($i=0; $i < $rand; $i++) { 
    //         ?>
                <!-- <label style="margin-left:200px; font-size:x-large; padding: 20px;"><?=$array[$i]?></label> -->
    <!-- //             <input style="margin-left:20px; font-size:x-large;" type="checkbox" name="vilnius[]" value="1"> -->
    //         <?php
    //     echo '<br>';
    // }?>

<?php foreach($array as $key => $letter) : ?>
    <?php if($key+1 > $rand) break ?>
<span style="color:pink;"><input type="checkbox" name="<?= $letter?>"</span>
    <?php endforeach ?>

</form>
</body>

</html>
