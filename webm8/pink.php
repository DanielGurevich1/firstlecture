<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR8</title>
</head>

<body style="background: red;">
<?php

// _d($_POST);

if (isset($_POST['nuoroda'])) {
    header('Location: http://localhost:8888/firstlecture/webm8/rose.php');
}
?>

<form action="http://localhost:8888/firstlecture/webm8/rose.php"method="post">
    <button type="submit" name="color">Go to Rose</button>
    </form>

</body>
</html>