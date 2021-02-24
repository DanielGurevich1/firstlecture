

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body

<?php 

_d($_GET);
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "style='background: #".$_GET['color'].";'";
}
?>
>
<a href="web2.php" style='color: blue;'>AnyPage</a>
<a href="web2.php"style='color: blue;'>AnyPage></a>

</body>
</html>