<?php require __DIR__.'/bootstrap.php';

// post scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $banana = $_POST['count'] ?? 0;
    $banana = (int) $banana;
    create($banana); //sukuria banana
    header('Location :'.URL);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW banana box</title>
</head>
<body>
    <h1>Banana</h1>
    <a href="<?= URL?> login.php">Create</a>
    <a href="<?= URL?>">Index</a>

   <form action="<?=URL?>create.php" method="post">
   Bananas in box <input type="text" name="count">
   <button type="submit">Create</button>
   
   </form>
</body>
</html>