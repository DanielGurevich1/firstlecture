<?php

_d($_GET);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: http://localhost:8888/firstlecture/webm8/pink.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR8 pink</title>
</head>

<body style="background: #ff007f;">

<!-- <a href="?nuoroda=1">click</a> -->
<form action="submit">

<input type="text">
<button>???</button>
</form>

</body>
</html>