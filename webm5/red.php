<?php

_d($_GET);

if (isset($_GET['nuoroda'])) {
    header('Location: http://localhost:8888/firstlecture/webm5/red.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR5</title>
</head>

<body style="background: yellow;">


<!-- <a href="/webm5/red.php">RED</a> -->

<a href="?nuoroda=1">BLUE</a>
<!-- <a href="?color=red">RED</a> -->

</body>
</html>