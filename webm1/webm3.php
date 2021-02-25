
<!-- 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webm 3</title>
</head>

<body

    <?php 

    _d($_GET);
    if (isset($_GET['color'])) {
        $color = $_GET['color'];
        echo "style='background: #".$_GET['color'].";'";
    }
?>>
<a href="web3.php" style='color: blue;'>enter color code</a>

<form action="" method="get">

    <input type="text" name="color">


<button type="submit">click to get a color</button>

</body>
</html>