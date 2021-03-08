<?php 
include_once __DIR__.'/header.php';
require __DIR__.'/bootstrap.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Bank Page</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Balance</th>
      <th scope="col">ACC NUM</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach(read() as $client) : ?>

    <tr>
      <th scope="row"><?= $client['id'] ?></th>
      <td><?= $client['name'] ?></td>
      <td><?= $client['surname'] ?></td>
      
      <td><?= $client['balance'] ?></td>
      <td><?= $client['AC'] ?></td>
      <!-- <td>Otto</td>
      <td>@mdo</td> -->
    </tr>

    <?php endforeach ?>
  </tbody>
</table> 
</body>
</html>
