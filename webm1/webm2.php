

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webm 2</title>
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
<a href="http://localhost:8888/firstlecture/webm1/webm2.php" style='color: blue;'>enter any color after ? sign</a>


</body>
</html>