
<?php
if(isset($_GET['color']) && $_GET['color'] == 1) {
    $color = 'red';
} else {
    $color = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebM 1 </title>
</head>
<body style="background:<?=$color ?>;">

<a href="http://localhost:8888/firstlecture/webm1/webm1.php">Black</a>
<a href="http://localhost:8888/firstlecture/webm1/webm1.php?color=1">Red</a>
    
</body>
</html>
