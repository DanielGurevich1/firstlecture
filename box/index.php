<?php require __DIR__.'/bootstrap.php';
_d(getNextId());
_d(getNextId());
_d(getNextId());
_d(getNextId());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create banana box</title>
</head>
<body>
    <h1>Banana</h1>
    <a href="<?= URL?> login.php">Create</a>
    <a href="<?= URL?>">Index</a>

    <ul>
    <?php foreach (readData() as $box) : ?> 

    <li>

    <span>ID: <?=$box['id']?></span>

    <span>Count: <?=$box['banana']?></span>

    <a href="<?=URL?>update.php?id"<?=$box['id']?>">[edit]</a>
    <a href="<?=URL?>delete.php?id"<?=$box['id']?>">[delete]</a>

    <form action="" method="post">
    <button type="submit">[delete]</button>
    
    </form>
    </li>
    
    <?php endforeach ?>
    </ul>
</body>
</html>