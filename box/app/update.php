<?php require __DIR__.'/bootstrap.php';

// post scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;

    $bananas = $_POST['count'] ?? 0;
    $bananas = (int) $bananas;

    update($id, $bananas); //sukuria banana
    header('Location:'.URL);
    die;
}

//get scenarijus
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $id = $_GET['id'] ?? 0;
   $id = (int) $id;
    $box = getBox($id);
    if(!$box) {
        header('Location:'.URL); // atgal i index
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update banana :<?$box['id']?></title>
</head>
<body>
    <h1>Update banana box ID: <?= $box['id'] ?></h1>
    <a href="<?= URL?>create.php">Create</a>
    <a href="<?= URL?>">Index</a>

   <form action="<?= URL?>update.php?id=<?= $box['id']?>" method="post">
   Bananas in box <input type="text" value="<?= $box['banana']?>" name="count">
   <button type="submit">Update</button>
   
   </form>
</body>
</html>