<?php
_d($_SERVER);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $color = '#fff';
}else{
    $color = '#000';
}
if (isset($_POST['batonas'])) {
    if (empty($_POST['vilnius'])) {
        echo 'zioply nieko nepazymetas';
    } else {
        _d($_POST['vilnius']);
        $skaicius = count($_POST['vilnius']);
        echo 'BUVO PAZYMETAS:' . $skaicius;
        die;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HW9</title>
</head>
<body style="background: <?=$color?>">
<form action="" method="post">
<button type="submit" name="batonas">BUTTON</button>
    <?php
    $letters = ['A','B', 'C', 'D','E', 'F','G','H', 'I','J'];
    $rand = rand(3, 10);
    for ($i= 0; $i < $rand; $i++){
    ?>
        <label style="color: beige" for="karosas"><?=$letters[$i]?></label>
        <input type="checkbox" value="box" name="vilnius[]">

    <?php
    }
    ?>
</form>
</body>
</html>