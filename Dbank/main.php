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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach(read() as $client) : ?>
  <?php  _d($client);?>

    <tr>
      <th scope="row">1</th>
      <td><?= $client['A'] ?></td>
      <td><?= $client['B'] ?></td>
      <td><?= $client['C'] ?></td>
      <!-- <td>Otto</td>
      <td>@mdo</td> -->
    </tr>

    <?php endforeach ?>
  </tbody>
</table> 
</body>
</html>
