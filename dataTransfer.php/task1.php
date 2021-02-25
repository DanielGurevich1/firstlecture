<?php

if (isset($_POST['vardas'])) {
    $vardas = $_POST['vardas'];
    header('Location: http://localhost:8888/firstlecture/dataTransfer/task1.php');
echo 'jusu vardas:'.$vardas;
}
echo '<br>';
if (isset($_POST['elpastas'])) {
    $elpastas = $_POST['elpastas'];
echo 'jusu elpastas:'.$elpastas;
}
_d($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
<form action="" method="post">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<input type="submit" value="Išsiųsti">
</form>

</body>
</html>